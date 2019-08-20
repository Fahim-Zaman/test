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
      <a class="navbar-brand" href="#">Investor Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home.profile')}}">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.add_credit')}}">Add Credit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/resturent">resturent</a>
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
  <br><br><br>
  
    <form method="post">
  @csrf
  <table border="0">
    <tr>
      <td>UserId</td>
      <td>{{$details['id']}}</td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="uname" value="{{$details['username']}}"></td>
    </tr>
    <tr>
      <td>Name: </td>
      <td><input type="text" name="name" value="{{$details['name']}}"></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><input type="text" name="email" value="{{$details['email']}}"></td>
    </tr>
    <tr>
      <td>Phone: </td>
      <td><input type="text" name="phone" value="{{$details['phone']}}"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="save" value="Save"></td>
    </tr>
</table>
</form>
    
     


  </body>

</html>