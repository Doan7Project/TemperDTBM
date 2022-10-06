<?php


namespace App\Http\Services\Menu;

use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\Session\Session;

class MenuService
{

    public function create($request)
    {
        try {
            ProductCategory::create([
                'CategoryCode' => (string) $request->input('txtCategoryCode'),
                'Name' => (string) $request->input('txtCategory'),
                'Description' => (string) $request->input('txtDescription'),
            ]);
        //    Session::flash('success','Create successfully');
        } catch (Exception $err) {
        //   Session::flash('error',$err->getMessage());
            return false;
        };
        return true;
    }
}
