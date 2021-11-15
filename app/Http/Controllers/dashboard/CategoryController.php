<?php

namespace App\Http\Controllers\dashboard;
// use DB;
use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('dashboard.category.index',compact('categories'));
    }

    public function create(){
        return view('dashboard.category.create');
    }

    public function store(CategoryRequest $request){
        
        
        // $category=Category::all();
        // $lastId=$category->last()->id;
        // $id=$lastId+1;
        // // dd($id);
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'categories'");
        $next_id = $next_id[0]->Auto_increment;
        $imageName = Upload::uploadImage($request->file('image'), 'categories/' . $next_id);
        DB::table('categories')->insert([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'image' => $imageName,
            'display' => $request->get('display'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('success', __('messages.categoryAddedSuccessfully'));

    }

    public function show($id){
        $category=Category::findOrFail($id);
        return view('dashboard.category.show',compact('category'));
    }

    public function edit($id){

        $category=Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request ,$id){
        $category = Category::findOrFail($id);
        $category->name_ar = $request->get('name_ar');
        $category->name_en = $request->get('name_en');
        $category->display = $request->get('display');
        if ($request->file('image')) {
            $category->image = Upload::uploadImage($request->file('image'),
                'categories/' . $category->id, $category['image']);
        }
        $category->save();
        return redirect()->back()->with('success', __('messages.categoryUpdatedSuccessfully'));

    }
    public function destroy($id){
        $category=Category::findOrFail($id);
        // dd($category->products);
        if($category->products->count() == 0){
            Upload::deleteDirectory('categories/'.$category->id);
            $category->delete();
            return redirect()->back()->with('success', __('messages.categoryDeletedSuccessfully'));
        }
        else{

            return redirect()->back()->with('danger', __('messages.categoryHasProducts'));
        }

    }

    public function switch()
    {
        $category = Category::findOrFail(request('id'));
        $category->display = request('display');
        $category->save();
    }

    public function products($id)
    {
        $products = Product::where([
            ['category_id', $id],
            ['display', 1]
        ])->get([
            'id',
            "name_" . app()->getLocale() . " as name"
        ]);

        if (!$products) {
            $products = [];
        }

        return response()->json($products, 200);
    }
    
    

}
