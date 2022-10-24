<style>
    .btnStyle input {
        background-color: transparent;
        transition: 0.4s;
        color: rgb(107, 107, 107);
        font-weight: bolder;
    }

    .btnStyle input:hover {
        color: coral;

    }

    .btnStyle input:focus {
        color: coral;

    }

    .carousel-item {
        /* display: flex; */
    }

    .carousel-indicators {
        position: relative;
        top: 0px;
        z-index: 0;
    }


    .carousel-indicators [data-bs-target] {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: auto;
        height: 0px;
        padding: 5px 10px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: 0px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border: 0;
        border-top: 0;
        border-bottom: 0;
        font-weight: bolder;
        color: rgb(97, 93, 93);
        opacity: .9;
        transition: opacity .6s ease;


    }

    .carousel-indicators [data-bs-target]:hover {
        color: rgb(16, 152, 214);
        transition: 0.4s ease-in-out;
    }

    .carousel-indicators [data-bs-target]:focus {
        color: rgb(16, 152, 214);
    }

    .carousel-indicators .active {
        color: rgb(16, 152, 214);
    }

    .icons {
        position: absolute;
        left: 8%;
        top: 10%;
        font-size: 20px;
        color: rgba(22, 162, 204, 0.952);
    }

 
    .cardStyle {
        background-color: rgba(233, 233, 233, 0.267);
    }

</style>

<section id="carouselExampleCaptions" class="carousel slide pb-3" data-bs-ride="false">
    <div class=" mb-5 bg-body rounded pt-5 pb-5">
        <p class="mb-3 text-center fs-2"><i class="bi bi-award pe-2 text-success"></i>Leatest Products</p>
        <hr>
        <div class="carousel-indicators">
            <button id="no1" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">New Arrival</button>
            <button id="no2" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2">Trending</button>
            <button id="no3" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3">Featured</button>
            <button id="no4" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4">Top</button>
        </div>
        <div class="container pt-4">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="row m-auto justify-content-center">
                        @foreach ($menuchild as $key => $data)
                        @if ($data->models == "New arrival" && $data->status == "Active")
                        <div class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                            <div class="cover">

                            </div>
                            <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                            <div class="icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url("/orderdetail/{$data->id}")}}"><i class="bi bi-eye "></i></a>
                                    </li>
                                    <li>
                                        <i class="bi bi-cart2"></i>
                                    </li>
                                </ul>

                            </div>
                            <div class="pt-2">
                                <ul class="d-flex justify-content-between list-unstyled">
                                    <li>
                                        <span>{{ $data->product_name }}</span>
                                    </li>
                                    <li>
                                        <span class="fw-bolder" style="color: rgb(236, 157, 157)">${{ $data->price
                                            }}.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        
                    </div>

                </div>
                {{-- best seller --}}
                <div class="carousel-item  ">
                    <div class="row m-auto justify-content-center">
                        @foreach ($menuchild as $key => $data)
                        @if ($data->models == "Trending" && $data->status == "Active") <div
                            class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                            <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                            <div class="icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url("/orderdetail/{$data->id}")}}"><i class="bi bi-eye "></i></a>
                                    </li>
                                    <li>
                                        <i class="bi bi-cart2"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-2">
                                <ul class="d-flex justify-content-between list-unstyled">
                                    <li>
                                        <span>{{ $data->product_name }}</span>
                                    </li>
                                    <li>
                                        <span class="fw-bolder" style="color: rgb(236, 157, 157)">${{ $data->price
                                            }}.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach


                    </div>

                </div>
                {{-- end best seller --}}
                {{-- Featured --}}
                <div class="carousel-item  ">
                    <div class="row m-auto justify-content-center">
                        @foreach ($menuchild as $key => $data)
                        @if ($data->models == "Featured" && $data->status == "Active") <div
                            class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                            <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                            <div class="icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url("/orderdetail/{$data->id}")}}"><i class="bi bi-eye "></i></a>
                                    </li>
                                    <li>
                                        <i class="bi bi-cart2"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-2">
                                <ul class="d-flex justify-content-between list-unstyled">
                                    <li>
                                        <span>{{ $data->product_name }}</span>
                                    </li>
                                    <li>
                                        <span class="fw-bolder" style="color: rgb(236, 157, 157)">${{ $data->price
                                            }}.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach


                    </div>

                </div>
                {{-- end featured --}}
                {{-- specail offer --}}
                <div class="carousel-item  ">
                    <div class="row m-auto justify-content-center">
                        @foreach ($menuchild as $key => $data)
                        @if ($data->models == "Top" && $data->status == "Active") <div
                            class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                            <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                            <div class="icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url("/orderdetail/{$data->id}")}}"><i class="bi bi-eye "></i></a>
                                    </li>
                                    <li>
                                        <i class="bi bi-cart2"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-2">
                                <ul class="d-flex justify-content-between list-unstyled">
                                    <li>
                                        <span>{{ $data->product_name }}</span>
                                    </li>
                                    <li>
                                        <span class="fw-bolder" style="color: rgb(236, 157, 157)">${{ $data->price
                                            }}.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach


                    </div>

                </div>
                {{-- end specail offer --}}
            </div>

        </div>

    </div>
    <hr>
    </div>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                    href="/docs/5.2/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
</section>
