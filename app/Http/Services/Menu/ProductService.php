<?php


namespace App\Http\Services\Menu;

use App\Models\ProductCategory;

class ProductService
{
    public function getAll()
    {

        return ProductCategory::orderbyDesc('id')->paginate(20);
    }

    public function create($request)
    {
        
        return ProductModel::create();
    }
}
