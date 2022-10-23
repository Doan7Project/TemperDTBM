<style>
    .btnMstyle {
        background-color: transparent;
        border: none;
        color: rgb(108, 111, 112);
        font-weight: bold;
    }

    .btnMstyle:hover {
        color: rgb(20, 125, 160);
    }

    .btnMstyle:focus {
        color: rgb(20, 125, 160);
    }

    .boximge {
        overflow: hidden;
    }

    .card {

        cursor: pointer;
        position: relative;

    }

    .cover {
        background-color: #158fb41e;
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;

    }

    .card:hover~.cover {
        opacity: 0.3;
        z-index: 1;
        transition: 0.4s;
    }

    .card:hover {
        transition: 0.4s;


    }
</style>
<div class="text-center p-5">
    <h1 class="fw-light">LATEST PRODUCTS</h1>
    <p class="lead fs-6 text-muted text-center">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quibusdam quidem dolor ea
        quisquam fugit qui ratione. Ut eius sed perspiciatis labore eaque. Rerum sint quidem officiis sit
        soluta dolore?
    </p>

</div>
<div id="carouselExampleDark" class="container carousel carousel-dark slide pb-5" data-bs-ride="carousel">
    <div class="text-center carouselManual mb-5">
        <input id="btn1" type="button" value="New Arrival" class="btnMstyle " data-bs-target="#carouselExampleDark"
            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
        <input id="btn2" type="button" value="Trending" class="btnMstyle " data-bs-target="#carouselExampleDark"
            data-bs-slide-to="1" aria-label="Slide 2">
        <input id="btn3" type="button" value="Featured" class="btnMstyle " data-bs-target="#carouselExampleDark"
            data-bs-slide-to="2" aria-label="Slide 3">
        <input id="btn3" type="button" value="Best Seller" class="btnMstyle" data-bs-target="#carouselExampleDark"
            data-bs-slide-to="3" aria-label="Slide 4 ">
    </div>
    <div class="carousel-inner">
        <div id="slide1" class="carousel-item active" data-bs-interval="10000">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($menuchild as $key => $data)
                @if ($data->models == "New arrival" && $data->status == "Active")
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                        <div class="cover">

                        </div>
                        <div class="boximge">
                            <img class="img-fluid" src="{{ $data->images }}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>{{ $data->product_name }}</h5>
                            @foreach ($menu as $dataCt)
                            @if ($data->category_id == $dataCt->id)
                            <small class="text-muted">{{ $dataCt->CategoryName }}</small>
                            @endif
                            @endforeach
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div class="btn-group">
                                    <a href="{{url("/orderdetail/{$data->id}")}}" class="btn btn-sm btn-outline-secondary">Shopping Now</a>
                                </div>
                                <small class="">${{ $data->price }}.00</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div id="slide2" class="carousel-item" data-bs-interval="2000">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($menuchild as $key => $data)
                @if ($data->models == "Trending" && $data->status == "Active")
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                        <div class="cover">

                        </div>
                        <div class="boximge">
                            <img class="img-fluid" src="{{ $data->images }}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>{{ $data->product_name }}</h5>
                            @foreach ($menu as $dataCt)
                            @if ($data->category_id == $dataCt->id)
                            <small class="text-muted">{{ $dataCt->CategoryName }}</small>
                            @endif
                            @endforeach
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div class="btn-group">
                                    <a href="{{url("/orderdetail/{$data->id}")}}" class="btn btn-sm btn-outline-secondary">Shopping Now</a>
                                </div>
                                <small class="">${{ $data->price }}.00</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div id="slide3" class="carousel-item">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($menuchild as $key => $data)
                @if ($data->models == "Featured" && $data->status == "Active")
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                        <div class="cover">

                        </div>
                        <div class="boximge">
                            <img class="img-fluid" src="{{ $data->images }}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>{{ $data->product_name }}</h5>
                            @foreach ($menu as $dataCt)
                            @if ($data->category_id == $dataCt->id)
                            <small class="text-muted">{{ $dataCt->CategoryName }}</small>
                            @endif
                            @endforeach
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div class="btn-group">
                                    <a href="{{url("/orderdetail/{$data->id}")}}" class="btn btn-sm btn-outline-secondary">Shopping Now</a>
                                </div>
                                <small class="">${{ $data->price }}.00</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div id="slide3" class="carousel-item">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($menuchild as $key => $data)
                @if ($data->models == "Top" && $data->status == "Active")
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                        <div class="cover">

                        </div>
                        <div class="boximge">
                            <img class="img-fluid" src="{{ $data->images }}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>{{ $data->product_name }}</h5>
                            @foreach ($menu as $dataCt)
                            @if ($data->category_id == $dataCt->id)
                            <small class="text-muted">{{ $dataCt->CategoryName }}</small>
                            @endif
                            @endforeach
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div class="btn-group">
                                    <a href="{{url("/orderdetail/{$data->id}")}}" class="btn btn-sm btn-outline-secondary">Shopping Now</a>
                                </div>
                                <small class="">${{ $data->price }}.00</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
        </div>
    </div>
</div>
{{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button> --}}
</div>