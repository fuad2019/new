<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Job Details</h1>
	<a href="{{route('job.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$job['jobId']}}</td>
		</tr>
		<tr>
			<td>Company NAME</td>
			<td>{{$job['companyname']}}</td>
		</tr>


        <tr>
			<td>Job Title</td>
			<td>{{$job['jobtitle']}}</td>
		</tr>

       <tr>
			<td>Job Location</td>
			<td>{{$job['jobloc']}}</td>
		</tr>
         <tr>
			<td>Salary</td>
			<td>{{$job['salary']}}</td>
		</tr>




		

	</table>
</body>
</html>