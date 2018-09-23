<html>

<body>

 

 

<?php

$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("ankur", $con);

 

$sql="INSERT INTO courseregistrationuser (Name, Email,Password,Confirm_Password)

VALUES

('$_POST[Name]','$_POST[Email]','$_POST[Password]','$_POST[Confirm_Password]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>