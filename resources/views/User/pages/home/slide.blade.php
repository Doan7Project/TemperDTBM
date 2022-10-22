<style>
    .contentBtn {
        position: relative;
    }

    .btns {
        position: absolute;
        top: 50%;
        left: 30%;
        transform: translate(-30%, -50%);
        background-color: rgba(100, 108, 110, 0.404);
        cursor: pointer;
    }

    .btns div {
        width: 600px;

    }

    .btns div h1 {
        color: rgb(255, 255, 255);
        font-weight: bolder;
    }

    .btns:hover h1 {
        text-shadow: 2px 2px rgb(92, 139, 170);
        transition: 0.4s ease-in-out;
    }

    .btns input {
        background-color: rgba(15, 155, 190, 0.596);
        padding: 8px 20px;
        border: none;
        border-radius: 5px;
        color: white
    }

    .btns input:hover {
        background-color: rgba(14, 135, 172, 0.856);
        box-shadow: 1px 1px 10px 2px rgba(16, 83, 104, 0.24);
        transition: 0.4s ease-in-out;
    }
</style>
<div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $count = 1?>
        @foreach ($slide as $key=> $data)
        <?php 
        if($count == 1):
        $var = "active";
    else:
    $var = "";
    endif;
      ?>
        <div class="carousel-item {{ $var }}" data-bs-interval="10000">
            <img src=" {{asset('/assets/images/slideshow/'.$data ->image)}}" class="d-block w-100" alt="...">
            <div class="btns shadow-lg p-5 pb-5 rounded">
                <div>
                    <h1 class="">{{ $data->name }}</h3>
                        <p class="text-white">{{ $data->description }}</p>
                </div>

                <input type="button" value="Shop Now">
            </div>
            <?php $count++?>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>