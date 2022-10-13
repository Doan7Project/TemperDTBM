<?php


namespace App\Http\Services\Menu;

use App\Models\Product;
use App\Models\ProductCategory;
use Exception;

class ProductService
{

    public function getAll()
    {

        return Product::all();
    }
    public function getCategoryName()
    {

        return ProductCategory::all();
    }

    public function insert($request)
    {

        // $request->except('_token');

        // Product::create($request->all());
        $unique_id ='FNI-'. floor(time()-999999999);
     
        try {

            Product::create([
                'product_name' => $request->input('txtProductName'),
                'product_code' => $unique_id,
                'price' => $request->input('txtPrice'),
                'unit' => $request->input('txtUnit'),
                'quantity' =>  $request->input('txtQuantity'),
                'discount' => $request->input('txtDiscount'),
                'promotion_price' => $request->input('txtPromotionPrice'),
                'status' => $request->input('txtStatus'),
                'models' => $request->input('txtModel'),
                'made_in' => $request->input('txtMadein'),
                'category_id' => $request->input('txtCategoryID'),
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

    public function edit($request, $data): bool
    {
        $data->product_name = $request->input('txtProductName');
        $data->product_code = $request->input('txtProductCode');
        $data->price = $request->input('txtPrice');
        $data->unit = $request->input('txtUnit');
        $data->quantity = $request->input('txtQuantity');
        $data->discount = $request->input('txtDiscount');
        $data->promotion_price = $request->input('txtPromotionPrice');
        $data->status = $request->input('txtStatus');
        $data->models = $request->input('txtModel');
        $data->made_in = $request->input('txtMadein');
        $data->category_id = $request->input('txtCategoryID');
        $data->image = $request->input('txtImage');
        $data->content = $request->input('txtContent');
        $data->description = $request->input('txtDescription');
        $data->save();
        session()->flash('success', 'Updated successfully! '. $data->product_name);
        return true;
    }
}
