<!DOCTYPE html>
<html>
<body>

<?php

$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');
$Confirm_Password = filter_input(INPUT_POST, 'Confirm_Password');
 if (!empty($Name)){
if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "ankur";
$dbname = "ankur";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO courseregistrationuser (Name, Email,Password,Confirm_Password)
  values ('$Name','$Email','$Password','$Confirm_Password')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Email should not be empty";
  die();
}
 }
 else{
  echo "Name should not be empty";
  die();
 }

?>
</body>
</html>
