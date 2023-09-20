<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

  <link rel="stylesheet" href="assets/bootstrap.min.css" >
  <script src="assets/jquery.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
   <style>
        
        body
	{
		background-image: url(Images/1.jpg);
		background-size: cover;
		background-attachment: fixed;
	} 
      .pad{
            margin-left : 150px;
            font-weight : bolder;
            padding-left : 30px;
            padding-right : 30px;
            padding-top : 10px;
            padding-bottom : 10px;
      }
   </style>

</head>
<body>


<div class="row">
         <div class="col-12">
 <nav>
         Student Registration System 
         <span class="out"><a href="loginAdmin.php">Logout</a></span>
 </nav>
 </div>
</div>

<div class = "container">
<div class = "col-lg-12">
<br>  <br>

<div class="row">
<div class="col-lg-4">
<h1 class = "text-center text-white"> Admin Panel </h1>
<br>
</div>
<div class="col-lg-4">

</div>
<div class="col-lg-4">
<button class="btn btn-info pad"><a href="insert.php"  class="text-white"><div> ADD STUDENT</div></a></button>
</div>
</div>


<table class = "table table-stripped table-hover table-bordered bg-light" id = "myTable">
<tr class = "bg-dark text-white text-center">
      <th> Sno. </th>
      <th> Roll Number</th>
      <th> Student Name </th>
      <th> View </th>
      <th> Delete </th>
      <th> Update </th>
</tr>

     
        <?php

        include 'conn.php';

       $q = "select * from student";

       $query = mysqli_query($con,$q);
       $x = 0;
       while($res = mysqli_fetch_array($query)){
       $x = $x + 1;
       ?>


<tr  class = "text-center">
      <td> <?php echo $x ?> </td>
      <td> <?php echo $res['rollno']; ?> </td>
      <td> <?php echo $res['fname']." ".$res['lname']; ?> </td>
      <td> <button class = "btn btn-success"> <a href="view.php?id=<?php echo $res['id']; ?> "class = "text-white"> View </a> </button> </td>
      <td> <button class = "btn btn-danger"> <a href="delete.php?id=<?php echo $res['id']; ?> "class = "text-white"> Delete </a> </button> </td>
      <td><button class = "btn btn-primary" name = "update"> <a href="update.php?id=<?php echo $res['id']; ?> " class = "text-white"> Update </a> </button> </td>
</tr>

       <?php
       }
       ?>
</table>
         
</div>
</div>
  
</body>
</html>

