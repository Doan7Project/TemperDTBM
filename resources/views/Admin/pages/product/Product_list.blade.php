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
<div class="container mt-3 table-responsive">
    <h4 class="pb-4">Category List</h4>
    <table class="table table-striped table-hover shadow-sm rounded" style="width:100% ;">
        <thead class="table-light">
            <tr >
                <th>No.</th>
                <th>Code</th>
                <th style="width:160px ;">Category Name</th>
                <th>Content</th>
                <th>Image</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td VALIGN=Middle Align=Left>1</td>
                <td VALIGN=Middle Align=Left>H001</td>
                <td VALIGN=Middle Align=Left>Sofa</td>
                <td VALIGN=Middle Align=Left>Lorem ipsum dolor sit amet consectetur Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit molestias rem quia cupiditate nesciunt perspiciatis inventore eaque alias assumenda excepturi. Atque omnis, placeat quo in suscipit voluptatibus consequuntur est voluptates. </td>
                <td VALIGN=Middle Align=Left>@../image/pic 1</td>
                <td class="functionIcon pe-3" VALIGN=Middle Align=Left>
                    <button name="edit">
                        <a href="{{url('Admin/pages/Product_update')}}" style="color: cadetblue;">
                            <i class="bi bi-pencil-fill pe-3"> Update</i>
                        </a>
                    </button>
                    <button name="delete">
                        <a href="" onclick="return confirm('Are you sure to delet')" style="color: orangered;">
                            <i class="bi bi-trash3"> Delete</i>
                        </a>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@stop