@extends('Admin.main.main')
@section('content')

<div class="card shadow-sm" style="width: 800px ;">
    <h4 class="text-center pt-5 text-black-50">Product Create</h4>
    <p class="text-center text-black-50">Create the information to product</p>
    <form action="" method="POST" class="card-body">
    @csrf
        <div class="row pt-2">
            <div class="col-md-5">
                <label for="categoryname" class="form-label text-black">Category Name</label>
                <select class="form-control shadow-none" name="txtCategoryName" id="categoryname">
                    <option value="">Please choose category...</option>
                   @foreach($Menus as $key=> $data)
                    <option value="{{$data->id}}">{{$data->CategoryName}}</option>
                    @endforeach
                </select>
                @error('txtCategoryName')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
    
            <div class="col-md-7">
                <label for="productCode" class="form-label text-black">Product Code</label>
                <input type="text" id="productCode" class="form-control shadow-none" name="txtProductCode" placeholder="Enter product code [XX-000]">
                @error('txtProductCode')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-3">
                <label for="price" class="form-label text-black">Price</label>
                <input type="number" id="price" class="form-control shadow-none" name="txtPrice">
                @error('txtPrice')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="col-md-2">
                <label for="unit" class="form-label text-black">Unit</label>
                <input type="text" id="unit" class="form-control shadow-none" name="txtUnit">
                @error('txtUnit')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="col-md-2">
                <label for="quantity" class="form-label text-black">Quantity</label>
                <input type="number" id="quantity" class="form-control shadow-none" name="txtQuantity">
                @error('txtQuantity')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="col-md-2">
                <label for="discount" class="form-label text-black">Discount</label>
                <input type="number" id="discount" class="form-control shadow-none" name="txtDiscount">
            </div>
            <div class="col-md-3">
                <label for="promotionPrice" class="form-label text-black">Promotion Price</label>
                <input type="number" id="promotionPrice" class="form-control shadow-none" name="txtPromotionPrice">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-4">
                <label for="status" class="form-label text-black">Status</label>
                <select class="form-control shadow-none" name="txtStatus" id="status">
                    <option value="1">Please choose Status...</option>
                    <option>Active</option>
                    <option>Unactive</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="models" class="form-label text-black">Models</label>
                <select class="form-control shadow-none" name="txtModels" id="models">
                    <option value="">Please choose Models...</option>
                    <option>Trending</option>
                    <option>New Arrival</option>
                    <option>Features</option>
                    <option>Top</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="madein" class="form-label text-black">Made In</label>
                <select class="form-control shadow-none" name="txtMadein" id="madein">
                    <option value="1">Please choose country...</option>
                    <option>VietName</option>
                    <option>Japan</option>
                    <option>Thailand</option>
                    <option>China</option>
                </select>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <label for="image" class="form-label text-black">Image</label>
                <input type="file" class="form-control shadow-none" name="txtImage" id="image" cols="30" rows="3" onchange="loadFile(event)">
                <div class="shadow-sm d-flex position-relative rounded border-0 mt-2" style="width: 100% ; height:185px;">
                    <span style="z-index: 1 ;" class="align-self-center text-black-50 position-absolute top-50 start-50 translate-middle fs-4">Image Review...</span>
                    <img class="w-100" class="p-1" id="output" style="z-index: 2;">
                </div>
            </div>
            <div class="col-md-6">
                <label for="content" class="form-label text-black">Content</label>
                <textarea class="form-control shadow-none" name="txtContent" id="content" cols="30" rows="9"></textarea>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-12">
                <label for="content" class="form-label text-black">Description</label>
                <textarea class="form-control shadow-none" name="txtContent" id="content" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div class="row p-2 pt-3">

            <input type="submit" class="btn btn-primary p-2" name="" id="" value="Create">

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
@endsection