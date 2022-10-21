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
        color: rgba(49, 145, 235, 0.952);


    }

    .icons ul li i:hover {
        font-weight: bolder;
        color: rgb(19, 173, 211);
        transition: 0.4s ease-in-out;
    }

    .cardStyle {
        background-color: rgba(233, 233, 233, 0.267);
    }
</style>
<section id="carouselExampleCaptions" class="carousel slide pb-3" data-bs-ride="false">
    <div class="container  mb-5 bg-body rounded pt-5 pb-5">
        <h3 class="mb-3 text-center"><i class="bi bi-award pe-2 text-success"></i>Leatest Products</h3>
        <hr>
        <div class="carousel-indicators">
            <button id="no1" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">New Arrival</button>
            <button id="no2" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">Best
                Seller</button>
            <button id="no3" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3">Featured</button>
            <button id="no4" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4">Specail
                Offer</button>
        </div>
        <div class="pt-5">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="row m-auto justify-content-center">
                        @for($i = 0;$i <6; $i++) <div class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                            <img class="img-fluid" alt="100%x280" src="images/armchair2.webp">
                            <div class="icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="bi bi-eye "></i>
                                    </li>
                                    <li>
                                        <i class="bi bi-cart2"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-2">
                                <ul class="d-flex justify-content-between list-unstyled">
                                    <li>
                                        <span>Product name</span>
                                    </li>
                                    <li>
                                        <span class="fw-bolder" style="color: rgb(236, 157, 157)">$ 20.00</span>
                                    </li>
                                </ul>
                            </div>
                    </div>

                    @endfor


                </div>

            </div>
            {{-- best seller --}}
            <div class="carousel-item  ">
                <div class="row m-auto justify-content-center">
                    @for($i = 0;$i <6; $i++) <div class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                        <img class="img-fluid" alt="100%x280" src="images/armchair.webp">
                        <div class="icons">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-eye "></i>
                                </li>
                                <li>
                                    <i class="bi bi-cart2"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-2">
                            <ul class="d-flex justify-content-between list-unstyled">
                                <li>
                                    <span>Product name</span>
                                </li>
                                <li>
                                    <span class="fw-bolder" style="color: rgb(236, 157, 157)">$ 20.00</span>
                                </li>
                            </ul>
                        </div>
                </div>

                @endfor


            </div>

        </div>
        {{-- end best seller --}}
        {{-- Featured --}}
        <div class="carousel-item  ">
            <div class="row m-auto justify-content-center">
                @for($i = 0;$i <6; $i++) <div class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                    <img class="img-fluid" alt="100%x280" src="images/armchair3.webp">
                    <div class="icons">
                        <ul class="list-unstyled">
                            <li>
                                <i class="bi bi-eye "></i>
                            </li>
                            <li>
                                <i class="bi bi-cart2"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-2">
                        <ul class="d-flex justify-content-between list-unstyled">
                            <li>
                                <span>Product name</span>
                            </li>
                            <li>
                                <span class="fw-bolder" style="color: rgb(236, 157, 157)">$ 20.00</span>
                            </li>
                        </ul>
                    </div>
            </div>

            @endfor


        </div>

    </div>
    {{-- end featured --}}
    {{-- specail offer --}}
    <div class="carousel-item  ">
        <div class="row m-auto justify-content-center">
            @for($i = 0;$i <6; $i++) <div class="cardStyle col-md-3 m-2 pt-2 px-2 card border-0">
                <img class="img-fluid" alt="100%x280" src="images/armchair4.webp">
                <div class="icons">
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-eye "></i>
                        </li>
                        <li>
                            <i class="bi bi-cart2"></i>
                        </li>
                    </ul>
                </div>
                <div class="pt-2">
                    <ul class="d-flex justify-content-between list-unstyled">
                        <li>
                            <span>Product name</span>
                        </li>
                        <li>
                            <span class="fw-bolder" style="color: rgb(236, 157, 157)">$ 20.00</span>
                        </li>
                    </ul>
                </div>
        </div>

        @endfor


    </div>

    </div>
    {{-- end specail offer --}}
    </div>

    </div>

    </div>
    <hr>
    </div>
</section>