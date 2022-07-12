<?php
    $message="";
   require_once('logics/dbconnection.php');
   $queryStudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
   while($fetchStudent=mysqli_fetch_array($queryStudent))
   {
    $fullname= $fetchStudent['fullname'];
    $phonenumber=$fetchStudent['phonenumber'];
    $email=$fetchStudent['email'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course']; 
    $id=$fetchStudent['no'];
   }
   require_once('logics/process-update.php')
?>



<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit student details</title>
    <?php  include('includes/header.php') ?>
</head>
<body>
     <!-- All our code. write here   -->
     <?php include('includes/navbar.php');?>
	 
     <?php include('includes/sidebar.php'); ?>
 
     <div class="main-content">
         <div class="container-fluid">
            <div class="">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white ">
                            <div class=" ">
                                <a href="student.php">
            
                                </a>
                                <h4 class="text-center col-9 ">Edit student-<?php echo $fullname?></h4>
                                
                            </div>
                            <div class="text-center text-success"><?php echo $message?></div>
                        </div>
                        <div class="card-body">
                             <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST" class="" name="no"  novalidate>
                                 
                 
                                 <div class="mb-3 col-lg-6">
                                     <label for="name" class="form-label"><b>FULL NAME</b></label> 
                                     <input type="text" value="<?php echo $fullname?> " class="form-control "name="fullname" id="name"  required>
                                 </div>
                                 <div class="mb-3 col-lg-6">
                                     <label for="phone" class="form-label"><b>PHONE NUMBER</b></label>
                                     <input type="tel"  value="<?php echo $phonenumber?>"class="form-control " name="phonenumber" id="Phone" placeholder="+2547......" required>
                                 </div>
                                 <div class="mb-3 col-lg-6">
                                     <label for="email" class="form-label"><b>EMAIL</b></label>
                                     <input type="email" value="<?php echo $email?>" class="form-control" name="email" id="name" placeholder="Please enter your email" required>
                                  
                                 </div>
                                 <div class="mb-3 col-lg-6">
                                     <label for="gender" class="form-label"><b>GENDER</b></label>
                                  
                                     <select  name="gender" class="custom-select custom-select-lg shadow-sm " >
                                       <option selected><?php echo $gender?></option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Other">Other</option>
                                     </select>
                                
                                 <div class="mb-3 col-lg-6">
                                     <label for="courses"class="form-label" ><b>COURSE</b></label>
                                     <select name="course" class="custom-select custom-select-lg shadow-sm" >
                                         <option selected><?php echo $course?></option>                        
                                         <option value="web design & development">Web design & development</option>
                                         <option value="cyber security">Cyber security</option>
                                         <option value="android application development">Android application development</option>
                                         <option value="data analysis">Data analysis</option>
                                         <option value="software design & development">software design & development</option>
                                         <option value="python">Python</option>
                                     </select>
                                  
                 
                                 </div>
                              
                                 <br>
                                 <br>
                                 <div class="mb-3 col-lg-6">
                                     <button class="btn btn-primary" name="updateenroll" type="submit">UPDATE RECORDS</button>
                                 </div>
                 
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('includes/scripts.php') ?>
</body>
</html>