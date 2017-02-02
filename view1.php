<?php
include("connection.php");
$result=mysql_query("select * from employee");

if(mysql_query(num_row>0))
{
	while($row=mysql_fetch_array($result))
	{
?>
<html>
<head>
</head>
<body>
<table width="471" height="97" border="5" cellpadding="0" cellspacing="0">
  <tr>
    <td width="77">SI No</td>
    <td width="49">Pic</td>
    <td width="64">Name</td>
    <td width="77">Phone</td>
    <td width="67">Email</td>
    <th colspan="2">
    Action
    </th>
  </tr>
  <tr>
    <td><?php $row[0];?></td>
    <td><?php $row[1];?></td>
    <td><?php $row[2];?></td>
    <td><?php $row[3];?></td>
    <td><?php $row[4];?></td>
    <td width="46"><a href="edit.php">Edit</a></td>
    <td width="67"><a href="delete">Delete</a></td>
    <?php
	}
}
?>
  </tr>
</table>

</body>
</html>