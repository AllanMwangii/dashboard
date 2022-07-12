<?php
 require_once('logics/dbconnection.php');
 $queryEnrollStudents=mysqli_query($conn, "SELECT * FROM enrollment" );
 $countAllStudents=mysqli_num_rows($queryEnrollStudents);

 //count gender
 $queryEnrollfemale=mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='Female'" );
 $countAllfemale=mysqli_num_rows($queryEnrollfemale);
?>

<!DOCTYPE html>

<html>
<head>
	<title>Home</title>
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
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right"> <span class="badge badge-dark rounded-pill"><?php echo $countAllStudents?></span></span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available courses</span>
					</div>
					<div class="card-body"><span>
						<i class="fa fa-folder-open fa-3x "></i></span>
						<span class="float-right"><span class="badge badge-dark rounded-pill"><?php echo $countAllfemale?></span></span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right"><span class="badge badge-dark rounded-pill">00</span></span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-user fa-3x "></i></span>
						<span class="float-right"><span class="badge badge-dark rounded-pill">00</span></span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-line-chart fa-3x"></i></span>
						<span class="float-right"><span class="badge badge-dark rounded-pill">00</span></span></div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
<?php include('includes/scripts.php') ?>
</body>
</html>