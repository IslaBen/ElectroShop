<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ElectroShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
<body class="bg-dark pt-5">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" >
  <a class="navbar-brand" href="#">ElectroShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 btn btn-outline-success"  type="search" placeholder="Search" aria-label="Search">
      <button class="border-0 bg-transparent" style="margin-left:-45px;margin-right:16px;" type="submit"><i class="fas fa-search text-dark"></i></button>
      @yield("authentication")
    </form>
  </div>
</nav>

@yield("content")

<div class=" container-fluid text-center text-white my-5">
    <h2 class="p-3 m-5 border-bottom" id="contact">Contact</h2>
    <div class="row">
        <div class=" col-sm-12 col-md-5 p-5">
            <p>you can contact us on : </p>
            <p>facebook:</p>
            <a href="facebook.com/ElectroShop">ElectroShop</a>
            <p>twitter</p>
            <a href="twitter.com/ElectroShop">ElectroShop</a>            
            <p>instagram</p>
            <a href="instagram.com/ElectroShop">ElectroShop</a>
            <p>or give us a call : 0656672803</p>
        </div>
        <div class="col-sm-11 col-md-5" style="overflow:hidden;"><iframe width="700" height="440" src="https://maps.google.com/maps?hl=en&amp;q=sidi%20bel%20abbes+(ElectroShop)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div><small><a href="https://embedgooglemaps.com/it/">embedgooglemaps EN</a></small></div><div><small><a href="http://www.stedentrippers.nl/berlijn.html">praktische reisinfo over berlijn</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
    </div>
    <p>All copyrights to ElectroShop 2019</p>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>