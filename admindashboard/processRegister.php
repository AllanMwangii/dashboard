<?php
 
   require_once('connection.php');

   if(isset($_POST['signUp']))
   {
       //all code here 
        $username = $_POST["username"] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'];
        $cpass = $_POST['cpassword'] ;

        $passHash=md5($password);

        //check if username exist in the database
        $sqlUsername= mysqli_query($conn, "SELECT * FROM account WHERE username='$username'");
        $checkUsername=mysqli_num_rows($sqlUsername);
        //check for email
        $sqlEmail= mysqli_query($conn, "SELECT * FROM account WHERE email ='$email'") ;
        $checkEmail=mysqli_num_rows($sqlEmail);


        if($checkUsername !=0){
            $msg="Username already exist";
        }
        elseif($checkEmail !=0){
            $msg= "Email already in use.Please try a different email address";
        }
        //password confirmation
        elseif($password !=$cpass){
            $msg ="Passwords do not match";
        }
            //create insert query
            $sql =mysqli_query($conn, "INSERT INTO account(username,email,password)
            VALUES('$username','$email','$passHash')");

            if($sql)
            {
                $msg="Data submitted successfully";
            }
            else
            {
                $msg="Error";
            }

   }




?>