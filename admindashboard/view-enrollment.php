<?php
//1.database connection
require_once('logics/dbconnection.php');
$sqlFetchEnrolledStudent =mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchStudent=mysqli_fetch_array($sqlFetchEnrolledStudent))
{
    $fullname =$fetchStudent['fullname'];
    $email =$fetchStudent['email'];
    $phonenumber =$fetchStudent['phonenumber'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course'];
    $created_at=$fetchStudent['created_at'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit student details</title>
    <?php  require_once('includes/header.php') ?>
</head>
<body>
     <!-- All our code. write here   -->
     <?php require_once('includes/navbar.php');?>
	 
     <?php require_once('includes/sidebar.php'); ?>
 
     <div class="main-content">
         <div class="container-fluid">
            <div class="row">
                <div class="card col-lg-12 ">
                    <div class="card-header bg-dark text-white text-center"><h4 class="card-title">Personal Information</h4></div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: <span class="float-right badge badge-primary"><?php echo $fullname?></span></li>
                                <li class="list-group-item">Email: <span class="float-right badge badge-secondary"><?php echo $email?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-right badge badge-danger"><?php echo $phonenumber?></span></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-lg-12 ">
                    <div class="card-header bg-dark text-white text-center"><h4 class="card-title">Other Information</h4></div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender: <span class="float-right badge badge-primary"><?php echo $gender?></span></li>
                                <li class="list-group-item">Course: <span class="float-right badge badge-secondary"><?php echo $course?></span></li>
                                <li class="list-group-item">Course: <span class="float-right badge badge-danger"><?php echo $created_at?></span></li>
                            </ul>
                        </div>
                </div>
            </div>
            </div>
        </div>


<?php require_once('includes/scripts.php') ?>
</body>
</html>