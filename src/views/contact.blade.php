<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>Contact Us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf 
        <input type="text" name="name" placeholder="Enter your name here">
        <input type="email" name="email" placeholder="Enter your email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message here"></textarea>
        <input type="submit" value="Submit" >
    </form>
</body>
</html>