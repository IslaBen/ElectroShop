@extends('index')
@section('content')
<div class=" col-6 offset-3 text-white bg-dark mt-5 fixed-top rounded shadow-sm pb-2 ">
    <form class="mx-auto" style="width: fit-content">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="PriceRange">Price Range</label>
                <select class="custom-select mr-sm-2" id="PriceRange">
                  <option selected>Price Range</option>
                  <option value="1">less then 10000 DZD</option>
                  <option value="2">less then 30000 DZD</option>
                  <option value="3">less then 60000 DZD</option>
                  <option value="4">less then 100000 DZD</option>
                  <option value="5">more then 100000 DZD</option>
                </select>
          </div>
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Category</option>
              <option value="1">SmartPhone</option>
              <option value="2">Laptop</option>
              <option value="3">Tablet</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="Shipping">
              <label class="custom-control-label" for="Shipping">with Shipping</label>
            </div>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-outline-primary">Filter</button>
          </div>
        </div>
      </form>
</div>
<div class="container fluid text-center mt-5">
    <div class="row ">
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 bg-lightgray border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
        <div class="card col-sm-12 col-md-2 p-0 m-3 border-0">
            <img src="{{asset('svg/mac.png')}}" height="200px" class="card-img-top" alt="...">
            <div class="card-body mt-0 pt-1">
                <h5 class="card-title m-0">Macbook Pro</h5>
                <p class="mb-1">220000DZD</p>
                <a href="#" > >see details</a>
            </div>
        </div>
    
    </div>
</div>
@endsection