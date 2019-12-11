<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1>
	<a href="{{route('employer.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Employer NAME</td>
			<td>{{$std['employername']}}</td>
		</tr>


        <tr>
			<td>Company NAME</td>
			<td>{{$std['companyname']}}</td>
		</tr>


         <tr>
			<td>Employer contact</td>
			<td>{{$std['contact']}}</td>
		</tr>


	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>