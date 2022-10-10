<?php


namespace App\Http\Services\Menu;

use Exception;

class UploadService
{

    public function store($request)
    {
        if ($request->hasFile('file')) :
            try {

                $name = $request->file('file')->getClientOriginalName();
                $pathFull = 'uploads/' . date(format: "Y/m/d");
                $path = $request->file('file')->storeAs(
                    'public/' . $pathFull,
                    $name

                );
                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        endif;
    }
}
