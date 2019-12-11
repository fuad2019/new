<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Job List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company NAME</td>
			<td>Job Title</td>
			<td>Job Location</td>
			<td>ACTION</td>
		</tr>

	 @foreach($jobs as $s)
		<tr>
			<td>{{$s->jobId}}</td>
			<td>{{$s->companyname}}</td>
			<td>{{$s->jobtitle}}</td>
			<td>{{$s->jobloc}}</td>

			
			<td>
				<a href="{{route('job.edit', $s->jobId)}}">Edit</a> | 
				<a href="{{route('job.delete', $s->jobId)}}">Delete</a> | 
				<a href="{{route('job.details', $s->jobId)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>