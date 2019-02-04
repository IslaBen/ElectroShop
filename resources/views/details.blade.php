@extends('index')
@section('content')
    <div class="container fluid">
        <div class="row mt-4" style="height:60vh">
            <img src="{{asset('svg/dell.png')}}" class="col-sm-10 col-md-5" alt="">
            <div class=" col-sm-10 col-md-5 text-white p-3 text-center">
                <h1>Dell XPS13</h1>
                <h3 class="text-success">150000 DZD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales, justo ac placerat sagittis.Quisque neque risus, suscipit ac elementum eu, Nunc rutrum, risus non fermentum interdum, dui massa facilisis nunc, quis imperdiet est ex nec ex. Praesent tempor consequat magna, vel ullamcorper est molestie vel. Praesent nec nisl vitae justo laoreet suscipit. </p>
                <button class="btn btn-light col-3 mt-2 btn-outline-success">Buy</button>
            </div>
        </div>
    </div>   
    <div class="container-fluid text-center">
        <h2 class="text-white my-4 pb-3 border-bottom col-4 offset-4" style="font-size: 4vh" >Products you may like </h2>
        <div >
        <div class="row p-5">
            <div class="card col-sm-12 col-md-2 p-3 m-auto border-0">
                <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Macbook Pro</h5>
                    <p class="mb-1">220000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-3 m-auto border-0">
                <img src="{{asset('svg/dell.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Dell XPS15</h5>
                    <p class="mb-1">180000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-3 m-auto border-0">
                <img src="{{asset('svg/1.png')}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body mt-0 pt-1">
                    <h5 class="card-title m-0">Samsung S9</h5>
                    <p class="mb-1">100000DZD</p>
                    <a href="#" > >see details</a>
                </div>
            </div>
            <div class="card col-sm-12 col-md-2 p-3 m-auto border-0">
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
@endsection