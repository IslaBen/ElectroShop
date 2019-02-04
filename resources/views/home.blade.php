@extends("index")
@section("content")
<div>
    <div id="carouselExampleIndicators" class="carousel slide mt-5"  style="height: 30%;" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" >
        <img src="{{asset('svg/dell.png')}}" class="d-block w-100" style="height:70vh ; " alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
    </div>
        </div>
        <div class="carousel-item"  >
            <img src="{{asset('svg/1.png')}}" class="d-block w-100" style="height:70vh ; " alt="...">
            <div class="carousel-caption d-none d-md-block"  >
                <h5>...</h5>
                <p>...</p>
            </div>
        </div>
        <div class="carousel-item" >
        <img src="{{asset('svg/2.png')}}" style="height:70vh ; " class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="container-fluid text-center">
        <h2 class="text-white my-4 pb-3 border-bottom col-4 offset-4" style="font-size: 4vh" >Categories</h2>
        <div class="card p-5">
        <div class="row">
            <div class="card col-3 p-0 m-auto border-0">
                <img src="{{asset('svg/403.svg')}}" class="card-img-top" alt="...">
            </div>
            <div class="card col-3 p-0 m-auto border-0">
                <img src="{{asset('svg/403.svg')}}" class="card-img-top" alt="...">
            </div>
            <div class="card col-3 p-0 m-auto border-0">
                <img src="{{asset('svg/403.svg')}}" class="card-img-top" alt="...">
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <h2 class="text-white my-4 pb-3 border-bottom col-4 offset-4" style="font-size: 4vh" >Best Sellers </h2>
        <div class="card">
        <div class="row p-5">
            <div class="card col-sm-12 col-md-2 p-0 m-auto border-0">
                <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Macbook Pro</h5>
                    <p class="mb-1">220000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-0 m-auto border-0">
                <img src="{{asset('svg/dell.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Dell XPS15</h5>
                    <p class="mb-1">180000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-0 m-auto border-0">
                <img src="{{asset('svg/1.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Samsung S9</h5>
                    <p class="mb-1">100000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-0 m-auto border-0">
                <img src="{{asset('svg/2.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Samsung S9+</h5>
                    <p class="mb-1">120000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('authentication')
<button type="button" class=" btn btn-outline-primary mx-2 collapse navbar-collapse" data-toggle="modal" data-target="#exampleModal">
  authenticate
</button>
@endsection