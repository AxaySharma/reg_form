<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Health Buddy Fitness Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
				
                    <h2 class="title" style="color:green;">Health Buddy Fitness - Registration Form</h2>
					<div class="row row-space">
                            <div class="col-2">
                               <div class="p-t-15">
							   <a href="members.php" target="_blank">
                            <button class="btn btn--radius-2 btn--blue" type="submit" >View All Members</button> </a>
                        </div>
                            </div>
                            <div class="col-2">
                                <div class="p-t-15">
								<a href="search.php">
                            <button class="btn btn--radius-2 btn--blue">Search Members</button></a>
                        </div>
                            </div>

                        </div>
			
                    <form method="POST" action="form.php" enctype="multipart/form-data">
					 	<br/>
						<br/>
						<br/>

			                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Registration Number</label>
                                    <input class="input--style-4" type="text" name="reg_no">
                                </div>
                            </div>
							<input type="hidden" name="size" value="100000">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Photo</label>
                                    <input class="input--style-4" type="file" name="image" id="image" accept=".jpg,.jpeg,.png">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="fname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date Of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Package</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="package">
                                    <option disabled="disabled" selected="selected" value="$i">Choose option</option>
									<?php
									for ($i = 1; $i<=24; $i++)
									{ ?>
                                    <option> <?php echo "$i Months"; ?></option>
                                    <?php } ?>
                                </select>
				 <div class="select-dropdown"></div>
                            </div>		
                        </div>
						
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address Line 1</label>
                                    <input class="input--style-4" type="text" name="add1">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address Line 2</label>
                                    <input class="input--style-4" type="text" name="add2">
                                </div>
                            </div>
                            
                        </div>
						<div class="row row-space">
                           
							<div class="input-group">
                                    <label class="label">Joining Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="doj">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            
                        </div>
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Fees Deposited</label>
                                    <input class="input--style-4" type="number" name="fees_deposited">
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mode Of Payment</label>
                                    <input class="input--style-4" type="text" name="mop">
                                </div>
                            </div>
                            
                        </div>
				
                        <div>
                           <center> <button class="btn btn--radius-2 btn--blue" type="submit" name="submit" value="submit">Submit</button> </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

 
$reg_no = $_POST['reg_no'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date1 = $_POST['dob'];
$phpdate1 = strtotime( $date1 );
$dob = date( 'Y-m-d', $phpdate1 );
$date2 = $_POST['doj'];
$phpdate2 = strtotime( $date2 );
$doj = date( 'Y-m-d', $phpdate2 );
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$package = $_POST['package'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$add = $add1." ".$add2;
$fees_deposited = $_POST['fees_deposited'];
$mop = $_POST['mop'];
	  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	

  	// image file directory
  	$target = "images/".basename($image);

  	
	$sql = "INSERT INTO details (reg_no,image,fname,lname,dob,gender,email,phone,package,address,joining_date,fees_deposited,mop) VALUES ('$reg_no','$image','$fname','$lname','$dob','$gender','$email','$phone','$package','$add','$doj','$fees_deposited','$mop')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		 echo "Image uploaded successfully";
  	}else{
  		echo"Failed to upload image";
  	}
  }



mysqli_close($conn);}
?>


</body>
</html>
<!-- end document-->
