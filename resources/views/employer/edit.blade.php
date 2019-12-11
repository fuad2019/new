<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit Employer</h1>
	<a href="{{route('employer.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>Employer Name</td>
			<td><input type="text" name="employername" value="{{$std['employername']}}"></td>
		</tr>
		<tr>


       <tr>
			<td>Company Name</td>
			<td><input type="text" name="companyname" value="{{$std['companyname']}}"></td>
		</tr>
		



       <tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{$std['contact']}}"></td>
		</tr>
		


       <tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$std['username']}}"></td>
		</tr>

       


       <tr>
			<td>Type</td>
			<td><input type="text" name="type" value="{{$std['type']}}"></td>
		</tr>


        <tr>

			<td>PASSWORD</td>
			<td><input type="text" name="password" value="{{$std['password']}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>