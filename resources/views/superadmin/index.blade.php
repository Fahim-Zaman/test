<html>
	
	<head>
    <title>Fundrise.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
   
  <script src="{{ url('/') }}./js/jquery.min.js"></script>
   
   
   
  <link rel="stylesheet" href="{{ URL::asset('investor/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('investor/css/shop-homepage.css') }}">
   
   
   
  <script src="{{ URL::asset('investor/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('investor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
	  
  </head>

  <body>
  	<!-- navigation bar start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Super Admin Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('superadmin.index')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.profile')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.create')}}">Create Support Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('searchuser.superadmin')}}">Search</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('superadmin.event')}}">Event</a>
          </li>
         <li class="nav-item">
           <a class="nav-link" href="{{route('superadmin.report')}}">Report</a>
         </li>
         
         <!-- <li class="nav-item">
           <a class="nav-link" href="{{route('investor.history')}}">History</a>
         </li> -->
         <li class="nav-item">
           <a class="nav-link" href="/logout">log-out</a>
         </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navigation bar end -->


  <!-- css left side -->
<div class="container">

    <div class="row">

      <div class="col-lg-3">

       <h1 class="my-4">Portal </h1>
        <div class="list-group">
          <a href="{{route('superadmin.active')}}" class="list-group-item">Active User</a>
          <a href="{{route('superadmin.Fund')}}" class="list-group-item">Fund Report</a>
          <a href="{{route('superadmin.supportadminshow')}}" class="list-group-item">Support Admin</a>
        </div>

      </div>

    </div>
  </div>
<!-- css left side end -->
<br><br><br>

<!-- crdit system -->
  <div class="container">
    <h4 align="center">Total Credit:{{$new}}  </h4> 
  </div>


  </body>

</html>