@extends('User.main.main')
@section('content')
@include('User.pages.account.js')
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .account {
    background-color: rgba(248, 248, 248, 0.288);
    padding-top: 70px;
    padding-bottom: 100px;
  }

  .showButton {
    display: none;

  }
</style>
@php
$path = storage_path() . "/json/city.json";
$city = json_decode(file_get_contents($path), true);
$path = storage_path() . "/json/country.json";
$country = json_decode(file_get_contents($path), true);
$path = storage_path() . "/json/gender.json";
$gender = json_decode(file_get_contents($path), true);
@endphp
<div class="account">
  <div class="row container  m-auto">
    <div class="col-md-6 align-items-center">
      <img class=" w-100 " src="images/account.png" alt="">

    </div>

    <main class="col-md-6">

      <form>
        @foreach ($accinfo as $accinfos)
        @if ($accinfos->id == session('LoggedUserid'))

        <h4 class="text-start g-0">Your detail account information</h4>
        <div class="row pt-3">
          <div class="col-sm-4">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" id="firstName" placeholder=""
              value="{{ $accinfos->first_name }}" required>

          </div>
          <div class="col-sm-8">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" id="lastName" placeholder=""
              value="{{ $accinfos->last_name }}" required>
          </div>
        </div>
        <div class="row pt-3 pb-3">
          <div class="col-md-7">
            <label for="email" class="form-label">Email <span class="text-muted">(Account)</span></label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $accinfos->email }}"
              placeholder="you@example.com">

          </div>
          <div class="col-md-5">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" required>
              @foreach ($gender as $genders)
              @if ($genders['id'] == $accinfos->gender)
              <option value="{{ $genders['id'] }}" selected>{{ $genders['gender'] }}</option>
              @else
              <option value="{{ $genders['id'] }}">{{ $genders['gender'] }}</option>
              @endif
              @endforeach
            </select>

          </div>
        </div>
        <div class="row pb-3">
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone number <span class="text-muted">(Account)</span></label>
            <input type="phone" class="form-control" id="phone" value="{{ $accinfos->phone }}"
              placeholder="Enter you phone number">

          </div>
          <div class="col-md-6">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" value="{{ $accinfos->birthday }}" name="birthday" id="birthday"
              placeholder="Enter you phone number">

          </div>
        </div>
        <div class="row pb-3">
          <div class="col-md-6">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required>
              <option value="">Choose...</option>
              @foreach ( $country as $jsons)
              @if ($jsons['name'] == $accinfos->country)
              <option value="{{ $jsons['name'] }}" selected>{{ $jsons['name'] }}</option>
              @else
              <option value="{{ $jsons['name'] }}">{{ $jsons['name'] }}</option>
              @endif

              @endforeach

            </select>

          </div>
          <div class="col-md-6 ">

            <label for="city" class="form-label">City</label>
            <select class="form-select" id="city" required>
              <option value="">Choose...</option>
              @foreach ( $city as $jsons)
              @if ($jsons['city'] == $accinfos->city)
              <option value="{{ $jsons['city'] }}" selected>{{ $jsons['city'] }}</option>
              @else
              <option value="{{ $jsons['city'] }}">{{ $jsons['city'] }}</option>
              @endif
              @endforeach

            </select>

          </div>
        </div>
        <div class="row pb-3">
          <div class="col-md-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" value="{{ $accinfos->address }}"
              placeholder="1234 Main St" required>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-12">
             <a class="text-primary" id="showAndHide" data-bs-toggle="collapse" href="#changePassWord" role="button"
              aria-expanded="false" aria-controls="changePassWord">
              If do you want to change your password, please click here!
            </a>

            @include('User.pages.account.changepassmodal')</div>
        </div>
        @endif
        @endforeach

       
        <div class="row" id="functionShow">
          <div class="col-md-12 d-flex">
            <div class="me-3">
              <button class=" w-100 btn btn-primary px-4 " type="submit">Edit your account</button>
            </div>
            <div>
              <button class="w-100 btn btn-secondary px-4" type="submit">Exit</button>
            </div>
          </div>
        </div>
      </form>

    </main>
  </div>

</div>

@endsection