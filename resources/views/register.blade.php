<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2> Buat Account Baru !</h2>
	<h3> Sign Up Form</h3>
	<div>
		<p>First Name:</p>
			<form>
			<input type="text" /></form>
		<p>Last Name:</p>
			<form>
			<input type="text" /></form>
		<p>Gender:</p>
			<input type="radio" name="gender" value="male"/>Male </br>
			<input type="radio" name="gender" value="female"/>Female </br>
			<input type="radio" name="gender" value="other"/>Other 
		<p>Nationality:</p>
		<select>
			 <option>Indonesia</option>
			 <option>Korea</option>
			 <option>Hongkong</option>
		</select>
		<p>Language Spoken:</p>
			<input type="checkbox" name="bahasa" /> Bahasa Indonesia </br>
			<input type="checkbox" name="bahasa" /> English</br>
			<input type="checkbox" name="bahasa" /> Other </br>
		
		<p>Bio:</p>
			<textarea cols="30" rows="9"></textarea>
		<form action="/welcome">
		<button type="submit">Sisgn Up</button>
		</form>
	</div>
</body>
</html>
