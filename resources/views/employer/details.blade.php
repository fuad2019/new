<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employer Details</h1>
	<a href="{{route('employer.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$std['userId']}}</td>
		</tr>
		<tr>
			<td>Employer Name</td>
			<td>{{$std['employername']}}</td>
		</tr>


       <tr>
			<td>Company Name</td>
			<td>{{$std['companyname']}}</td>
		</tr>


		  <tr>
			<td>Contact</td>
			<td>{{$std['contact']}}</td>
		</tr>

       <tr>
			<td>User Name</td>
			<td>{{$std['username']}}</td>
		</tr>



		

	</table>
</body>
</html>