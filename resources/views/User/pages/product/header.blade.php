<style>
    .boxCategory .bate {
        padding: 10px 20px;
        margin: 4px;
        text-decoration: none;
        color: white;
    }

    .boxCategory .bate:hover {
        color: rgb(218, 218, 218);
        transition: 0.4s ease-in-out;
    }

    .active {
        color: rgb(255, 255, 255);
        background-color: rgb(21, 156, 197);

    }
    .Category-body{
   
        padding: 20px;
        background-color: rgb(60, 135, 158);
    }
</style>
<div class="row Category-body container m-auto rounded">

    <div class="col-lg-12 d-flex">

        @foreach ( $category as $categorys )
        <div class="boxCategory">
            @if (Session::get('link') == $categorys->id)
            <a class="active bate text-decoration-none rounded" id="active" href="{{ url("link/{$categorys->id}")
                }}">{{
                $categorys->CategoryName }}</a>
            @else
            <a class="bate text-decoration-none rounded" id="active" href="{{ url("link/{$categorys->id}") }}">{{
                $categorys->CategoryName }}</a>
            @endif
        </div>
        @endforeach

    </div>

</div>