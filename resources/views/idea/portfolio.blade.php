<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Representor admin </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{ URL::asset('r/fonts/linearicons/style.css') }}">

		<link rel="stylesheet" href="{{ URL::asset('r/css/style.css') }}">
		
		<!-- STYLE CSS -->
		
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method="post">
					{{csrf_field()}}
					<h2> register portfolio </h2>
					
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="name" placeholder="name">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="School" placeholder="School">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="college" placeholder="college">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="University" placeholder="University">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" name="phone" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" name="email" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="age" placeholder="age">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="Address" placeholder="Address">
					</div>
					
					
					<input type="submit" name="registration" value="Registration">
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		

		<script src="{{ URL::asset('r/js/jquery-3.3.1.min.js') }}"></script>

		<script src="{{ URL::asset('r/js/main.js') }}"></script>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>