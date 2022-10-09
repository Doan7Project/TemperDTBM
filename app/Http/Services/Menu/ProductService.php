<?php


namespace App\Http\Services\Menu;

use App\Models\Product;
use App\Models\ProductCategory;
use Exception;

class ProductService
{

    public function getAll()
    {

        return Product::paginate(20);
    }
    public function getCategoryName()
    {

        return ProductCategory::all();
    }

    public function insert($request)
    {
    
        // $request->except('_token');
     
        // Product::create($request->all());

        try {
            
               Product::create([
                    'product_name' =>$request->input('txtProductName'),
                    'product_code' => $request->input('txtProductCode'),
                    'price' => $request->input('txtPrice'),
                    'unit' => $request->input('txtUnit'),
                    'quantity' =>  $request->input('txtQuantity'),
                    'discount'=> $request->input('txtDiscount'),
                    'promotion_price'=> $request->input('txtPromotionPrice'),
                    'status' => $request->input('txtStatus'),
                    'models' => $request->input('txtModel'),
                    'made_in' => $request->input('txtMadein'),
                    'category_id' =>$request->input('txtCategoryID'),
                    'image' => $request->input('txtImage'),
                    'content' => $request->input('txtContent'),
                    'description' => $request->input('txtDescription'),
                ]);
                session()->flash('success', 'Create product is successfully: ' . $request->input('txtProductName'));
        } catch (\Exception $err) {
            session()->flash('error', $err->getMessage());
            return false;
        };
        return true;
    }
}
