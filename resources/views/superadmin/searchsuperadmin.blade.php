<!DOCTYPE html>
<html>
 <head>
  <title>search user </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body background="sblack">
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
   url:"{{ route('search.actionsuperad') }}",
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