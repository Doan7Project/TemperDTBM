@extends('Admin.main.main')
@section('content')

<div class="shadow-sm card">
    <h4 class="text-center pt-5 text-black-50">New Category Creating</h4>
    <p class="text-center text-black-50">Create the information to category</p>
    <form action="" class="card-body" method="post">

        @if (Session::has('success'))
        <div class="alert alert-success opacity-100">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="row-cols-md py-2">
            <label for="categoryName" class="form-label text-black fw-bolder">Category Name</label>
            <input type="text" id="categoryName" name="txtCategoryName" class="form-control shadow-none" value="{{old('txtCategoryName')}}" placeholder="Enter category name">
            @error('txtCategoryName')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row-cols-md py-2">
            <label for="category" class="form-label text-black fw-bolder">Description</label>
            <textarea rows="4" id="category" name="txtDescription" class="form-control shadow-none" value="{{old('txtDescription')}}" placeholder="Description is not greater than 200 charater"></textarea>
            @error('txtDescription')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="row-cols-md py-2" >
            <label for="content" class="text-black fw-bolder">Details</label>
            <textarea id="editor1" name="txtDetail" value="{{old('txtDetail')}}"></textarea>
            <!-- <input type="text" id="content" name="txtContent " class="form-control shadow-none"> -->
        </div>
        <div class="py-2">
            <div class="mt-2">
                <input type="submit" value="Create Category" class="btn btn-primary px-4 pt-2">
            </div>
        </div>
        @csrf
    </form>
</div>

@endsection