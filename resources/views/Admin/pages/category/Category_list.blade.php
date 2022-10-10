@extends('Admin.main.main')
@section('content')
<style>
    .functionIcon {
        width: 180px;
    }

    .functionIcon button {
        /* border: none; */
        padding: 5px;
        border-radius: 5px;
        /* color: white; */
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
<div class=" mt-5 table-responsive border border-1 rounded container">
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

                        <a class="btn btn-primary" href="{{url("Admin/pages/Category_update/{$data->id}")}}">
                            <i class="bi bi-pencil-square text-white" pe-3"> Edit</i>
                        </a>


                        <a class="btn btn-danger" href="{{url("Admin/pages/delete/{$data->id}")}}" onclick="return confirm('Are you sure to delete {{$data->CategoryName}}')" style="color: orangered;">
                            <i class="bi bi-trash3 text-white"> Delete</i>
                        </a>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

@stop