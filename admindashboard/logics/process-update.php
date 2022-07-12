<?php
//updating user records
   if(isset($_POST['updateenroll']))

   {
    //fetch form data
    $fullname= $_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course']; 
    

    //perform the sqli query

    $updateenroll =mysqli_query($conn, "UPDATE enrollment SET fullname=' $fullname',phonenumber='$phonenumber',email='$email',gender=' $gender',course='$course'
    WHERE no='".$_GET['id']."'");
    if($updateenroll)
    {
        $message=" Records updated successfully";
    }
    else
    {
        $message="error occured";
    }
   }
   ?>