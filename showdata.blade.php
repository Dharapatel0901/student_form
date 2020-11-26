<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Hobbies</td>
<td>Address</td>
<td>Branch Name</td>
<td>Image</td>
<td>Action</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->firstname }}</td>
<td>{{ $user->lastname }}</td>
<td>{{ $user->gender }}</td>
<td>{{ $user->hobbies }}</td>
<td>{{ $user->address }}</td>
<td>{{ $user->branch_name }}</td>
<td>{{ $user->image }}</td>
<td><a href = 'delete/{{ $user->id }}'>Delete</a>&nbsp;|&nbsp;
<a href = 'edit/{{ $user->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html>