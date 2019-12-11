<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add Job</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>COMPANY NAME</td>
			<td><input type="text" name="companyname"></td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td><input type="text" name="jobtitle"></td>
		</tr>

		<tr>
			<td>Job Location</td>
			<td><input type="text" name="jobloc"></td>
		</tr>


 		<tr>
			<td>Salary</td>
			<td><input type="text" name="salary"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>