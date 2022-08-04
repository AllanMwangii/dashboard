<?php
$responce='';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if( isset($_POST['submitbutton']))
{
    //1. fetch form data
    $fullname =$_POST['fullname'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $phonenumber =$_POST['phonenumber'];
    $course =$_POST['course'];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
    enrollments(fullname,gender,email,phonenumber,course)
    VALUES('$fullname','$gender','$email','$phonenumber','$course')");

    if($insertData)
    {
         $output="Data Submitted Successfully";
    }
    else{
        $output="Error Occured" .mysqli_error($conn);
    }
    
}
?>