@extends('Admin.main.main')
@section('content')
<?php


    $arrdiscount = [
        [
            'id' => '0',
            'discount' => 0
        ],
        [
            'id' => '1',
            'discount' => 5
        ],
        [
            'id' => '2',
            'discount' => 10
        ],
        [
            'id' => '3',
            'discount' => 15
        ],
        [
            'id' => '4',
            'discount' => 20
        ],
        [
            'id' => '5',
            'discount' => 25
        ],
        [
            'id' => '6',
            'discount' => 30
        ],
        [
            'id' => '7',
            'discount' => 35
        ],
        [
            'id' => '8',
            'discount' => 40
        ],
        [
            'id' => '9',
            'discount' => 45
        ],
        [
            'id' => '10',
            'discount' => 50
        ],
        [
            'id' => '11',
            'discount' => 55
        ],
        [
            'id' => '12',
            'discount' => 60
        ],
        [
            'id' => '13',
            'discount' => 65
        ],
        [
            'id' => '14',
            'discount' => 70
        ],
        [
            'id' => '15',
            'discount' => 75
        ],
        [
            'id' => '16',
            'discount' => 80
        ],
        [
            'id' => '17',
            'discount' => 85
        ],
        [
            'id' => '18',
            'discount' => 90
        ],
        [
            'id' => '19',
            'discount' => 95
        ],
        [
            'id' => '20',
            'discount' => 100
        ],

    ];
    $arrstatus = [
        [
    
            'id' => '1',
            'status' => 'Active'
        ],
        [
    
            'id' => '2',
            'status' => 'Unative'
        ]
    
    
        ];

        $arrmodels = [
            [
                'id'=>'1',
                'model'=>'Default'
            ],
            [
                'id'=>'2',
                'model'=>'Trending'
            ],
            [
                'id'=>'3',
                'model'=>'New arrival'
            ],
            [
                'id'=>'4',
                'model'=>'Feature'
            ],
            [
                'id'=>'5',
                'model'=>'Top'
            ]
            ];
            
        $arrmade = [
            [
                'id'=>'1',
                'madein'=>'Viet Nam'
            ],
            [
                'id'=>'2',
                'madein'=>'Thailand'
            ],
            [
                'id'=>'3',
                'madein'=>'Singapore'
            ],
            [
                'id'=>'4',
                'madein'=>'Japan'
            ],
            [
                'id'=>'5',
                'madein'=>'China'
            ]
        ]
?>
<div class="card shadow-sm" style="width:100% ;">
    <h4 class="text-center bg-primary bg-gradient p-3 text-white">Create Product Table</h4>
    <p class="text-center text-black-50">Create the information to product</p>
    
    <form action="" method="post" class="card-body">
    <div class=" text-end">
        <a class="text-decoration-none btn btn-success text-light" href="{{route('list')}}">
        <i class="bi bi-card-list pe-2"></i>List Item
        </a>
    </div>
        @csrf
        <div class="row pt-2">
            <div class="col-md-4">
                <label for="categoryid" class="form-label text-black">Category preferences</label>
                <select class="form-select shadow-none" name="txtCategoryID" id="categoryid">
                    <option value="">Please choose category...</option>
                    @foreach($Menus as $key=> $data)
                    <option value="{{$data->id}}">{{$data->CategoryName}}</option>
                    @endforeach
                </select>
                @error('txtCategoryID')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-3 d-none">
                <label for="productCode" class="form-label text-black">Product Code</label>
                <input disabled type="text" id="productCode" class="form-control shadow-none" name="txtProductCode" placeholder="Enter product code" style="text-transform:uppercase;" value="{{old('txtProductCode')}}">
                @error('txtProductCode')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-8">
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
                <select class="form-select shadow-none" name="txtDiscount" id="discount">
                    @foreach($arrdiscount as $value)
                    <option value="{{$value['discount']}}">{{$value['discount']}}%</option>
                    @endforeach
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
                    @foreach($arrstatus as $value)
                    <option value="{{$value['status']}}">{{$value['status']}}</option>
                    @endforeach
                </select>

            </div>
            <div class="col-md-4">
                <label for="models" class="form-label text-black">Models</label>
                <select class="form-select shadow-none" name="txtModel" id="models">
               
                    @foreach($arrmodels as $value)
                    <option value="{{$value['model']}}">{{$value['model']}}</option>
                    @endforeach
                </select>

            </div>
            <div class="col-md-4">
                <label for="madein" class="form-label text-black">Made In</label>
                <select class="form-select shadow-none" name="txtMadein" id="madein">
                    <option value="">Please choose country...</option>
                    @foreach($arrmade as $value)
                    <option value="{{$value['madein']}}">{{$value['madein']}}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-6">
                <label for="upload" class="form-label text-black">Image</label>
                <input type="file" class="form-control shadow-none" name="txtImage" id="upload" onchange="loadFile(event)">
                <div class="shadow-sm d-flex position-relative rounded border-0 mt-2" style="width: 100% ; height:280px;">
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
                <textarea class="form-control shadow-none" name="txtContent" id="content" cols="30" rows="13"></textarea>

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
@endsection