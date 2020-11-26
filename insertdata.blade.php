<html>
<head>
<title>Student Registration Form</title>

<script>
function validateForm() {

    
  var x = document.forms["myform"]["firstname"].value;
  if (x == "") {
    alert("Please enter your FirstName");
    return false;
  }
  var x1 = document.forms["myform"]["gender"].value;
  if (x1 == "") {
    alert("Please select your gender");
    return false;
  }
  var chks = document.getElementsByName('hobbies[]');
  var hasChecked = false;
    for (var i = 0; i < chks.length; i++)
  {
	if (chks[i].checked)
	{
	hasChecked = true;
	break;
	}
}
if (hasChecked == false)
	{
	alert("Please select your hobby.");
	return false;
	}
return true; 
}
</script>

<style>
   
h2{
 font-family: Sans-serif; 
 font-size: 24px;     
 font-style: normal; 
 font-weight: bold; 
 color: blue;
 text-align: center; 
 text-decoration: underline
}
table{
 font-family: verdana; 
 color:white; 
 font-size: 16px; 
 font-style: normal;
 font-weight: bold;
 background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
 border-collapse: collapse; 
 border: 2px solid #000000;
 border-style: dashed;
  
}
table.inner{
 border: 10px
}
input[type=text], input[type=email], input[type=number]{
 width: 50%;
 padding: 6px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
input[type=submit], input[type=reset]{
 width: 15%;
 padding: 8px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
.required {
  color: red;
}
</style>
</head>
<body>
<h2>Student Registration Form</h3>
<form action="/insert" method="post" name="myform" onsubmit="return validateForm()">
<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>

{{ csrf_field() }}

<td>First Name:</td>
<td><input type="text" name="firstname" maxlength="50" placeholder="Enter Your FirstName" />
<span class="required">*</span>
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name:</td>
<td><input type="text" name="lastname" maxlength="50" placeholder="Enter Your SurName"/>
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value="Male" />
Male
<input type="radio" name="gender" value="Female" />
Female
<span class="required">*</span>
</td>
</tr>
<!------------------------- Hobbies -------------------------------------->
<tr>
<td>Hobbies :<br /><br /><br /></td>
<td>
<input type="checkbox" name="hobbies[]" value="Drawing" />
Drawing
<input type="checkbox" name="hobbies[]" value="Singing" />
Singing
<input type="checkbox" name="hobbies[]" value="Dancing" />
Dancing
<input type="checkbox" name="hobbies[]" value="Cooking" />
Sketching
<br />
<input type="checkbox" name="hobbies[]" value="Other">
Others
<input type="text" name="hobbies[]" maxlength="50" placeholder="Ex- Teaching" />
<span class="required">*</span>
</td>
</tr>

<!------------------------- Address ---------------------------------->
<tr>
<td>Address:<br /><br /><br /></td>
<td><textarea name="address" rows="5" cols="50"></textarea></td>
</tr>
<!------------------------ Branch Name --------------------------------------->
<tr>
<td>Branch Name:</td>
<td><input type="text" name="branch_name" maxlength="50" placeholder="Enter Your Branch Name"/>
</td>
</tr>
<!------------------------ Student Image --------------------------------------->
<tr>
<td>Image:</td>
<td><input type="file" name="image" id="fileToUpload">
<span class="required">*</span>
</td>
</tr>

<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit">
<!-- <input type="reset" value="Reset"> -->
</td>
</tr>
</table>
</form>
</body>
</html>