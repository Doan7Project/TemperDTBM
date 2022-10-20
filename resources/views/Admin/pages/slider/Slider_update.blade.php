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
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit slideshow

                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url("Admin/pages/Slider_update_process/$slide->id") }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$slide->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Status </label>
                            <!-- <input type="text" name="status" value="{{$slide->status}}" class="form-control"> -->
                            <select name="status" id="status" class="form-control" required>
                                @foreach($arrstatus as $value)
                                @if($slide->status==$value['status'])
                                <option value="{{$value['status']}}" selected>{{$value['status']}}</option>
                                @else
                                <option value="{{$value['status']}}">{{$value['status']}}</option>
                                @endif
                                <!-- <option value="1">Active</option>
                                <option value="0">Inactive</option> -->
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$slide->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" value="{{$slide->image}}" class="form-control">

                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" name="send" value="Update" class="btn btn-dark btn-block">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection