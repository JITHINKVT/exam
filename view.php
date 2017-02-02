<?php

    $name=$_POST['name1'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$gendr=$_POST['sex'];
	$hobi=$_POST['hobi'];
	$hobies=implode(",",$hobi);
	$pic=$_POST['img'];
	$contry=$_POST['selt'];
	
	
	?>
	<html>
    <head>
    </head>
    <body>
    <table width="150" border="5" cellspacing="0" cellpadding="0">
  <tr>
    <td>Name</td>
    <td><?php echo $name ?></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><?php echo $phone ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $email ?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $gendr ?></td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td><?php echo $hobies ?></td>
  </tr>
  <tr>
    <td>Profile Pic</td>
    <td><?php echo $pic ?></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><?php echo $contry ?></td>
  </tr>
</table>

    </body>
    </html>