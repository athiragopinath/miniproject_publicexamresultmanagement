<?php
include 'db.php';


//school registration
if(isset($_POST['submit1s']))
{
    $schnames=$_POST["names"];
    $subdists=$_POST["subdist"];
    $dists=$_POST["dist"];
    $passwords=$_POST["passwords"];
    $ps = $_POST["password1s"];
    $es=$_POST["emails"];
    $mobnums=$_POST["mobile_numbers"];
    

if ($ps == $passwords) {
    $sql1="INSERT INTO `r_userlogin`(`role_id`, `status`, `username`, `password`) VALUES (2,1,'$schnames','$ps')";
    $result1=mysqli_query($con,$sql1);

    $logid="SELECT `log_id` FROM `r_userlogin` WHERE `username`='$schnames'";
    $result2=mysqli_query($con,$logid);
    while($row=mysqli_fetch_array($result2))
    {

        $l=$row["log_id"];
        //$sql2=INSERT INTO `r_school`(`log_id`, `name`, `dist`, `subdist`, `email`, `phno`, `status`) VALUES ('$l','$schnames',' $dists','$subdists','$es','$mobnums','1')";
        $sql2="INSERT INTO `r_school`(`log_id`, `name`, `dist`, `subdist`, `email`, `phno`, `status`) VALUES ('$l','$schnames','$dists','$subdists','$es','$mobnums','1')";
        $res = mysqli_query($con, $sql2);
//        or die(mysqli_error($con))
    }
}
}


//login
if(isset($_POST['login']))
{
    header("location:login.php");
}    

//student registration
if(isset($_POST['submit1']))
{
$a=$_POST["name"];
$rno=$_POST["rollno"];
$dob=$_POST["dob"];
$password=$_POST["password"];
$p = $_POST["password1"];
$e=$_POST["email"];
$mobnum=$_POST["mobile_number"];
$j=$_POST["place_select"];


 
 if ($p == $password) {
$sql1="INSERT INTO `r_userlogin`(`username`, `password`,`role_id`,`status`) VALUES ('$rno','$p','3',1)";
$result1=mysqli_query($con,$sql1);

$logid="SELECT `log_id` FROM `r_userlogin` WHERE `username`='$rno'";
$result2=mysqli_query($con,$logid);
while($row=mysqli_fetch_array($result2))
{

  $l=$row["log_id"];
  $sql2="INSERT INTO `r_student`(`roll_no`, `log_id`, `name`, `phno`, `email_id`, `sent_status`, `status`) VALUES ('$rno',$l,'$a','$mobnum','$e',0,1)";
        
        $res = mysqli_query($con, $sql2);
//        or die(mysqli_error($con))
}

//$sql="INSERT INTO `seller`(NULL,`first_name`, `last_name`, `store_name`, `mobile_number`, `email`, NULL, `gst_no`, `username`, `password`,1) VALUES ('$a','$b','$c','$d','$e','$f','$j','$k','$l')";
//$result3=mysqli_query($con,$sql);

//echo"<script>alert('Registration Successful Please Login');</script>)";
if($res==1)
{
	echo"<script>alert('Registration Successful Please Login');</script>";
}
else
{
	echo"<script>alert('Sorry email or username is already in use..Please choose a different one..! ');</script>)";
}

}else {

        echo '<script language="javascript">';
        echo 'alert("Your password does not match")';
        echo '</script>';
}}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ASTHRA</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo1.png" alt="" height="150" width="150" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" >Home</a></li>
					        <li><a class="menu" href="#about">about us</a></li>
					        <!--<li><a class="menu" href="#service">our services </a></li>-->
					        <li><a class="menu" href="#contact">School registration</a></li>
					        <li><a class="menu" href="#contact"> Student registration</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

			
			

			<section class="slider" id="home">
				<div class="container-fluid">
					<div class="row">

					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
					        <!-- Wrapper for slides -->
					        <div class="carousel-inner" role="listbox">
					            <div class="item active">
					            	<img src="img/slide-one.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Results</h1>
				               			<p>RESULTS AT YOUR FINGER TIPS</p>
                                                                <form action="login.php" method="POST">
                                                                    <button type="submit">LOGIN</button>
<!-                                                             </form>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/slide-two.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Rank Lists</h1>
				               			<p>RESULTS AT YOUR FINGER TIPS</p>
				               			<form action="login.php" method="POST">
                                                                    <button type="submit">LOGIN</button>
<!-                                                             </form>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/slide-three.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Result Reports</h1>
				               			<p>RESULTS AT YOUR FINGER TIPS</p>
				               			<form action="login.php" method="POST">
                                                                    <button type="submit">LOGIN</button>
<!-                                                             </form>
					                </div>
					            </div>
					            <div class="item">
					            	<img src="img/slide-four.jpg" alt="">
					                <div class="carousel-caption">
				               			<h1>Result Notifications</h1>
				               			<p>RESULTS AT YOUR FINGER TIPS</p>
				               			<form action="login.php" method="POST">
                                                                    <button type="submit">LOGIN</button>
                                                                 </form>
					                </div>
					            </div>
					        </div>

<!--					         Controls -->
					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
					            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					            <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
					            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					            <span class="sr-only">Next</span>
					        </a>
					    </div>

					</div>
				</div>
			</section><!-- end of slider section 


			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>about us</h2>
						<h4>ASTHRA is committed to providing results of students who have attended the board exams.Based on the results the you can have the rank list also.ASTHRA also helps you to have a detailed study of the results.</h4>
						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail clearfix">
								<div class="about-img">
									<img src="img/about1.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>I</h1>
									</div>

									<h3>Individual Results</h3>
									<p>Provides the individual results of a Registered user.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="img/about2.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>R</h1>
									</div>

									<h3>Result Reports</h3>
									<p>Provides detailed reports based on the results.</p>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6">
							<div class="single-about-detail">
								<div class="about-img">
									<img class="img-responsive" src="img/about3.jpg" alt="">
								</div>

								<div class="about-details">
									<div class="pentagon-text">
										<h1>N</h1>
									</div>

									<h3>Notifications</h3>
									<p>Now Results are available immediatley at your finger tips.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section><!-- end of about section -->


			

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<!--<div class="col-md-5 contact-heading text-left">
									<h2>Contact us</h2>
								</div>
								<div class="col-md-6 contact-heading text-right">
									<h2>Registration</h2>
								</div>
-->
								<div class="col-md-5 contact-info text-left contact-form">
									<h3>Register your school to Asthra</h3>

                                                                        <form class="form" method="POST" id="form">
                                                                            <input class="name" id="names" name="names" type="text" placeholder="Name of School">
										<input class="name" id="subdist" name="subdist" type="text" placeholder="Subdistrict">
                                                                                <input class="name" id="dist" name="dist" type="text" placeholder="district">
                                                                                <input class="password" id="passwords" name="passwords" type="password" placeholder="Password">
                                                                                <input class="password" id="password1s" name="password1s" type="password" placeholder="Confirm Password">
                                                                                <input class="email" id="emails" name="emails" type="email" placeholder="Email">
                                                                                <input class="phone" id="mobile_numbers" name="mobile_numbers" type="text" placeholder="Phone No:">
										<!--<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>-->
                                                                                <input class="submit-btn" name="submit1s" id="submit1s" type="submit" value="SUBMIT">
									</form>
								</div>


								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>Register yourself to get result notifications</h3>

                                                                        <form class="form" method="POST" id="form">
                                                                            <input class="name" id="name" name="name" type="text" placeholder="Name">
										<input class="name" id="rollno" name="rollno" type="text" placeholder="Roll Number">
                                                                                <input class="name" id="dob" name="dob" type="date" placeholder="Date of birth">
                                                                                <input class="password" id="password" name="password" type="password" placeholder="Password">
                                                                                <input class="password" id="password1" name="password1" type="password" placeholder="Confirm Password">
                                                                                <input class="email" id="email" name="email" type="email" placeholder="Email">
                                                                                <input class="phone" id="mobile_number" name="mobile_number" type="text" placeholder="Phone No:">
										<!--<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>-->
                                                                                <input class="submit-btn" name="submit1" id="submit1" type="submit" value="SUBMIT">
									</form>
								</div>

							</div>
					</div>
				</div>
			</section><!-- end of contact section -->



			<!-- footer starts here -->
			<footer class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p>Template By <a href="http://wptechnews.com/">WpTechnews</a>&copy;All right reserved</p>
						</div>

						<div class="col-xs-6 text-right">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-skype"></i></a>
						</div>
					</div>
				</div>
			</footer>



	

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>