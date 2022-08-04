<?php
    $message1="";
   require_once('logics/dbconnection.php');   
   $querymessages=mysqli_query($conn,"SELECT * FROM contact_us WHERE id='".$_GET['id']."'  ");
   while($fetchmessages=mysqli_fetch_array($querymessages))
   {
    $firstname=$fetchmessages["firstname"];
    $lastname=$fetchmessages["lastname"];
    $email=$fetchmessages["email"];
    $phone=$fetchmessages["phonenumber"];
    $message=$fetchmessages["message"];
    $id=$fetchmessages["id"];

   }
   require_once('logics/update-message.php');
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white ">
                            <div class="row ">
                                <a href="student.php">
                                    <button type="button" class="btn btn-dark ">
                                       <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                      
                                    </button>
                                </a>
                                <h4 class="text-center col-9 ">Edit Message<?php echo $firstname?></h4>
                                
                            </div>
                            <div class="text-center text-success"><?php echo $message1?></div>
                        </div>
                        <div class="card-body">
                          <form action="edit-message.php?id=<?php echo $id ?>" method="POST" class="row g-3 needs-validation " name="no"  novalidate>                                    
                                           <div class="col-md-5 mx-auto">
                                               <label for="firstname" class="form-label">Firstname</label>
                                               <input type="text" name="firstname" class="form-control" placeholder="<?php echo $firstname ?>">
                                           </div>
                                           <div class="col-md-5 mx-auto">
                                               <label for="lastName" class="form-label">Last Name</label>
                                               <input type="text" name="lastName"class="form-control" placeholder="<?php echo $lastname ?>">
                                           
                                          </div>
                                        
                                           <div class="col-md-5 mx-auto">
                                               <label for="email" class="form-label">E-mail</label>
                                               <input type="email" name="email" class="form-control" placeholder="<?php echo $email ?>">
                                           </div>   
                                           <div class="col-md-5 mx-auto">
                                               <label for="phone-number" class="form-label">Phone number</label>
                                               <input type="tel"name= "phone_number"class="form-control" placeholder="<?php echo $phone ?>">
                                           </div>
                                           
                                             <div class="col-lg-12">
                                                 <label for="Message" class="form-label">Your Message</label>
                                                 <textarea  cols="30" rows="5" name="usermessage" class="form-control"><?php echo $message ?></textarea>
                                             </div>
                                           </div>
                                 <div class="pt-3" >                         
                                   <button  type="submit" name="update2" class="btn btn-primary">Send Message</button>     
                                 </div>       
           
 

       
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <?php include('includes/scripts.php') ?>
    
</body>
</html>