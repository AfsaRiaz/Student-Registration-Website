<?php 
session_start();
include 'conn.php';
if(!isset($_SESSION['login'])){
    header('location:login.php');
}
$email = $_SESSION["email"];
$query = " select * from student where email = '$email';";
$findresult = mysqli_query($con,$query);
if($res = mysqli_fetch_array($findresult)){
    $rollno = $res['rollno'];
    $fname = $res['fname'];
    $lname = $res['lname'];
    $faname = $res['faname'];
    $gender = $res['gender'];
    $dept = $res['dept'];
    $email = $res['email'];
    $dor = $res['dor'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Account</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body
	{
		background-image: url(Images/4.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
    </style>

</head>
<body>
         
         <div class="row">
         <div class="col-12">
 <nav>
         Student Registration System 
         <span class="out"><a href="logout.php">Logout</a></span>
 </nav>
 </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
    <div class="card-header bg-dark abc">
                     <h1 class = "text-white text-center"> Student Personal Details </h1>
                     </div>

                     <table class=" table table-stripped table-hover table-bordered abc bg-light">
                         
                     <tr>
                         <th>Roll Number</th>
                         <td> <?php echo $rollno; ?> </td>
                     </tr>

                     <tr>
                         <th>First Name</th>
                         <td> <?php echo $fname; ?> </td>
                     </tr>

                     <tr>
                         <th>Last Name</th>
                         <td> <?php echo $lname; ?> </td>
                     </tr>

                     <tr>
                         <th>Father Name</th>
                         <td> <?php echo $faname; ?> </td>
                     </tr>

                     <tr>
                         <th>Gender</th>
                         <td> <?php echo $gender; ?> </td>
                     </tr>

                     <tr>
                         <th>Department</th>
                         <td> <?php echo $dept; ?> </td>
                     </tr>

                     <tr>
                         <th>Email</th>
                         <td> <?php echo $email; ?> </td>
                     </tr>

                     <tr>
                         <th>Date of Registration</th>
                         <td> <?php echo $dor; ?> </td>
                     </tr>

                     </table>
    </div>
    <div class="col-1"></div>
</div>
             
</body>
</html>