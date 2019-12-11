<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit Job</h1>
	<a href="{{route('employer.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>COMPANY NAME</td>
			<td><input type="text" name="companyname" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td><input type="text" name="jobtitle" value="{{$std['username']}}"></td>
		</tr>

		<tr>
			<td>Job Location</td>
			<td><input type="text" name="jobloc" value="{{$std['username']}}"></td>
		</tr>


 		<tr>
			<td>Salary</td>
			<td><input type="text" name="salary" value="{{$std['username']}}"></td>
		</tr>

		
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>