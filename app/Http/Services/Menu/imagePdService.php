<?php

namespace App\Http\Services\Menu;

use App\Models\Product;
use App\Models\product_image;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\Session\Session;

class imagePdService
{

    public function getProductid()
    {
        return Product::all();
    }
    public function getAll()
    {
        return product_image::all();
    }
    public function insert($request)
    {

        try {
            product_image::create([

                'product_id' => $request->input('txtProductID'),
                'image' => $request->input('txtImage'),
                'content' => $request->input('txtContent'),
            ]);
            session()->flash('success', 'update successfully!');
        } catch (\Exception $err) {
            session()->flash('err', $err->getMessage());
            return false;
        };
        return true;
    }
    public function edit($request, $data): bool
    {

        $data->product_id  = $request->input('txtProductID');
        $data->image = $request->input('txtImage');
        $data->content = $request->input('txtContent');
        $data->save();
        session()->flash('success', 'Updated successfully! ' . $data->product_id);
        return true;
    }

}
