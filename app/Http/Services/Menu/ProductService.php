<?php


namespace App\Http\Services\Menu;

use App\Models\Product;
use App\Models\ProductCategory;
use Exception;

class ProductService
{

    public function getAll()
    {
        $products = Product::all();
        return $products;
    }

    public function getProduct()
    {
        return Product::all();
        // $products = Product::first()->where('status', 'Active');

        if (isset($_GET['sort']) && !empty($_GET['sort'])) :
            if ($_GET['sort'] == "product_latest") :
               return Product::all()->orderby('id', 'Desc');
            elseif ($_GET['sort'] == "price_lowest") :
                return Product::all()->orderby('price', 'Asc');
            elseif ($_GET['sort'] == "price_highest") :
                return Product::all()->orderby('price', 'Desc');
            elseif ($_GET['sort'] == "name_a_z") :
                return Product::all()->orderby('product_name', 'Asc');
            elseif ($_GET['sort'] == "name_a_z") :
                return Product::all()->orderby('product_name', 'Desc');
            elseif ($_GET['sort'] == "product_featured") :
                return Product::all()->where('models', 'featured');
            elseif ($_GET['sort'] == "product_new_arrival") :
                return Product::all()->where('models', 'New arrival');
            elseif ($_GET['sort'] == "product_trending") :
                return Product::all()->where('models', 'Trending');
            elseif ($_GET['sort'] == "product_top") :
                return Product::all()->where('models', 'top');
            elseif ($_GET['price_sort'] == "price_a") :
                return Product::all()->where('models', 'top');
            endif;
        endif;

        if (isset($_GET['price_sort']) && !empty($_GET['price_sort'])) :
            if ($_GET['price_sort'] == "price_a") :
                return Product::all()->whereBetween('price', [0, 300])->orderby('price', 'Asc');
            elseif ($_GET['price_sort'] == "price_b") :
                return Product::all()->whereBetween('price', [300, 600])->orderby('price', 'Asc');
            elseif ($_GET['price_sort'] == "price_c") :
                return Product::all()->whereBetween('price', [600, 900])->orderby('price', 'Asc');
            elseif ($_GET['price_sort'] == "price_d") :
                return Product::all()->whereBetween('price', [900, 1200])->orderby('price', 'Asc');
            elseif ($_GET['price_sort'] == "price_e") :
                return Product::all()->whereBetween('price', [1200, 1800])->orderby('price', 'Asc');
            elseif ($_GET['price_sort'] == "price_f") :
                return Product::all()->where('price', '=>', 1800)->orderby('price', 'Asc');
            endif;

        endif;
    }

    public function getCategoryName()
    {

        return ProductCategory::all();
    }

    public function insert($request)
    {

        // $request->except('_token');

        // Product::create($request->all());
        $unique_id = 'FNI-' . floor(time() - 999999999);

        try {

            Product::create([
                'product_name' => $request->input('txtProductName'),
                'product_code' => $unique_id,
                'price' => $request->input('txtPrice'),
                'unit' => $request->input('txtUnit'),
                'quantity' =>  $request->input('txtQuantity'),
                'status' => $request->input('txtStatus'),
                'models' => $request->input('txtModel'),
                'made_in' => $request->input('txtMadein'),
                'category_id' => $request->input('txtCategoryID'),
                'images' => $request->input('txtImage'),
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
        $data->status = $request->input('txtStatus');
        $data->models = $request->input('txtModel');
        $data->made_in = $request->input('txtMadein');
        $data->category_id = $request->input('txtCategoryID');
        $data->images = $request->input('txtImage');
        $data->content = $request->input('txtContent');
        $data->description = $request->input('txtDescription');
        $data->save();
        session()->flash('success', 'Updated successfully! ' . $data->product_name);
        return true;
    }
}
