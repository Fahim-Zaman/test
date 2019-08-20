
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId</td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td><input type="text" name="cgpa" value="{{$std['cgpa']}}"></td>
		</tr>
		<tr>
			<td>DEPT</td>
			<td>
				<select name="dept">
					<option 
						@if($std['dept'] == 'CSE')
							selected
						@endif
					 value="CSE">CSE</option>
					<option 
						@if($std['dept'] == 'SE')
							selected
						@endif
					value="SE">SE</option>
					<option 
						@if($std['dept'] == 'CSSE')
							selected
						@endif

					value="CSSE">CSSE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>