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
      <a class="navbar-brand" href="#">support admin Portal</a>
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

	<h2>Seized account by Support Admin:</h2>
	
	<button onclick="myFunction()">Print this page</button>
	

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Support Admin</td>
			<td>Investro</td>
			<td>Status</td>
			<td>Balance</td>
		
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['supportadmin']}}</td>
			<td>{{$value['investor']}}</td>
			<td>{{$value['status']}}</td>
			<td>{{$value['balance']}}</td>

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

<h2>User Complain statuts :</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>username</td>
			<td>complain</td>
			<td>type</td>
			<td>status</td>
			
			
		</tr>
		@foreach($iac as $val)
		<tr>
			<td>{{$val['id']}}</td>
			<td>{{$val['username']}}</td>
			<td>{{$val['complain']}}</td>
			<td>{{$val['type']}}</td>
			<td>{{$val['status']}}</td>
	

			<td>
			
                  <a href="{{route('supportadmin.checkcomplain', $val['id'])}}"> Check</a>
				
			</td>

			
		</tr>
		@endforeach

</table>



</div>
<script>
function myFunction() {
  window.print();
}
</script>
</body>
</html>