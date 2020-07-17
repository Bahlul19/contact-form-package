<!DOCTYPE html>
<html>
<head>
	<title>
		Contact form package
	</title>
</head>
<body>

<h1>Contact Us Anytime</h1>


@csrf

<form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
    Name : <input type="text" name="name" placeholder="Please enter your name"><br/><br/>
    Email : <input type="text" name="email" placeholder="Please enter your email"><br/><br/>
    Subject : <textarea name="subject"></textarea><br/><br/>
    <input type="submit" value="Submit">
</form>

</body>
</html>