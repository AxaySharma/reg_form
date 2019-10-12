<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<!-- Title Page-->
 <title>Health Buddy Fitness Members</title>
 <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
 </head>
<body>
    
<h2 class="title" style="color:red;" align="center">Health Buddy Fitness - Members</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<table id="customers">
<tr>
    <th>Reg_No</th>
	<th>photo</th>
    <th>First Name</th>
    <th>Last Name</th>
	<th>D.o.b</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Package</th>
	<th>Address</th>
	<th>D.o.J</th>
	<th>Fees</th>
	<th>M.o.P</th>
  </tr>
<?php
$sql = "SELECT * FROM details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=1;
    while($row = mysqli_fetch_assoc($result)) {
        ?>
		<tr>
		<td><?php echo $row["reg_no"] ?></td>
		<td><?php 
		
	 echo '<img src="images/'.$row['image'].'" height="100" width="100" />';?>
		<td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["lname"]; ?></td>
		<td><?php echo $row["dob"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["package"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["joining_date"]; ?></td>
		<td><?php echo $row["fees_deposited"]; ?></td>
		<td><?php echo $row["mop"]; ?></td>
</tr>
		
		<?php
    $i = ++$i;
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
</table> <br/> <br/>
<center> <a href="delete.php" target="_blank"> <button class="btn btn--radius-2 btn--blue" type="submit">Delete a Member</button> </a> </center> <br/>
</body>
</html>         
