<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="{{ URL::asset('r/fonts/linearicons/style.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('r/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
     
    <script src="{{ url('/') }}./js/jquery.min.js"></script>
     
     
     
    <link rel="stylesheet" href="{{ URL::asset('investor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('investor/css/shop-homepage.css') }}">
     
     
     
    <script src="{{ URL::asset('investor/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('investor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
    
    <!-- STYLE CSS -->
    
  </head>

  <body>
    
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
            <a class="nav-link" href="{{route('superadmin.create')}}">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">log-out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <div class="row">

      <div class="col-lg-3">

       <h1 class="my-4">Portal </h1>
        <div class="list-group">
          <a href="{{route('superadmin.tfund')}}" class="list-group-item">Today total Transection</a>
          <a href="{{route('superadmin.tmfund')}}" class="list-group-item">This Month</a>
          <a href="{{route('superadmin.Fund')}}" class="list-group-item">Fund Report</a>
        </div>

      </div>

    </div>
  </div>
  <br><br><br>
    
    <div class="container">
      <h4 align="center">Today Total invest {{$sum}}</h4>
    <table align="center" border="1" width="50%">
      <tr>

        <td align="center">Investor ID</td>
        <td align="center">representor ID</td>
        
        <td align="center">Amount</td>
        <td align="center">Date</td>
      </tr>
    @foreach($new as $value)
      

      
        <tr>
          <td align="center">
          {{$value['investor_name']}}
          </td>
          <td align="center">
          {{$value['representor_name']}}
          </td>
          <td align="center">
          {{$value['ammount']}}
          </td>
          <td align="center">
          {{$value['date']}}
          </td>
        </tr>
        
        @endforeach
        </table>

        
        </div>
        <br><br><br>
   


    
    <script src="{{ URL::asset('r/js/jquery-3.3.1.min.js') }}"></script>

    <script src="{{ URL::asset('r/js/main.js') }}"></script>
    
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>