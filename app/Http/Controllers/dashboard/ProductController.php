<?php

namespace App\Http\Controllers\dashboard;

use DB;
use App\Helper\Upload;
use App\Http\Requests\dashboard\ProductRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::where('id', '>', 0);
        $products=$products->get();
        return view('dashboard.product.index',compact('categories','products'));
    }
    public function switch()
    {
        $product = Product::findOrFail(request('id'));
        $product->display = request('display');
        $product->save();
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.product.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
       
        $id = DB::table('products')->insertGetId([
            'category_id'   => $request->get('category'),
            'agent'         => $request->get('agent'),
            'name_ar'       => $request->get('name_ar'),
            'name_en'       => $request->get('name_en'),
            'desc_ar'       => $request->get('desc_ar'),
            'desc_en'       => $request->get('desc_en'),
            'price'         => $request->get('price'),
            'quantity'      => $request->get('quantity'),
            'expire'        => $request->get('expire'),
            'weight'        => $request->get('weight'),
            'cost'          => $request->get('cost'),
            'discount'      => $request->get('discount') ?? null,
            'discount_from' => $request->get('discount_from') ?? null,
            'discount_to'   => $request->get('discount_to') ?? null,
            'display'       => $request->get('display'),
            'deliverable'   => $request->get('deliverable'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        $imagesName = Upload::uploadImages(request('images'),
        'products/' .$id);

        foreach ($imagesName as $image) {
            DB::table('product_images')->insert([
                'product_id'    => $id ,
                'image'         => $image,
            ]);
        }
        return redirect()->back()->with('success', __('messages.productAddedSuccessfully'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product.show', compact('product'));
    }

    public function edit($id){
        $categories=Category::all();
        $product=Product::findOrFail($id);
        return view('dashboard.product.edit',compact('categories','product'));
    }

    public function update(ProductRequest $request,$id)
    {
        $product                = Product::findOrFail($id);
        $product->category_id   = $request->get('category');
        $product->name_ar       = $request->get('name_ar');
        $product->name_en       = $request->get('name_en');
        $product->desc_ar       = $request->get('desc_ar');
        $product->desc_en       = $request->get('desc_en');
        $product->price         = $request->get('price');
        $product->quantity      = $request->get('quantity');
        $product->expire        = $request->get('expire');
        $product->weight        = $request->get('weight');
        $product->cost          = $request->get('cost');
        $product->discount      = $request->get('discount') ?? null;
        $product->discount_from = $request->get('discount_from') ?? null;
        $product->discount_to   = $request->get('discount_to') ?? null;
        $product->display       = $request->get('display');
        $product->deliverable   = $request->get('deliverable');
        if (request('images')) {
            $imagesName = Upload::uploadImages(request('images'),
                'products/' . $product->id);
        }
        $product->save();

        if(isset($imagesName) && is_array($imagesName))
        {
            foreach($imagesName as $image)
            {
                DB::table('product_images')->insert([
                    'product_id'    => $product->id,
                    'image'         => $image,

                ]);
            }
        }
        return redirect()->back()->with('success', __('messages.productUpdatedSuccessfully'));
    }

    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        foreach($product->images as $image)
        {
            $image->delete();

        }
        Upload::deleteDirectory('products/' . $product->id);
        $product->delete();
        return redirect()->back()->with('success', __('messages.productDeletedSuccessfully'));

    }

}
