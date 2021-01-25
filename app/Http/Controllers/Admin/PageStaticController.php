<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Http\Request;
class PageStaticController extends Controller
{
    protected $errorsMessage;
    protected $hasError = false;
    protected $validateField;
    protected $data;

    public function __construct(Request $request)
    {
        $this->validateField = [
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,'.($request->code ?? null).',code_page',
        ];
    }

    public function index()
    {
        $pages = Page::PageStatic()->paginate(10);
        return view('admin.page-static.index', compact('pages'));
    }

    public function detail(Request $request, $code = null)
    {
        if ($request->isMethod('POST')) {
            if (!is_dir(storage_path('app/public').'/page_static')) {
                \File::makeDirectory(storage_path('app/public').'/page_static', $mode = 0777, true, true);
            }
            switch ($code) {
                case 'home':
                    $this->validateHome($request);
                    break;
                default:
                    $this->validateHome($request);
            }
            if($this->hasError == true){
                return redirect()->back()->withInput($request->all())->withErrors($this->errorsMessage);
            }

            Page::where(['code_page' => $code])->update(['body' => json_encode($request->except('_token'))]);
            return redirect()->route('admin.page-static.index')->with('success', 'Successfully Update Page');
        } else {
            $page = Page::where('code_page', $code)->firstOrFail();
            return view('admin.page-static.detail', compact('page'));
        }
    }

    public function validateHome($request)
    {
        $validator = Validator::make($request->all(), $this->validateField);
        if ($validator->fails()) {
            $this->hasError = true;
            $this->errorsMessage = $validator->errors();
        }
        if($request->hasFile('img_icon_1_section1')){
            $image = uploadFile('./uploads/page_static','img_icon_1_section1');
            $request->img_icon_1_section1 = $image;
        }


    }



}
