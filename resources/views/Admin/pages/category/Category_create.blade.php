@extends('Admin.main.main')
@section('content')

<div class="shadow-sm card">
    <h4 class="text-center pt-5 text-black-50">New Category Creating</h4>
    <p class="text-center text-black-50">Create the information to category</p>
    <form action="{{url('Admin/pages/save')}}" class="card-body" method="post">
        
        <div class="row-cols-md py-2">
            <label for="categoryCode" class="form-label text-black fw-bolder">Category Code</label>
            <input type="text" id="categoryCode" name="txtCategoryCode" class="form-control shadow-none" value="{{old('txtCategoryCode')}}" placeholder="Enter category code">
            @error('txtCategoryCode')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row-cols-md py-2">
            <label for="category" class="form-label text-black fw-bolder">Category Name</label>
            <input type="text" id="category" name="txtCategory" class="form-control shadow-none" value="{{old('txtCategory')}}" placeholder="Enter category name">
            @error('txtCategory')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row-cols-md py-2">
            <label for="content" class="text-black fw-bolder">Description</label>
            <textarea id="editor1" name="txtDescription" class="form-control shadow-none "></textarea>
            <!-- <input type="text" id="content" name="txtContent " class="form-control shadow-none"> -->
        </div>
<<<<<<< HEAD
=======
        <div class="row-cols-md py-2">
            <label for="thumb" class="text-black">Image</label>
            <input type="file" id="thumb" name="txtThumb " class="form-control shadow-none text-black-50" onchange="loadFile(event)">

        </div>

>>>>>>> c35a3d273be1c0ad67b1067a1e8000a3ee3cf749
        <div class="py-2">
            <div class="mt-2">
                <input type="submit" value="Create Category" class="btn btn-primary px-4 pt-2">
            </div>
        </div>
        @csrf
    </form>
</div>

@endsection