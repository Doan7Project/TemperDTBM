@extends('User.main.main')
@section('content')
<style>
    .index{
        background-color: rgba(241, 241, 241, 0.822);
    }
</style>
<div class="index">
    <div >
        @include('User.pages.home.slide')
    </div>
    <!-- feature -->
    <div>
        @include('User.pages.home.feature')
    </div>
    <div class="index">
        @include('User.pages.home.leastest')
    </div>
</div>
@endsection