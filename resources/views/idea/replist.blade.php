<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student List:</h2>
	
	<a href="/supportdamin">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>School</td>
			<td>college</td>
			<td>University</td>
			<td>email</td>
			<td>phone</td>
			<td>Address</td>
			<td>age</td>
			<td>type</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['School']}}</td>
			<td>{{$value['college']}}</td>
			<td>{{$value['University']}}</td>
			<td>{{$value['email']}}</td>
			<td>{{$value['phone']}}</td>
			<td>{{$value['Address']}}</td>
			<td>{{$value['age']}}</td>
			<td>{{$value['type']}}</td>
		

			<td>
			
                    <a href="{{route('idea.editrep', $value['id'])}}">Edit</a>
		
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>