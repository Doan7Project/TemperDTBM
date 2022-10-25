@extends('User.main.main')
@section('content')

<!-- feature -->
<div class="text-center pt-5">
</div>
<div class="row">
    @foreach ($product as $key => $products)
    @if ($products->status == "Active") <div class="col-md-2 mb-3">
        <div class="card shadow-none">
             
            <div class="cover">

            </div>
            <div class="imgstyle">
                <img class="img-fluid" alt="100%x280" src="{{ $products->images }}">

                <a href="{{url("/orderdetail/{$products->id}")}}" class="btn btn-success shadow-none">Shopping now

                </a>
            </div>
            <div class="card-body text-center">
                <div>
                    <ul class="list-unstyled">
                        <li>
                            <h5>{{ $products->product_name }}</h5>
                        </li>

                        @foreach ($category as $categorys)
                        @if ($products->category_id == $categorys->id)
                        <li><small class="text-muted">{{ $categorys->CategoryName }}</small></li>
                        @endif
                        @endforeach
                        <li>
                            <h6 class="fw-bolder fs-5" style="color: rgb(61, 61, 61)"><span
                                    class="fw-bolder-none fs-6">$</span>{{ $products->price }}<span
                                    class="fw-bolder-none fs-6">.00</span> </h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    @endif
  
    @endforeach
    {{-- end repeat --}}

</div>
@endsection