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
  	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('supportadmin.profile')}}">support admin Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('supportadmin.index')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('supportadmin.profile')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('supportadmin.Registration')}}">Create admin</a>
          </li>
          
                    <li class="nav-item">
            <a class="nav-link" href="{{route('supportadmin.investorlist')}}">investor info </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('supportadmin.replist')}}">Representor info </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('searchuser.index')}}">Search</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{route('supportadmin.complain')}}">Seizedinfo & complains </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">log-out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>
  
    
    @foreach($detail as $value)
   
      <h4>ID: {{$value['id']}}</h4> <br>
      <h4>Name: {{$value['name']}}</h4> <br>
      <h4>Email: {{$value['email']}}</h4> <br>
      <h4>Phone: {{$value['phone']}}</h4> <br>
      <h4>type: {{$value['type']}}</h4> <br>
      
     
      <a href="{{route('investor.edit', $value['id'])}}">Edit</a>
    @endforeach
     


  </body>

</html>