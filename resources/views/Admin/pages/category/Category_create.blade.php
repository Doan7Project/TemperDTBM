@extends('Admin.main.main')
@section('content')

<div class="card shadow-sm" style="width: 500px ;">
    <h4 class="text-center pt-5 text-black-50">Category Create</h4>
    <p class="text-center text-black-50">Create the information to category</p>
    <form action="" class="card-body">
        <div class="row py-2">
            <div class="col-md-4">
                <label for="categoryCode" class="form-label text-black">Category Code</label>
                <input type="text" id="categoryCode" name="txtCategoryCode" class="form-control shadow-none">
            </div>
            <div class="col-md-8">
                <label for="category" class="form-label text-black">Category Name</label>
                <input type="text" id="category" name="txtCategory " class="form-control shadow-none">
            </div>
        </div>
        <div class="row-cols-md py-2">
            <label for="content" class="text-black">Content</label>
            <textarea name="txtContent" class="form-control shadow-none" id="" cols="30" rows="3"></textarea>
            <!-- <input type="text" id="content" name="txtContent " class="form-control shadow-none"> -->
        </div>
        <div class="row-cols-md py-2">
            <label for="thumb" class="text-black">Image</label>
            <input type="file" id="thumb" name="txtThumb " class="form-control shadow-none text-black-50" onchange="loadFile(event)">

        </div>

        <div class="py-2">
            <div class="shadow-sm d-flex position-relative rounded border-0" style="width: 100% ; height:280px;">
                <span style="z-index: 1 ;" class="align-self-center text-black-50 position-absolute top-50 start-50 translate-middle fs-4">Image Review...</span>
                <img class="w-100" class="p-1" id="output" style="z-index: 2;">
            </div>
            <div class="mt-2">
                <input type="submit" value="Save" class="btn btn-primary px-4 pt-2">
            </div>


        </div>
    </form>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            console.log(output.src);
        }
    </script>
</div>

@stop