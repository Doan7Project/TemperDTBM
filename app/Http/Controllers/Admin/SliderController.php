<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\slide_show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    // #. 1 Hiển thị danh sách Slider
    // public function SliderList()
    // {
    //     return view('Admin.pages.slider.Slider_list');
    // }
    // #. 2 Hiển thị bảng thêm dữ liệu
    // public function SliderCreate()
    // {
    //     return view('Admin.pages.slider.Slider_create');
    // }
    // #. 3 Thực hiện lệnh thêm dữ liệu
    // public function SliderCreateProcess()
    // {
    // }
    // #. 4 Hiển thị bảng sửa dữ liệu
    // public function SliderUpdate()
    // {
    // }
    // #. 5 Thực hiện lệnh sửa dữ liệu
    // public function SliderUpdateProcess()
    // {
    // }
    // #. 6 Thực hiện lệnh xóa dữ liệu
    // public function SliderDeleteProcess()
    // {
    //     // return view('Admin.pages.Thumb_create');
    // }
    #. 1 Hiển thị danh sách Slider
    public function SliderList()
    {
        $slide = slide_show::all();
        // $slide = DB::table('slideshows')->select('*');
        // $slide = $slide->get();
        return view('Admin.pages.slider.Slider_list', compact('slide'));
    }
    #. 2 Hiển thị bảng thêm dữ liệu
    public function SliderCreate()
    {
        return view('Admin.pages.slider.Slider_create');
    }
    #. 3 Thực hiện lệnh thêm dữ liệu
    public function SliderCreateProcess(Request $request)
    {
        // dd($request->input());

        $slide = new slide_show;
        $slide->name = $request->input('name');
        $slide->status = $request->input('status');
        $slide->description = $request->input('description');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/images/slideshow', $filename);
            $slide->image = $filename;
        }
        $slide->save();


        return redirect()->route('listslide');
    }
    #. 4 Hiển thị bảng sửa dữ liệu
    public function SliderUpdate($id)
    {
        $slide = slide_show::find($id);
        // // $slide = DB::table('slideshows') ->where ('id',$id) ->first();
        return view('Admin.pages.slider.Slider_update', compact('slide'));
    }
    #. 5 Thực hiện lệnh sửa dữ liệu
    public function SliderUpdateProcess(Request $request, $id)
    {


        $slide = slide_show::find($id);
        $slide->name = $request->input('name');
        $slide->status = $request->input('status');
        $slide->description = $request->input('description');
        // if($slide->status == 'Active'){
        //     $status = 'Unative';
        // }else{
        //     $status = 'Active';
        // }


        if ($request->hasfile('image')) {
            $destination = 'assets/images/slideshow' . $slide->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/images/slideshow', $filename);
            $slide->image = $filename;
        }

        $slide->update();

        return redirect()->route('listslide');
    }
    #. 6 Thực hiện lệnh xóa dữ liệu
    public function SliderDeleteProcess($id)
    {
        // $anh = DB::table('slideshow') ->where ('id',$id ) ->delete();
        // return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        $slide = slide_show::find($id);
        $destination = 'assets/images/slideshow' . $slide->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $slide->delete();
        return redirect()->back()->with('status', 'Student Image Deleted Successfully');
    }
}
