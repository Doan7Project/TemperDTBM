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
        $('#table').DataTable({

            // searching: search,
            // "dom": 'rtip',
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

<div class="d-flex justify-content-between align-items-end mt-5">
    <div>
        <a class="btn btn-success mb-3" href="{{url("image/create")}}">
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
                        <div style="width: 120px;">Product ID</div>
                    </th>
                    <th VALIGN=Middle Align=Left>
                        <div class="text-center">Image</div>
                    </th>

                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center">View</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center ">Edit</div>
                    </th>
                    <th VALIGN=Middle Align=Middle>
                        <div class="text-center ">Delete</div>
                    </th>
                </tr>
            </thead>

            <tbody class="alldata">
                @foreach($items as $key => $data)
                <tr>
                    <td VALIGN=Middle Align=Middle>{{$key+1}}</td>
                    <td VALIGN=Middle Align=Left>{{$data->product_id}}</td>
                    <td VALIGN=Middle Align=Left>
                        <div class="m-auto" style="width:150px ;">
                            <img src="{{$data->image}}" style="width: 100%;" alt="">
                        </div>
                    </td>
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