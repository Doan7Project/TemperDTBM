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

        $url =  $this->upload->store($request);
        if ($url != false) :
            return response()->json([
                'error' => false,
                'url' => $url
            ]);
        endif;
        return response()->json(['error' => true]);
    }
}
