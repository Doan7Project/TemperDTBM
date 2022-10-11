@extends('Admin.main.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#search").keyup(function() {
            $value = $(this).val();
            if ($value) {

                $('.alldata').hide();
                $('.searchdata').show();
            } else {
                $('.alldata').show();
                $('.searchdata').hide();
            }


            $.ajax({
                type: 'get',
                url: "{{URL::to('search')}}",
                data: {
                    'search': $value
                },
                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    })
    $(document).ready(function() {
        $('#table').DataTable({
            searching: false,
            "dom": 'rtip',
            "paging": true,
            "ordering": true,
            "info": true
        })

    });
</script>

<style>
    .search {

        width: 400px;
    }
</style>
@if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
<div class="search input-group mb-3 mt-5">
    <lable class="input-group-text" for="search">Search</lable>
    <input type="search" name="search" class="form-control shadow-none" id="search" placeholder="Please search something" aria-label="Username" aria-describedby="search">
</div>
<div class="mt-6  border border-1 rounded">
    <h5 class="bg-primary bg-gradient text-white p-3">Category list information</h5>
    <div class="table-responsive p-3 shadow-sm " style="width: 1000px;">
        <table class="table table-bordered display ui celled " id="table" style="width:100%">
            <thead class="bg-primary bg-opacity-75 text-white">
                <tr VALIGN=Middle Align=Middle>
                    <th VALIGN=Middle Align=Middle>No.</th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 120px;"></div>Product Code
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 200px;"></div>Product Name
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 50px;"></div>Price
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 50px;"></div>Unit
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div style="width: 50px;"></div>Qty
                    </th>
                    <th VALIGN=Middle Align=Middle>Discount</th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 150px;"></div>Promotion Price
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 50px;"></div>Status
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 100px;"></div>Models
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 100px;"></div>Made in
                    </th>
                    <th VALIGN=Middle Align=Middle>Category_id</th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 200px;"></div>Image
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 200px;"></div>Content
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 300px;"></div>Description
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div style="width: 100px;"></div>Edit
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div style="width: 100px;"></div>Delete
                    </th>
                </tr>
            </thead>

            <tbody class="alldata">
                @foreach($items as $key => $data)
                <tr>
                    <td VALIGN=Middle Align=Middle>{{$data->id}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_code}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_name}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->price}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->unit}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->quantity}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->discount}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->promotion_price}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->status}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->models}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->made_in}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->category_id}}</td>
                    <td VALIGN=Middle Align=Left><img src="{{$data->image}}" style="width: 100%;" alt=""></td>
                    <td VALIGN=Middle Align=Left>{{$data->content}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->description}}</td>
                    <td VALIGN=Middle Align=Middle>
                        <a class="btn btn-primary" href="{{url("product/show/{$data->id}")}}">
                            <i class="bi bi-pencil-square text-white pe-2"></i>Edit
                        </a>
                    </td>
                    <td VALIGN=Middle Align=Middle>
                        <a class="btn btn-danger text-white" href="{{url("Admin/pages/delete/{$data->id}")}}" onclick="return confirm('Are you sure to delete {{$data->CategoryName}}')" style="color: orangered;">
                            <i class="bi bi-trash3 pe-2"></i>Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <tbody id="Content" class="searchdata"></tbody>
        </table>
    </div>

</div>

@endsection