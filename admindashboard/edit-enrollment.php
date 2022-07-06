	<?php
    require_once('logics/dbconnection.php');
     $querystudents = mysqli_query($conn,"SELECT * FROM enrollments WHERE no='".$_GET['id']."'   ")
     while($fetchStudent = mysqli_fetch_array($querystudents))
     {
        $fullname = $fetchStudent['fullname'];
     }
    ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php  include('includes/header.php') ?>
	
</head>
    <!-- All our code. write here   -->
     <?php include('includes/navbar.php');?>
	 
     <?php include('includes/sidebar.php'); ?>
 
     <div class="main-content">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-white">
                            <h4>Edit student<?php echo $fullname?></h4>
                        </div>
                    </div>
                </div>
                 </div>
             </div>
         </div>
     </div>
 <?php require_once('includes/scripts.php')?>