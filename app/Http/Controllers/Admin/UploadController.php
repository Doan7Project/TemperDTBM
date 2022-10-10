<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\UploadService;
use App\Models\Product;

class UploadController extends Controller
{
    //
    protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }
    public function store(Request $request)
    {
        dd($request->file());
    }
}
