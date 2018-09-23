<?php
/* INPUT_POST method is used so that user can post the form and values */
 /* filter_input is used to filter a data from html form */

$Name = filter_input(INPUT_POST,'Name');  
$Email = filter_input(INPUT_POST,'Email');
$Password = filter_input(INPUT_POST,'Password');
$Confirm_Password = filter_input(INPUT_POST,'Confirm_Password');
if(!empty($Name))
     {
	     if(!empty($Email))
	          {
		          if(!empty($Password))
		              {

 $host="localhost";
 $dbusername="root";
 $dbpassword="ankur";
 $dbname ="ankur";

 /*creating a connection */
 $conn= new mysqli ($host,$dbusername, $dbpassword,$dbname);
 if(mysqli_connect_error()){
 	die('connect Error('.mysqli_connect_errno().')'
        .mysqli_connect_error());
 }
 else {
 	$sql = "INSERT INTO courseregistrationuser (Name,Email,Password,Confirm_Password)
 	        values('$Name','$Email','$Password','$Confirm_Password')"
 	        if($conn-> query ($sql)){
 	        	echo "Ne record is nserted successfully";
 	        }
 	        else {
 	        	echo "Error:".$sql."<br>".$conn->error;
 	        }
 	        $conn->close();

 }

		              }
		           else {
			             echo "Password should not be empty";
			             die();
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