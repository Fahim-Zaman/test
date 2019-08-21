<!DOCTYPE html>
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
      <a class="navbar-brand" href="#">cart</a>
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

	<h2>cart:</h2>
	


	<table border="1">
		<tr>
			<td>name</td>
			<td>model</td>
			<td>price</td>
			<td>description</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['name']}}</td>
			<td>{{$value['model']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['description']}}</td>

			<td>
			


			</td>
		</tr>
		@endforeach

</table>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<h2>Investor balance and stasus:</h2>


	<table border="1">
		<tr>
			<td>ID</td>
			<td>username</td>
			<td>carnumber</td>
			<td>balance</td>
			<td>status</td>
			<td>type</td>
			
		</tr>
		@foreach($iac as $val)
		<tr>
			<td>{{$val['id']}}</td>
			<td>{{$val['username']}}</td>
			<td>{{$val['card_number']}}</td>
			<td>{{$val['balance']}}</td>
			<td>{{$val['status']}}</td>
			<td>{{$val['type']}}</td>

			<td>
			

				 <a href="{{route('supportdamin.activeinvestor', $val['id'])}}">Active</a>
				  <a href="{{route('supportdamin.deactiveinvestor', $val['id'])}}"> DEActive</a>
				
			</td>

			
		</tr>
		@endforeach

</table>

</body>
</html>