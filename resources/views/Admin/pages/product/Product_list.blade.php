@extends('Admin.main.main')
@section('content')
<style>
    .functionIcon {
        width: 220px;
        display: flex;
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
<div class=" mt-5 border border-1 rounded">
    <h4 class="bg-primary bg-gradient text-white p-4">Category list information</h4>
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table border border-1 rounded">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Discount</th>
                    <th>Promotion Price</th>
                    <th>Status</th>
                    <th>Models</th>
                    <th>Made in</th>
                    <th>Category_id</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Function</th>
                </tr>
            </thead>
            @foreach($items as $key => $data)
            <tbody>
                <tr>
                    <td VALIGN=Middle Align=Left>{{$data->id}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_code}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_name}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->price}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->unit}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->quantity}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->discount}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->promotion_price}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->status}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->models}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->made_in}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->category_id}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->image}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->content}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->description}}</td>
                    <td class="functionIcon" VALIGN=Middle Align=Left>

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

@endsection