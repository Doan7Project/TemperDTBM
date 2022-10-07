@extends('Admin.main.main')
@section('content')
<style>
    .functionIcon {
        width: 180px;
    }

    .functionIcon button {
        border: none;
        background-color: transparent;
    }

    .functionIcon a {
        text-decoration: none;
    }

    .functionIcon a i:hover {
        color: gray;
        transition: 0.4s ease-in-out;
    }

    .functionIcon a i {
        font-size: 15px;
        font-style: normal;
    }
</style>
<div class=" mt-5 table-responsive border border-1 rounded">
    <h4 class="bg-primary bg-gradient text-white p-3 px-3">Category list information</h4>
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    <div class="p-2">
        <table class="table border border-1 rounded">

            <thead>
                <tr>
                    <th class="px-3">No.</th>
                    <th class="px-3" style="width:150px;">Category Name</th>
                    <th class="px-3" style="width:250px;">Description</th>
                    <th class="px-3">Detail</th>
                    <th class="px-3">Function</th>
                </tr>
            </thead>
            @foreach($rs as $key => $data)
            <tbody class="p-2">
                <tr>
                    <td class="px-3" VALIGN=Middle Align=Left>{{$data->id}}</td>
                    <td class="px-3" VALIGN=Middle Align=Left>{{$data->CategoryName}}</td>
                    <td class="px-3" VALIGN=Middle Align=Left>{{$data->Description}}</td>
                    <td class="px-3" VALIGN=Middle Align=Left>{{$data->Detail}}</td>
                    <td class="functionIcon " VALIGN=Middle Align=Left>
                        <button name="edit">
                            <a href="{{url("Admin/pages/Category_update/{$data->id}")}}" style="color: cadetblue;">
                                <i class="bi bi-pencil-square" pe-3"> Update</i>
                            </a>
                        </button>
                        <button class="pe-2" name="delete">
                            <a href="{{url("Admin/pages/delete/{$data->id}")}}" onclick="return confirm('Are you sure to delete {{$data->CategoryName}}')" style="color: orangered;">
                                <i class="bi bi-trash3"> Delete</i>
                            </a>
                        </button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection