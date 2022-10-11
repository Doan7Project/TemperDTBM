@extends('Admin.main.main')
@section('content')
<div class="card shadow-sm" style="width:100% ;">
    <h4 class="text-center bg-primary bg-gradient p-3 text-white">Create Product Table</h4>
    <p class="text-center text-black-50">Create the information to product</p>
    <form action="" method="post" class="card-body">
        @csrf
        <div class="row pt-2">
            <!-- --------------------------------- -->
            <div class="col-md-4">

                <label for="categoryid" class="form-label text-black">Category preferences</label>
                <select class="form-select shadow-none" name="txtCategoryID" id="categoryid">
                    @foreach ($Menus as $key => $data)
                    @if($data->id== $menu->category_id)
                    <option value="{{$data->id}}" selected>{{$data->CategoryName}}</option>
                    @else
                    <option value="{{$data->id}}">{{$data->CategoryName}}</option>
                    @endif
                    @endforeach
                </select>
                @error('txtCategoryID')
                <span class="text-danger">{{$message}}</span>
                @enderror



            </div>

            <div class="col-md-3">
                <label for="productCode" class="form-label text-black">Product Code</label>
                <input type="text" id="productCode" class="form-control shadow-none" name="txtProductCode" placeholder="Enter product code" style="text-transform:uppercase;" value="{{old('txtProductCode')}}">
                @error('txtProductCode')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="productname" class="form-label text-black">Product Name</label>
                <input type="text" id="productname" class="form-control shadow-none" name="txtProductName" placeholder="Enter product name">
                @error('txtProductName')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-3">
                <label for="price" class="form-label text-black">Price</label>
                <input type="number" id="price" class="form-control shadow-none" name="txtPrice">

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

            </div>
            <div class="col-md-2">
                <label for="discount" class="form-label text-black">Discount</label>
                <!-- <input type="number" id="discount" class="form-control shadow-none" name="txtDiscount"> -->
                <select class="form-select shadow-none" name="txtDiscount" id="discount">
                    @for($i=0;$i<= 20;$i++) <option value="{{$i*5}}">{{$i*5}}%</option>
                        @endfor
                </select>
            </div>
            <div class="col-md-3">
                <label for="promotionPrice" class="form-label text-black">Promotion Price</label>
                <input type="number" id="promotionPrice" class="form-control shadow-none" name="txtPromotionPrice">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-4">
                <label for="status" class="form-label text-black">Status</label>
                <select class="form-select shadow-none" name="txtStatus" id="status">
                    <option value="">Please choose Status...</option>
                    <option>Active</option>
                    <option>Unactive</option>
                </select>

            </div>
            <div class="col-md-4">
                <label for="models" class="form-label text-black">Models</label>
                <select class="form-select shadow-none" name="txtModel" id="models">
                    <option value="Default">Default</option>
                    <option>Trending</option>
                    <option>New Arrival</option>
                    <option>Features</option>
                    <option>Top</option>
                </select>

            </div>
            <div class="col-md-4">
                <label for="madein" class="form-label text-black">Made In</label>
                <select class="form-select shadow-none" name="txtMadein" id="madein">
                    <option value="">Please choose country...</option>
                    <option>VietName</option>
                    <option>Japan</option>
                    <option>Thailand</option>
                    <option>China</option>
                </select>

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <label for="upload" class="form-label text-black">Image</label>
                <input type="file" class="form-control shadow-none" name="txtImage" id="upload" cols="30" rows="3" onchange="loadFile(event)">
                <div class="shadow-sm d-flex position-relative rounded border-0 mt-2" style="width: 100% ; height:185px;">
                    <span style="z-index: 1 ;" class="align-self-center text-black-50 position-absolute top-50 start-50 translate-middle fs-4">Image Review...</span>
                    <img class="w-100" class="p-1" id="output" style="z-index: 2;">
                </div>
                <input type="hidden" name="txtImage" id="file">
                @error('txtImage')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="content" class="form-label text-black">Content</label>
                <textarea class="form-control shadow-none" name="txtContent" id="content" cols="30" rows="9"></textarea>

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-12">
                <label for="content" class="form-label text-black">Description</label>
                <textarea class="form-control shadow-none" name="txtDescription" id="editor1" cols="30" rows="3"></textarea>
            </div>
        </div>
        <div class="pt-3 d-flex">
            <div class="">
                <input type="submit" class="btn btn-primary p-2" name="" id="" value="Create Product">
            </div>
            <div class="mx-2">
                <a href="{{route('index')}}" style="width:100px ;" type="submit" class="btn btn-secondary p-2">Close</a>
            </div>


        </div>

    </form>


</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    });
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
    $(document).ready(function() {
        $('#upload').change(function() {
            let form = new FormData();
            form.append('file', $(this)[0].files[0]);
            $.ajax({
                processData: false,
                contentType: false,
                dataType: 'JSON',
                type: 'POST',
                data: form,
                url: '/upload-images',
                success: function(results) {
                    if (results.error == false) {
                        $('#file').val(results.url);

                    } else {
                        alert('Upload error');
                    }


                }
            });
        });
    })
</script>
@stop