<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add Employer</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>

</br>
	@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
	<form method="post">
			{{csrf_field()}}
	<table border="1">
		
		<tr>
			<td>Employer Name</td>
			<td><input type="text" name="employername"  value="{{old('employername')}}"></td>

			
		</tr>
		
<tr>
<td>	@if($errors->has('employername'))
            <div class="error">{{ $errors->first('employername') }}</div>
            @endif
            </td>
</tr>
       <tr>
			<td>Company Name</td>
			<td><input type="text" name="companyname" value="{{old('companyname')}}"></td>
		</tr>
		
      <tr>
			<td>Contact no</td>
			<td><input type="text" name="contact" value="{{old('contact')}}"></td>
		</tr>



        <tr>
			<td>User Name</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>


		
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>


     <tr>

			<td>Type</td>
			<td><input type="text" name="type" value="{{old('type')}}"></td>
		</tr>
		<tr>


			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>