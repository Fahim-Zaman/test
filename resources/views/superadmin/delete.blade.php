
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete Student</h2>

	
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