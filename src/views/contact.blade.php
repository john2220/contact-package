<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset( '/css/app.css' )}}" />
</head>
<body>
	<h1>Contact us anytime</h1>
	<form action="{{route('contact')}}" method="post">
		@csrf
		<div class="form-box d-flex flex-column">
			
		<input type="text" name="name" placeholder="Your name" />
		<input type="email" name="email" placeholder="Your email" />
		<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
		<input type="submit" value="submit" />
		</div>
	</form>
</body>
</html>