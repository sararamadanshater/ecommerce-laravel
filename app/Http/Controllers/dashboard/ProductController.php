<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Upload;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use DB;
use Exception;
use Illuminate\Http\Response;


class ProductController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        $products = Product::where('id', '>', 0);
        if (isset($_GET['price_from']) && !empty($_GET['price_from'])) {
            $products = $products->where('price', '>=', $_GET['price_from']);
        }
        if (isset($_GET['price_to']) && !empty($_GET['price_to'])) {
            $products = $products->where('price', '<=', $_GET['price_to']);
        }
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $products = $products->where('category_id', $_GET['category']);
        }
    
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $products = $products->where(function ($query) {
                $query->where('name_ar', 'LIKE', "%{$_GET['name']}%")
                    ->orWhere('name_en', 'LIKE', "%{$_GET['name']}%");
            });
        }
        $products = $products->get();

        return view('dashboard.product.index', compact('products', 'categories'));
    }

   
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.product.create', compact('categories'));
    }

    
    public function store(ProductRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'products'");
        $next_id = $next_id[0]->Auto_increment;
        $imagesName = Upload::uploadImages(request('images'),
            'products/' . $next_id);
        DB::table('products')->insert([
            'category_id'   => $request->get('category'),
            'name_ar'       => $request->get('name_ar'),
            'name_en'       => $request->get('name_en'),
            'desc_ar'       => $request->get('desc_ar'),
            'desc_en'       => $request->get('desc_en'),
            'price'         => $request->get('price'),
            'quantity'      => $request->get('quantity'),
            'code'          => $request->get('code'),
            'cost'          => $request->get('cost'),
            'discount'      => $request->get('discount') ?? null,
            'discount_from' => $request->get('discount_from') ?? null,
            'discount_to'   => $request->get('discount_to') ?? null,
            'display'       => $request->get('display'),
            'deliverable'   => $request->get('deliverable'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        foreach ($imagesName as $image) {
            DB::table('product_images')->insert([
                'product_id'    => $next_id,
                'image'         => $image,
            ]);
        }
        return redirect()->back()->with('success', __('messages.productAddedSuccessfully'));
    }

    
    
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
