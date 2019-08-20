
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td>{{$std['cgpa']}}</td>
		</tr>
		<tr>
			<td>DEPT :</td>
			<td>
				{{$std['dept']}}
			</td>
		</tr>
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>