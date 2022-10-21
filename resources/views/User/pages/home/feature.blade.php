<style>
  .imgstyle {
    cursor: pointer;
    position: relative;

  }

  .card {
    transition: 0.4s;

    position: relative;

  }

  .cover {
    background-color: #41867c48;
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;

  }

  .card:hover .cover {
    opacity: 1;
    z-index: 1;
    transition: 0.4s ease-in-out;
  }

  .card:hover {
    box-shadow: 0px 0px 4px 2px #e4e4e4;
    transform: translateY(-3px);
    transition: 0.4s;
    cursor: pointer;
  }

  .imgstyle input {
    position: absolute;
    left: 50%;
    bottom: 10%;
    transform: translate(-50%, -10%);
    border: none;
    background-color: #4d9385e8;
    border-radius: 5px;
    color: white;
    padding: 5px 10px;
    transition: 0.4s;
    opacity: 0;
  }

  .imgstyle input:hover {
    background-color: #4d9385;
  }

  .card:hover input {
    opacity: 1;
    z-index: 2;
  }
</style>
<section class="pt-5 pb-5">
  <div class="container shadow-sm p-3 mb-5 bg-body rounded">
    <h3 class="mt-3 text-start">FEATURED PRODUCTS<i class="bi bi-award px-2 text-success"></i></h3>
    <div class="row">
      <div class="text-right pe-4">
        <a class="btn btn-outline-secondary shadow-none mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
          data-slide="prev">
          <i class="bi bi-caret-left-fill"></i>
        </a>
        <a class="btn btn-outline-secondary shadow-none mb-3 " href="#carouselExampleIndicators2" role="button"
          data-slide="next">
          <i class="bi bi-caret-right-fill"></i>
        </a>
      </div>
      <!-- start -->
      <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            {{-- formain --}}
            <div class="carousel-item active">
              <div class="row ">
                {{-- --repeat --}}
                @foreach ($menuchild as $key => $data)
                @if ($data->models == "Feature" && $data->status == "Active" && $key < 4) <div class="col-md-3 mb-3">
                  <div class="card">
                    <div class="cover">

                    </div>
                    <span class="d-none"> {{ $key++ }}</span>
                    <div class="imgstyle">
                      <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                      <input type="button" value="View detail">
                    </div>
                    <div class="card-body text-center">
                      <div>
                        <ul class="list-unstyled">
                          <li>
                            <span class="card-title fs-5" style="color: #505c59;">{{ $data->product_name }}</span>
                          </li>
                          <li>
                            <span><i class="bi bi-dash fs-3" style="color: #4d9385;"></i></span>
                            <span><i class="bi bi-dash fs-3" style="color: #e61cba;"></i></span>
                            <span><i class="bi bi-dash fs-3" style="color: #e48416;"></i></span>
                          </li>
                          <li>
                            <span class="fs-6" style="color: rgb(90, 90, 90)">{{ $data->product_code }}</span>
                          </li>
                          <li>
                            <span class="fw-bolder fs-5" style="color: rgb(240, 109, 21)">${{ $data->price }}</span>
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
          </div>

          <div class="carousel-item">
            <div class="row ">
              @foreach ($menuchild as $key => $data)
              @if ($data->models == "Feature" && $data->status == "Active" && (4 <= $key && $key < 8)) 
              <div class="col-md-3 mb-3">
                <div class="card">
                  <div class="cover">

                  </div>
                  <span class="d-none"> {{ $key++ }}</span>
                  <div class="imgstyle">
                    <img class="img-fluid" alt="100%x280" src="{{ $data->images }}">
                    <input type="button" value="View detail">
                  </div>
                  <div class="card-body text-center">
                    <div>
                      <ul class="list-unstyled">
                        <li>
                          <span class="card-title fs-5" style="color: #505c59;">{{ $data->product_name }}</span>
                        </li>
                        <li>
                          <span><i class="bi bi-dash fs-3" style="color: #4d9385;"></i></span>
                          <span><i class="bi bi-dash fs-3" style="color: #e61cba;"></i></span>
                          <span><i class="bi bi-dash fs-3" style="color: #e48416;"></i></span>
                        </li>
                        <li>
                          <span class="fs-6" style="color: rgb(90, 90, 90)">{{ $data->product_code }}</span>
                        </li>
                        <li>
                          <span class="fw-bolder fs-5" style="color: rgb(240, 109, 21)">${{ $data->price }}</span>
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
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>