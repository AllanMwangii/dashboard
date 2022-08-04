<?php
include("server.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register now</title>
</head>
<body>
     <!-- begin navigation bar-->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow p ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">

                <div class="navbar-nav">
                    <a href="index.php" class="nav-link ">Home</a>
                    <a href="about.php" class="nav-link">About us</a>
                    <a href="register.php" class="nav-link active btn btn-primary ">Register now</a>
                </div>

            </div>
        </div>
     </nav> -->
    <!--End navigation bar -->
    <main class="p-5 mb-4 bg-success rounded-8 mt-4  ">
        <h1 class="fw-bold text-center">
            JULY SOFTWARE ENGINEERING BOOTCAMP     
        </h1>
     <div class="container  ">    
        <div class="row row-cols-auto p-3 ms-5 ps-5">
           <div class="col ">
               <i class="fa fa-calendar fa-3x"></i> 
           </div>
           <div class="col align-self-center fw-normal fs-5">
             <span>20th July 2022</span>
           </div>
           
        </div>
        <div class="row row-cols-auto p-3 ms-5 ps-5">
            <div class="col ">
                <i class="fa fa-map-marker fa-4x"></i> 
            </div>
            <div class="col align-self-center fw-normal fs-5">
              <span>Zalego Academy,<br>Devan plaza</span>
            </div>
            </div>
         </div>
     </div>   
    </main>
    <div class=container>
        <p class="text-center fs-4">Looking for a place to kickstart your career in Technology?
            Whether youre a local.new in town or just cruising through we've got
            lods of great tips and events for you.
            <form action="register.php" method="POST">
                    <?php if($output){
                        include('output.php');
                    }?>
        </p>
<div class="card">
    <div class="card-body">
    <h1 class="text-center">Sign up today ?</h1>
</div>
    </div>
    <form action="register.php" method="POST">
    <div class="container">
    <div class="row pt-5 ">
                <div class="mb-3 col-lg-6">
                    <label for="fullname" class="FormLabel"><b>Full Name</b></label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full-Name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="+2547..." class="FormLabel"><b>Phone Number</b></label>
                    <input type="text" name="phonenumber"class="form-control" placeholder="+2547...">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="emailaddress" class="FormLabel"><b>Email Address:</b></label>
                    <input type="text"name="email" class="form-control" placeholder="Enter Your Email Address">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="gender" class="FormLabel" class="form-control"><b>What's your gender?</b></label>
                 <div> 
               <select name="gender" required> 
               <option value= ""  >--select your gender</option>
               <option value="male">Male</option>
                 <option value="female">Female</option>
                 <option value="other">Other</option>
            </select>
               </div> 
            </div>
            </div>

            <div>
                <p class="text-center fs-5">In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
            </div>
            <div class="mb-3 col-lg-6">
                    <label for="phonenumber" class="FormLabel" class="form-control"><b>What's your preferred course?</b></label>
                    <select name="course">
                    <option selected aria-label="Disabled select example" disabled>--select your course--</option>
                        <option value="web design & development">Web design & development</option>
                        <option value="cyber security">Cyber security</option>
                        <option value="android application development">Android application development</option>
                        <option value="data analysis">Data analysis</option>
                        <option value="software design & development">software design & development</option>
                        <option value="python">Python</option>
                    </select>
                </div>

            </div>
            <div>
                <p class="text-center fs-5">
                    You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms & condition and the Privacy Policy statements.
                </p>
            </div>
            <div>
            <label for="agree terms and condition" class="radio-inline"><input type="radio" name="gender" id="agree terms and conditions"><b>Agree terms and condition</b></input></label>
            </div>
            <div class="pt-5">
            <button type="submit" name="submitbutton" class="btn btn-primary">Submit application</button>
        </div>
    </div>
</div></form>

  <hr>
  <footer class="pb-5">
  <form action="about.php" method="POST">
  <div class="row d-flex justify-content-center pb-3 mx-auto">
                  <p class="fw-lighter fs-5 text-center">Subscribe to get information, latest news about <br>Zalego Academy</p>
                  <div class=" col-lg-4 justify-content-center pl-5 ml-5 align-items-center ">
                      <label for="email" class="form-label ">E-mail</label>
                      <input type="email" class="form-control " name="email"placeholder="Enter your e-mail address please">     
                  </div>
                  <div class=" mt-4 p-2 col-lg-3 pb-5">
                      <button name="subscribe" class="btn btn-primary">Subscribe</button>  
                  </div>   
                    </div></form>
   </footer>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
</body>
</html>