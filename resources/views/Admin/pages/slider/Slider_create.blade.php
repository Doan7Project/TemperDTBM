@extends('Admin.main.main')
@section('content')
<?php
$arrstatus = [
    [
    
    'id' => '1',
    'status' => 'Active'
    ],
    [
    
    'id' => '2',
    'status' => 'Unative'
    ]
    
    
    ];?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card " style="width:300px">
                <div class=" card-header">
                    <h4>slider Create</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('Admin/pages/Slider_create_process') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">---Select Status---</option>
                                @foreach($arrstatus as $value)

                                <option value="{{$value['status']}}">{{$value['status']}}</option>
                                <!-- <option value="0">Inactive</option> -->
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" required class="course form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@stop