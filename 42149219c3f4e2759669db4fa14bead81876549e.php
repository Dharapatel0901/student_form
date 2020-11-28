<html>
<head>
<title>Student Registration Form</title>
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
<form action="/edit/<?php echo $users[0]->id; ?>"  method="post" name="myform1" >

<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>

<?php echo e(csrf_field()); ?>


<td>First Name:</td>
<td><input type="text" name="firstname" maxlength="50" placeholder="Enter Your FirstName" value='<?php echo$users[0]->firstname; ?>'/>
<span class="required">*</span>
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name:</td>
<td><input type="text" name="lastname" maxlength="50" placeholder="Enter Your SurName" value='<?php echo$users[0]->lastname; ?>'/>
</td>
</tr> 
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value='<?php echo$users[0]->gender; ?>' />
Male
<input type="radio" name="gender"  value='<?php echo$users[0]->gender; ?>'/>
Female
<span class="required">*</span>
</td>
</tr>
<!------------------------- Hobbies -------------------------------------->
<tr>
<td>Hobbies :<br /><br /><br /></td>
<td>
<input type="checkbox" name="hobbies[]" value='<?php echo$users[0]->hobbies; ?>' />
Drawing
<input type="checkbox" name="hobbies[]"  value='<?php echo$users[0]->hobbies; ?>'/>
Singing
<input type="checkbox" name="hobbies[]"  value='<?php echo$users[0]->hobbies; ?>'/>
Dancing
<input type="checkbox" name="hobbies[]"  value='<?php echo$users[0]->hobbies; ?>'/>
Sketching
<br />
<input type="checkbox" name="hobbies[]" value='<?php echo$users[0]->hobbies; ?>'/>
Others
<input type="text" name="hobbies[]" maxlength="50" placeholder="Ex- Teaching"value='<?php echo$users[0]->hobbies; ?>' />
<span class="required">*</span>
</td>
</tr>

<!------------------------- Address ---------------------------------->
<tr>
<td>Address:<br /><br /><br /></td>
<td><textarea name="address" rows="5" cols="50" value='<?php echo$users[0]->address; ?>'></textarea></td>
</tr>
<!------------------------ Branch Name --------------------------------------->
<tr>
<td>Branch Name:</td>
<td><input type="text" name="branch_name" maxlength="50" placeholder="Enter Your Branch Name"value='<?php echo$users[0]->branch_name; ?>' />
</td>
</tr>
<!------------------------ Student Image --------------------------------------->
<tr>
<td>Image:</td>
<td><input type="file" name="image" id="fileToUpload" value='<?php echo$users[0]->image; ?>'>
<span class="required">*</span>
</td>
</tr>

<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit" class="btn-btn" >Update</button>  
</td>
</tr>
</table>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\student_form\resources\views/edit.blade.php ENDPATH**/ ?>