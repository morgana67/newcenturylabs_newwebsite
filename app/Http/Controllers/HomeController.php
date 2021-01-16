<?php

namespace App\Http\Controllers;

use App\Models\DiseaseType;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CatalogProduct;
use App\Models\Catalog;
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
        return view('index');
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
        $product = Product::where('slug',$slug)->firstOrFail();
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
}
