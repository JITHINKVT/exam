<?php
include("connection.php");

if(isset($_POST['btn']))
{
	$name=$_POST['name1'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$gendr=$_POST['sex'];
	$hobi=$_POST['hobi'];
	$hobies=implode(",",$hobi);
	$contry=$_POST['selt'];



mysql_query("insert into employee(name,phone,email,gender,hobbies,country)values( '$name','$phone','$email','$gendr','$hobies','$contry')");



}
?>


































<html>
<head>
</head>
<body>
<form action="view.php" method="post" enctype="multipart/form-data">
<table width="316" border="5" cellspacing="0" cellpadding="0">
  <tr>
    <td>Name</td>
    <td><input name="name1" type="text" placeholder="name"></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input name="phone" type="text" placeholder="Phone Number"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="email" type="text" placeholder="Email"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input name="sex" type="radio" value="male">Male
    <input name="sex" type="radio" value="female">FeMale
    </td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td>
    <input name="hobi[]" type="checkbox" value="Listening to music">Listening to music<br>
    <input name="hobi[]" type="checkbox" value="Reading">Reading<br>
    <input name="hobi[]" type="checkbox" value="browsing">Browsing<br>
     <input name="hobi[]" type="checkbox" value="Playing">Playing<br>
    </td>
  </tr>
  <tr>
    <td>Profile Pic</td>
    <td><input name="img" type="file"></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><select name="selt">
    <option value="india">India</option>
     <option value="usa">USA</option>
     <option value="england">England</option>
      <option value="china">China</option>
    </select></td>
  </tr>
  <tr>
   <th colspan="2" align="center">
   <input name="btn" type="submit" value="Save"><br>
   <a href="view1.php"> View Detais</a>
  </tr>
</table>


</form>

</body>
</html>