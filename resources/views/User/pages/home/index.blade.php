@extends('User.main.main')
@section('content')
<style>
    .line{
        margin: 40px 0 40px 0;
        width: 100%;
        height: 50px;
        background-color: rgba(241, 241, 241, 0.822);
    }
</style>
<div class="index">
    <div>
        @include('User.pages.home.slide')
    </div>
    <div>
        @include('User.pages.home.feature')
    </div>
    <div>
        @include('User.pages.home.popular')
    </div>
    <div class="line bg-gradient"></div>
    <div>
        @include('User.pages.home.latest')
    </div>
</div>
@endsection