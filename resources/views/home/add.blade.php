<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>

	<h2>Create Student</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td><input type="text" name="cgpa"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>DEPT</td>
			<td>
				<select name="dept">
					<option value="CSE">CSE</option>
					<option value="SE">SE</option>
					<option value="CSSE">CSSE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>