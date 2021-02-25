<?php

namespace App\Http\Controllers;

use App\Functions\Functions;
use App\Models\Category;
use App\Models\DiseaseType;
use App\Models\LabLocation;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CatalogProduct;
use App\Models\Catalog;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'home'])->first();
        $faq = Page::withoutGlobalScopes()->where(['code_page' => 'faq'])->first();
        $about = Page::withoutGlobalScopes()->where(['code_page' => 'about-us'])->first();
        return view('front.index',compact('page','faq','about'));
    }

    public function shop(){
        $products = array();
        $model = Product::select('name','slug','code')->active()->simpleType()->get();

        foreach ($model as $product) {
            $alphabet = substr($product->name, 0, 1);
            $products[$alphabet][] = $product;
        }
        ksort($products);
        return view('front.shop',compact('products'));
    }

    public function product_detail($slug){
        if (is_numeric($slug)){
            $product = Product::where('id',$slug)->firstOrFail();
        }else{
            $product = Product::where('slug',$slug)->firstOrFail();
        }
        return view('front.product-detail', compact('product'));
    }

    public function bundle(){
        $model = Product::select('id','name','slug','code','description','price','sale_price')->active()->bundleType()->get();

        $allCategories = Catalog::orderBy('order', 'asc')->get();
        $categories = array();
        foreach ($allCategories as $category) {
            if ($category->parent_id == 0) {
                $categories[$category->id]['name'] = $category->name;
            } else {
                $categories[$category->parent_id]['categories'][$category->id] = $category->name;
            }
        }

        $modelProductsCategories = CatalogProduct::get();
        $productCategories = array();
        foreach ($modelProductsCategories as $pc) {
            if (!array_key_exists($pc->product_id,$productCategories)){
                $productCategories[$pc->product_id][] = $pc->catalog_id;
            }else{
                array_push($productCategories[$pc->product_id],$pc->catalog_id);
            }
        }
        return view('front.bundle', compact('model', 'categories', 'productCategories'));
    }

    public function testbydisease(){
        $diseaseTypes = DiseaseType::select('id','name')->orderBy('name','asc')->get();
        return view('front.testbydisease', compact('diseaseTypes'));
    }
    public function testlistbydisease($id = null){
        $disease = DiseaseType::where('id',$id)->firstOrFail();

        if(!empty($disease)){
            $products = Product::whereIn('id',explode(',',$disease->products))->get();
        }else{
            $products = "No Test Found";
        }
        //    print_r($get_product_details);exit;
        return view('front.testlistbydisease', compact('products','disease'));
    }

    public function blog(Request $request,$slug = ''){
        $where = array();
        $category = null;
        if (!empty($slug)){
            $category = Category::where('slug',$slug)->firstOrFail();
            $where[] = ['category_id','=',$category->id];
        }
        if ($request->has('q')){
            $where[] = ['title','LIKE','%'.$request->get('q').'%'];
        }
        $posts = Post::published()->where($where)->orderBy('featured', 'DESC')->orderBy('created_at', 'DESC')->paginate(9);
        $latestPosts = Post::published()->orderBy('created_at', 'DESC')->take(5)->get();
        $categories = Category::all();
        return view('front.blog',compact('posts','categories','latestPosts','category'));
    }

    public function post_detail($slug){
        $post = Post::published()->where([['slug','=',$slug]])->firstOrFail();
        $similarPosts = Post::where("category_id", '=', $post->category_id)->limit(3)->get();
        return view('front.blog-detail',compact('post','similarPosts'));
    }

    public function faq(){
        $faq = Page::withoutGlobalScopes()->where(['code_page' => 'faq'])->first();
        return view('front.faq',compact('faq'));
    }

    public function howToOrder(){
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'how-to-order'])->first();
        return view('front.how-to-order',compact('page'));
    }

    public function aboutUs(){
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'about-us'])->first();
        return view('front.about-us',compact('page'));
    }

    public function privacy(){
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'privacy'])->first();
        return view('front.privacy',compact('page'));
    }
    public function terms(){
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'terms'])->first();
        return view('front.terms',compact('page'));
    }

    public function credits(){
        $page = Page::withoutGlobalScopes()->where(['code_page' => 'site-credits'])->first();
        return view('front.credits',compact('page'));
    }

    public function page_detail($slug){
        $page = Page::where(['slug' => 'page/'.$slug])->firstOrFail();
        return view('front.page-detail',compact('page'));
    }

    public function locations(Request $request){
        $locations = array();
        $search['zip'] = $request->input('zip');
        $search['city'] = $request->input('city');
        $search['state'] = $request->input('state');
        $search['search'] = $request->input('search');

        $locations = array();
        $subSql = "";
        $sqlSelect = "";
        $tableName = "labs_locations";
        $dist = 9;
        $orderSql = "";
        if ($search['search'] == 1) {
            if ($search['city'] != '') {
                $subSql .= " and city  like '" . $search['city'] . "%' ";
            }
            if ($search['zip'] != '' && is_numeric($search['zip']) && strlen($search['zip']) == 5) {

                $url = "http://maps.googleapis.com/maps/api/geocode/json?address=USA&components=postal_code:" . $search['zip'] . "&sensor=false";
                $response = Functions::makeCurlRequest($url);
                $response = json_decode($response);
                if ($response->status == 'OK') {
                    if ($search['state'] == "") {
                        $search['state'] = $response->results['0']->address_components[3]->short_name;
                    }

                    $lng = $response->results['0']->geometry->location->lng;
                    $lat = $response->results['0']->geometry->location->lat;
                    $origLat = $lat;
                    $origLon = $lng;
                    $sqlSelect .= ",longitude, 3956 * 2 * ASIN(SQRT( POWER(SIN(($origLat - latitude)*pi()/180/2),2) +COS($origLat*pi()/180 )*COS(latitude*pi()/180)*POWER(SIN(($origLon-longitude)*pi()/180/2),2))) as distance";
                    $subSql .= " and longitude between ($origLon-$dist/cos(radians($origLat))*69) and ($origLon+$dist/cos(radians($origLat))*69) and latitude between ($origLat-($dist/69)) and ($origLat+($dist/69))";
                    $orderSql = " order by distance asc";
                }
            }

            if ($search['state'] != "") {
                $subSql .= " and state =  '" . $search['state'] . "' ";
            }


            $sql = "SELECT id,name,address,city,state,zip,zipCode,address2,longitude,latitude,phone " . $sqlSelect . " FROM $tableName where (longitude<>0 and latitude!=0) " . $subSql . $orderSql;
            $locations = DB::select($sql);
        }
        return view('front.locations',compact('locations'));
    }

    public function location($id, Request $request) {
        $search['zip'] = $request->input('zip');
        $search['city'] = $request->input('city');
        $search['state'] = $request->input('state');
        $location = LabLocation::findOrFail($id);
        return view('front.location', compact('location', 'search'));
    }
}
