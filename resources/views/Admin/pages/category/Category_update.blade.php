@extends('Admin.main.main')
@section('content')
<div class="shadow-sm card">
    <h4 class="text-center pt-5 text-black-50">Update Category</h4>
    <p class="text-center text-black-50">{{$title}}</p>
    <form class="card-body" method="POST" action="">
    @csrf
        <div class="row-cols-md py-2">
            <label for="categoryName" class="form-label text-black fw-bolder">ID</label>
            <input type="text" id="categoryName"  class="form-control shadow-none" value="{{$menu->id}}" readonly>
        </div>
        <div class="row-cols-md py-2">
            <label for="categoryName" class="form-label text-black fw-bolder">Category Name</label>
            <input type="text" id="categoryName" name="txtCategoryName" class="form-control shadow-none" value="{{$menu->CategoryName}}" placeholder="Enter category name">
        </div>
        <div class="row-cols-md py-2">
            <label for="category" class="form-label text-black fw-bolder">Description</label>
            <textarea rows="4" id="category" name="txtDescription" class="form-control shadow-none" placeholder="Description is not greater than 200 charater">{{$menu->Description}}</textarea>

        </div>
        <div class="row-cols-md py-2">
            <label for="content" class="text-black fw-bolder">Details</label>
            <textarea id="editor1" name="txtDetail">{{$menu->Detail}}</textarea>
            <!-- <input type="text" id="content" name="txtContent " class="form-control shadow-none"> -->
        </div>
        <div class="py-2">
            <div class="mt-2">
                <input type="submit" value="Update Category" onclick="return confirm('Are you sure to update data')" class="btn btn-primary px-4 pt-2">
            </div>
        </div>
    </form>
</div>
@endsection