<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormProductRequest;
use App\Http\Services\Menu\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{

    protected $productservice;


    public function __construct(ProductService $productService)
    {
        $this->productservice = $productService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        return view('Admin.pages.product.Product_list', [
            'title' => "Product List",
            'items' => $this->productservice->getAll(),
        ]);
    }
    public function search(Request $request)
    {
        $output = "";
        $product = Product::where('product_name', 'LIKE', '%' . $request->search . '%')->orWhere('product_code', 'LIKE', '%' . $request->search . '%')->get();

        foreach ($product as $data) {
            $output .=
                '<tr>
                <td VALIGN=Middle Align=Middle>' . $data->id . '</td>
                <td VALIGN=Middle Align=Left>' . $data->product_code . '</td>
                <td VALIGN=Middle Align=Left>' . $data->product_name . '</td>
                <td VALIGN=Middle Align=Left>' . $data->price . '</td>
                <td VALIGN=Middle Align=Left>' . $data->unit . '</td>
                <td VALIGN=Middle Align=Middle>' . $data->quantit . '</td>
                <td VALIGN=Middle Align=Middle>' . $data->discount . '</td>
                <td VALIGN=Middle Align=Left>' . $data->promotion_price . '</td>
                <td VALIGN=Middle Align=Left>' . $data->status . '</td>
                <td VALIGN=Middle Align=Left>' . $data->models . '</td>
                <td VALIGN=Middle Align=Left>' . $data->made_in . '</td>
                <td VALIGN=Middle Align=Middle>' . $data->category_id . '</td>
                <td VALIGN=Middle Align=Left>' . '<img src="' . $data->image . '" style="width: 100%;" alt="">' . '</td>
                <td VALIGN=Middle Align=Left>' . $data->content . '</td>
                <td VALIGN=Middle Align=Left>' . $data->description . '</td>
                <td VALIGN=Middle Align=Middle>' . '<a class="btn btn-primary" href="Admin/pages/Category_update/' . $data->id . '"><i class="bi bi-pencil-square text-white pe-2"></i>' . 'Edit</a>' . '</td>
                <td VALIGN=Middle Align=Middle>' . '<a class="btn btn-danger" href="Admin/pages/Category_update/' . $data->id . '"><i class="bi bi-pencil-square text-white pe-2"></i>' . 'Delete</a>' . '</td>
               </tr>';
        }
        return response($output);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('Admin.pages.product.Product_create', [
            'title' => 'Category Name',
            'Menus' => $this->productservice->getCategoryName()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormProductRequest $request)
    {
         $this->productservice->insert($request);
        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
