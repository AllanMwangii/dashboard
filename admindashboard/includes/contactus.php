<?php 
 require_once('logics/dbconnection.php');
  

   $sqli=mysqli_query($conn, "SELECT * FROM contact_us");

   
   ?>
   <!DOCTYPE html>

<html>
<head>
	<title>Messages</title>
	<?php  include('includes/header.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
	 <?php include('includes/navbar.php');?>
	 
	 <?php include('includes/sidebar.php'); ?>

	<div class="main-content">
		<div class="container-fluid">
		  <div class="card">
            <div class="card-body">
               <table class="table table-hover table-striped table-responsive" style="font-size:16px">
                  <thead>
					          <div class="card-header bg-dark text-white ">
					            <div class="row ">
                          <a href="index.php">
                              <button type="button" class="btn btn-dark ">
                                 <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
                                
                              </button>
                          </a>
                          <h4 class="text-center col-9 ">Messages</h4>
                          
                      </div>
					          </div>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Firstname</th>
                      <th scope="col">Lastname</th>
                      <th scope="col">Email </th>
			            		<th scope="col">Phonenumber</th>
			            		<th scope="col-span">Message</th>
                      <th scope="col">Delete message</th>                      
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($fetch=mysqli_fetch_array($sqli)) { ?>
					        	<tr>
                    <th scope="row"><?php  echo $fetch['id'] ?></th>
                    <td><?php  echo $fetch['firstname'] ?></td>
                    <td><?php  echo $fetch['lastname'] ?></td>
					          <td><?php  echo $fetch['email'] ?></td>
					          <td><?php  echo $fetch['phonenumber'] ?></td>
					          <td><?php  echo $fetch['message'] ?> </td>
				        
					          <td>
                    <a href="edit-message.php?id=<?php  echo $fetch['id'] ?> " class="btn btn-danger btn-sm">
					                  <i class="fa fa-edit"></i>    
						          </a>					        	 
                      <a href="view-messages.php?id=<?php  echo $fetch['id'] ?> " class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
						         </a>		
                     <a href="delete-message.php?id=<?php  echo $fetch['id'] ?> " class="btn btn-danger btn-sm">                        
                        <i class="fa fa-trash">  </i> 
					        	  </a>				
						         
					                  </td>
                            </tr>
					                 <?php   }     ?>
                          </tbody>
                       </table> 
                    </div>
                  </div>
		    </div>
	   </div>
	<div><script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script></div>
</body>
</html>