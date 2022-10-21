<style>
    .contentBtn {
        position: relative;
    }

    .btns {
        position: absolute;
        top: 40%;
        left: 30%;
    }
    .btns div{
        width: 500px;
    }
    .btns div h2{
       color: rgb(192, 13, 153);
    }
    .btns input{
        background-color:rgba(15, 155, 190, 0.596);
        padding: 8px 20px;
        border: none;
        border-radius: 5px;
        color: white
    }
    .btns input:hover{
        background-color:rgba(14, 135, 172, 0.856);
        box-shadow: 1px 1px 10px 2px rgba(16, 83, 104, 0.24);
        transition: 0.4s ease-in-out;
    }
</style>

<div id="carouselExampleFade" class="carousel carousel-dark carousel-fade" data-bs-ride="carousel">
    {{-- <div class="carousel-indicators">
        <input style="width: 10px ; height: 10px;" type="radio" name="radio" data-bs-target="#carouselExampleFade"
            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
        <input style="width: 10px ; height: 10px;" type="radio" name="radio" data-bs-target="#carouselExampleFade"
            data-bs-slide-to="1" aria-label="Slide 2">
        <input style="width: 10px ; height: 10px;" type="radio" name="radio" data-bs-target="#carouselExampleFade"
            data-bs-slide-to="2" aria-label="Slide 3">
        <!-- <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    </div> --}}
    <div class="carousel-inner">
        @foreach ($slide as $key=> $data)
        <div class=" carousel-item active contentBtn">
            <img src=" {{asset('/assets/images/slideshow/'.$data ->image)}}" class="d-block w-100" alt="...">
            <div class="btns">
                <div>
                    <h2>{{ $data->name }}</h3>
                    <p class="text-white">{{ $data->description }}</p>
                </div>
                
                <input  type="button" value="Shop Now">
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>