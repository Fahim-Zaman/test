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
      <a class="navbar-brand" href="#">Representor Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('idea.index')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('idea.profile')}}">Profile</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('idea.withdraw')}}">Withdraw</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.history')}}">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('investor.report')}}">Report</a>
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

       
        <div class="list-group">
          <a href="{{route('idea.portfolio')}}" class="list-group-item">Portfolio</a>
          <a href="{{route('idea.showinvestor')}}" class="list-group-item">Show investor</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>

    </div>

  <br><br><br>
  <div class="container">
    
  
  <h2>Show Investor</h2>
  <table border="1">
    <tr>
      <td>ID</td>
      <td>Representor</td>
      <td>Investor</td>
      <td>Amount</td>
      <td>Date</td>
    </tr>
  @foreach($details as $value)
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['investor_name']}}</td>
        <td>{{$value['representor_name']}}</td>
        <td>{{$value['ammount']}}</td>
        <td>{{$value['date']}}</td>
      </tr>
      
    @endforeach
  </table>

  <br><br>
  <p>Click the button to print the current page.</p>

<button onclick="myFunction()">Print this page</button>
</div>
<script>
function myFunction() {
  window.print();
}
</script>
  </body>

</html>