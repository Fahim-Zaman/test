<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>CGPA</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['userId']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['cgpa']}}</td>
			<td>
				<a href="{{route('home.edit', $value['userId'])}}">Edit</a> |
				<a href="{{route('home.delete', $value['userId'])}}">Delete</a> |
				<a href="{{route('home.details', $value['userId'])}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>