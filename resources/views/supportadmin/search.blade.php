<!DOCTYPE html>
<html>
 <head>
  <title>search user </title>


  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
   
  <script src="{{ url('/') }}./js/jquery.min.js"></script>
   
   
   
  <link rel="stylesheet" href="{{ URL::asset('investor/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('investor/css/shop-homepage.css') }}">
   
   
   
  <script src="{{ URL::asset('investor/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('investor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
    
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body background="sblack">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">support admin Portal</a>
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
  <br />
  
   <h3 align="center"> search </h3><br />
   
    <div class="panel-heading">Search user table</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search user" />
     </div>
     <div class="table-responsive">
   
      <table class="table">
       <thead>
        <tr>
         <th>ID </th>
         <th>Username</th>
       
         <th>type Code</th>
         <th>name</th>
          <th>email</th>
         <th>phone</th>
         <th>status</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     
    </div>    
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_user();

 function fetch_user(query = '')
 {
  $.ajax({
   url:"{{ route('search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_user(query);
 });
});
</script>