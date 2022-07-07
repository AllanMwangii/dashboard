	<?php
    require_once('logics/dbconnection.php');
     $querystudents = mysqli_query($conn,"SELECT * FROM enrollments WHERE no='".$_GET['id']."'   ");
     while($fetchStudent = mysqli_fetch_array($querystudents))
     {
        $fullname = $fetchStudent['fullname'];
        $email = $fetchStudent['email'];
        $phonenumber = $fetchStudent['phonenumber'];
        $gender = $fetchStudent['gender'];
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
                            <h4>Edit student</h4>
                        </div>  
                             <div class="card-body">
                           <div class="row">
                           <div class="mb-3 col-lg-6">
                    <label for="fullname" class="form-label"><b>Full Name</b></label>
                    <input type="text" name="fullname" class="form-control" value="<?php echo $fullname?>" placeholder="Enter Your Full-Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label"><b>email</b></label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email?>" placeholder="Enter Your Email">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phonenumber" class="form-label"><b>Phonenumber</b></label>
                    <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber?>" placeholder="+2547......">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="gender" class="form-label" class="form-control"><b>What's your gender?</b></label>
                    <select name="gender" class="form-select" value="<?php echo $gender?>" aria-label="default select example"> 
              
                 <option value="Male">Male</option>
                 <option value="female">Female</option>
            </select>
                    <div> 
            
               </div> 
           
                           </div>
                        </div>
                    </div>
                </div>
                 </div>
             </div>
         </div>
     </div>
 <?php require_once('includes/scripts.php')?>