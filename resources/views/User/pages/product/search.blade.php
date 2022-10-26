<style>
    .filter {
        background: rgba(125, 221, 35, 0.795);

        border: none;

    }

    .box {
        width: 130px;
        margin-left: 3px;
        padding: 10px;
        background-color: white;
    }
    .box input{
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        padding-left: 10px;
    }
    .boxsearch {
        width:auto;
        margin-left: 3px;
        background-color: white;
    }

    .boxsearch input {
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        padding-left: 20px;
    }
    .boxCategory{
        width: auto;
        margin-left: 3px;
        padding: 10px;
        background-color: white;
    }
    #sort>div>a:hover {
        color: rgb(82, 82, 82);
        transition: 0.4s ease-in-out;
    }
</style>

<div class="py-4">
    <button class="btn btn-outline-secondary shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#filter" aria-expanded="false" aria-controls="collapseExample">
        <i class="bi bi-funnel"></i> Filter
    </button>

    <div class="collapse mt-1" id="filter">
        <div class="filter card card-body bg-gradient d-flex">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex text-center" id="sort">
                        <div class="box">
                            <a href="">Sort down <i class="bi bi-sort-down"></i></a>
                        </div>
                        <div class="box">
                            <a href="">Sort up <i class="bi bi-sort-up"></i></a>
                        </div>
                        <div class="box">
                            <input type="text" placeholder="From...">
                        </div>
                        <div class="box">
                            <input type="text" placeholder="To...">
                        </div>
                        <div class="boxsearch">
                            <input type="text" placeholder="Search something...">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <h4 class="mx-2 text-white">Searched by category</h4>
                <div class="col-lg-12 d-flex">
                   
                    @foreach ( $category as $categorys )
                    <div class="boxCategory">
                        <a href="">{{ $categorys->CategoryName }}</a>
                    </div>
                    @endforeach
                 
                </div>

            </div>
        </div>
    </div>
</div>