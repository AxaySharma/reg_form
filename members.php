<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
<title>Health Buddy Fitness Registration</title>
    <style>
     table{
      border: 1px solid black;
     
     }
     th,tr{
     width: 100px;
      }
</style>
</head>

<body>
<center> <h2 class="title" style="color:red;">Health Buddy Fitness - Members</h2> </center>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db = 'Gym';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db,);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   $sql = 'SELECT registration_no, fname, lname,dob,address,mobile_no,email,joining_date,fees_deposited,payment_method,subscription,gender,photo FROM Details';
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   while($row = mysqli_fetch_array($retval)) {
      echo "<b>Registration No :</b>{$row['registration_no']}  <br> ".
         "<b>First Name:</b> {$row['fname']} <br/> ".
         "<b>Last Name:</b>{$row['lname']} <br/> ".
	"<b>Date Of Birth:</b> {$row['dob']} <br/> ".
         "<b>Address</b> : {$row['address']} <br/> ".
         "<b>Mobile No</b> : {$row['mobile_no']} <br/> ".
	"<b>Email</b> : {$row['email']} <br/> ".
        "<b>Joining Date:</b> {$row['joining_date']} <br/> ".
	 "<b>Deposited Fees:</b> {$row['fees_deposited']} <br/> ".
	 "<b>Payment Method:</b> {$row['payment_method']} <br/> ".
	 "<b>Subscription:</b> {$row['subscription']} Months <br/> ".
	 "<b>Gender:</b> {$row['gender']} <br/> ".
         "--------------------------------------------------------------------------<br/><br/>";
   }
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>
</body>
</html>
