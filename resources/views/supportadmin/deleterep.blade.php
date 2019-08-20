
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
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

	<h2>Delete REp</h2>

	<a href="{{route('supportadmin.investorlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>{{$std['type']}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>Email :</td>
			<td>
				{{$std['Email']}}
			</td>
		</tr>
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>