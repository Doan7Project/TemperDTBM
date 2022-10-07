<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormProductRequest;
use App\Http\Services\Menu\ProductService;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected  $productservice;

    public function __construct(ProductService $productservice)
    {
        $this->productservice = $productservice;
    }
    # 1 Hiển thị danh sách product
    public function ProductList()
    {
        return view('Admin.pages.product.Product_list');
    }
    # 2 Hiện thị bảng tạo thông tin
    public function ProductCreate()
    {

        return view('Admin.pages.product.Product_create', [

            'title' => 'Category Code',
            'Menus' => $this->productservice->getAll()
        ]);
    }
    # 3 Thực hiện lệnh thêm dữ liệu
    public function ProductCreateProcess(CreateFormProductRequest $request)
    {

        dd($request->input());
        $result =   $this->productservice->create($request);
    }
    # 4 Truy vấn lấy dữ liệu từ DB vào form và hiển thị bảng update
    public function ProductUpdate()
    {
        return view('Admin.pages.product.Product_update');
    }
    # 5 Thực hiện lệnh chỉnh sữa dữ liệu
    public function ProductUpdateProcess()
    {
    }
    # 6 Thực hiện lệnh delete
    public function productDelete()
    {
    }
}
