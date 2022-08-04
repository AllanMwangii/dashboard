<?php


include('logics/dbconnection.php');

$sql=mysqli_query($conn, "SELECT * FROM enrollment");




?>
<!DOCTYPE html>

<html>
<head>
	<title>Students</title>
	<?php  include('includes/header.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
	 <?php include('includes/navbar.php');?>
	 
	 <div class="sidebar">
	 <?php include('includes/sidebar.php'); ?>
	</div>

	<div class="main-content">
		<div class="container-fluid">
		  <div class="card">
            <div class="card-body">
               <table class="table table-hover table-striped table-responsive  ">
                  <thead>
					
				  <div class="card-header bg-dark text-white ">
						
						<div class="row ">
									<a href="index.php">
										<button type="button" class="btn btn-dark ">
										   <span> <i class="fa fa-arrow-left" > <span>Go back</span> </i> </span>
										  
										</button>
									</a>
									<h4 class="text-center col-9 ">Students</h4>
									<a href="#" class="btn btn-danger btn-lg pull-right  " data-toggle="modal" data-target="#addUserForm">
										<i class="fa fa-plus-circle"></i>
									</a> 
									
								</div>
						</div>
					
				
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Full name</th>
                      <th scope="col">Phone number</th>
                      <th scope="col">Email </th>
					  <th scope="col">Course</th>
					  <th scope="col">gender</th>
					  <th scope="col">enrolled on</th>
					  <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($fetch=mysqli_fetch_array($sql)) { ?>
						<tr>
                      <th scope="row"><?php  echo $fetch['no'] ?></th>
                      <td><?php  echo $fetch['fullname'] ?></td>
                      <td><?php  echo $fetch['phonenumber'] ?></td>
					  <td><?php  echo $fetch['email'] ?></td>
					  <td><?php  echo $fetch['course'] ?></td>
					  <td><?php  echo $fetch['gender'] ?> </td>
					  <td><?php  echo $fetch['created_at'] ?> </td>
					  <td>
						<a href="edit-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
						<a href="view-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
						<a href="delete-enrollment.php?id=<?php echo $fetch['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
					</td>
                    </tr>
					<?php   }     ?>
                  </tbody>
               </table> 






            </div>
          </div>
			
		</div>
	</div>
	<div class="modal fade"id="addUserForm" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" >
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="ModalLabel">Register now</h4>
					<button type="button" class="close" data-dismiss="modal" aria-Label="close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">
                   <h3>Modal body</h3>
				   <form action="add-students.php" method="POST" class="row g-3 needs-validation "   novalidate>
                        
                         <div class="col-md-12 pb-3 ">
                            <?php if( $output) 
                              {
                               include("output.php");
                              }
                                   ?>
                          </div>
                      
                         <div class="col-md-5 mx-auto">
                             <label for="name" class="form-label fw-semibold" style="font-size:16px">Full name</label> 
                             <input type="text" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded "name="fullname" id="name" placeholder="Enter your full name" required>
                          
                           
                         </div>
                         <div class="col-md-5 mx-auto">
                             <label for="phone" class="form-label fw-semibold "style="font-size:16px">Phone Number</label>
                             <input type="tel" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="phonenumber" id="Phone" placeholder="+2547........." required>
                           
                         </div>
                         <div class="col-md-5 mx-auto">
                             <label for="email" class="form-label fw-semibold " style="font-size:16px">E-mail</label>
                             <input type="email" class="form-control form-control-lg shadow-sm p-3 mb-5 bg-body rounded " name="email" id="name" placeholder="Please enter your email" required>
                             
                             
                         </div>
                         <div class="col-md-5 mx-auto">
                         <label for="gender" class="form-label  fw-semibold "style="font-size:16px">What's your gender?</label>
                                  
                                  <select  name="gender" class="custom-select custom-select-lg shadow-sm " >
                                    <option selected>--Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                  </select>
                        
                         </div>
                         
                         <div class="col-md-7 pt-2 ms-5">
                         <label for="courses"class="form-label fw-semibold "style="font-size:16px" >what's your prefered course</label>
                                     <select name="course" class="custom-select custom-select-lg shadow-sm" >
                                         <option selected>--Select your course--</option>                        
                                         <option value="Web design & development">Web design & development</option>
                                         <option value="Cyber security">Cyber security</option>
                                         <option value="Android application development-Kotlin">Android application development-Kotlin</option>
                                         <option value="Data annotation">Data annotation</option>
                                         <option value="Data analysis">Data analysis </option>
                                         <option value="Software design & development">Software design & development</option>
                                         <option value="Data analysis with python">Data analysis with python</option>
                                     </select>
                             
         
                         </div>
                         
                         </div>
                         <div class="col-12">
                             <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                               <label class="form-check-label fw-semibold" for="invalidCheck">
                                 Agree to terms and conditions
                               </label>
                               <div class="invalid-feedback">
                                 You must agree before submitting.
                               </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <button class="btn btn-primary" name="submit" type="submit">Submit application</button>
                              </div>
         
                     </form>
                
              
              
       	
				</div>
				<div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-dark btn-sm" >Save changes</button>
				</div>
			</div>
		</div>
	</div>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>