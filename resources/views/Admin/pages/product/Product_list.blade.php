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

<div class="d-flex justify-content-between align-items-end">
    <div class="search input-group mb-3 mt-5">
        <lable class="input-group-text" for="search">Search</lable>
        <input type="search" name="search" class="form-control shadow-none" id="search" placeholder="Please search something" aria-label="Username" aria-describedby="search">

    </div>
    <div>
        <a class="btn btn-success mb-3" href="{{url("product/create")}}">
            <i class="bi bi-plus-square text-white" pe-3"></i> Add more
        </a>
    </div>
</div>
<div class="mt-6  border border-1 rounded" style="width: 1000px;">
    <h5 class="bg-primary bg-gradient text-white p-3">Product list information</h5>
    <div class="table-responsive p-3 shadow-sm container" style="width: auto;">
        <table class="table table-bordered display ui celled " id="table">
            <thead class="bg-primary bg-opacity-75 text-white">
                <tr VALIGN=Middle Align=Middle>
                    <th VALIGN=Middle Align=Middle>No.</th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 120px;">Product Code</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 200px;">Product Name</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 50px;">Price</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div class="text-center" style="width: 50px;">Unit</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center" style="width: 50px;">Qty</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>Discount</th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center" style="width: 70px;">Status</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 100px;">Models</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div style="width: 100px;">Made in</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>Category_id</th>
                    <th VALIGN=Middle Align=Left>
                        <div class="text-center" style="width: 100px;">Image</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center" style="width: 100px;">View</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center" style="width: 100px;">Edit</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center" style="width: 100px;">Delete</div>
                    </th>
                </tr>
            </thead>

            <tbody class="alldata">
                @foreach($items as $key => $data)
                <tr>
                    <td VALIGN=Middle Align=Middle>{{$key+1}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_code}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_name}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->price}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->unit}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->quantity}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->discount}}%</td>
                    @if($data->status=="Active"):
                    <td VALIGN=Middle Align=Left>
                        <div class="text-center py-2 text-white rounded bg-success">{{$data->status}}</div>
                    </td>
                    @else
                    <td VALIGN=Middle Align=Left>
                        <div class="text-center py-2 text-white rounded bg-secondary">{{$data->status}}</div>
                    </td>
                    @endif

                    <td VALIGN=Middle Align=Left>{{$data->models}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->made_in}}</td>
                    <td VALIGN=Middle Align=Middle>{{$data->category_id}}</td>
                    <td VALIGN=Middle Align=Left><img src="{{$data->image}}" style="width: 100%;" alt=""></td>
                    <td VALIGN=Middle Align=Middle>
                        <a class="btn btn-success" href="{{url("product/view/{$data->id}")}}">
                            <i class="bi bi-pencil-square text-white pe-2"></i>View
                        </a>
                    </td>
                    <td VALIGN=Middle Align=Middle>
                        <a class="btn btn-primary" href="{{url("product/show/{$data->id}")}}">
                            <i class="bi bi-pencil-square text-white pe-2"></i>Edit
                        </a>
                    </td>
                    <td VALIGN=Middle Align=Middle>
                        <a href="{{url("product/destroy/{$data->id}")}}" class="btn btn-danger text-white" onclick="return confirm('Are you sure to delete {{$data->product_name}}')">
                            <i class="bi bi-trash3 pe-2"></i>Delete
                        </a>

                    </td>
                </tr>

                @endforeach
            </tbody>

            <tbody id="Content" class="searchdata"></tbody>
        </table>
    </div>
    <!-- --modal delete -->
    <!-- Modal -->

</div>

@endsection