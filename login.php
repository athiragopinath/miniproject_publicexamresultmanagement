<?php
include 'db.php';

if(isset($_POST['submit']))
{
$a=$_POST["username"];
$b=$_POST["password"];

$sql="SELECT * FROM `r_userlogin`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$us_id=$row['log_id'];
	?>

	<?php
	if($a==  $row['username']&&$b==$row['password'])
	{
$_SESSION['username']= $a;
			if($a==  $row['username']&&$b==$row['password']&&$row['role_id']=='3')
	{
$_SESSION['username']= $a;
$_SESSION['log_id']=$us_id;


		 header('location:studenthome.php');
		 $sql1="UPDATE `r_userlogin` SET `status`='1' WHERE `log_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	if($a==  $row['username']&&$b==$row['password']&&$row['role_id']=='1')
	{
  $_SESSION['userid']=$us_id;
		 header('location:adminhome.php');
		 $sql1="UPDATE `r_userlogin` SET `status`='1' WHERE `log_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}
  /* if($a==  $row['email']&&$b==$row['pass']&&$row['us_id']=='1')
	{

		$_SESSION['us_id']=$login_id;
		 header('location:admin.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	} */

	}
	else{
            
            echo"<script>alert('Invalid Username or Password!');</script>";

//		echo 'alert("Invalid Username or Password!")';
//          		header('location:login.php');
	}
	?>



	<?php
}
}
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
					        <li><a class="menu" href="#contact">Contact us</a></li>
					        <li><a class="menu" href="#contact"> Register</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

			
			

        <section class="slider" id="home" align="center">
				<div class="container-fluid">
					<div class="row">
                                            <div class="span12" >
                                                 <div class="col-md-4">
					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
<!--					         Wrapper for slides -->
					        <div class="" role="listbox">
					            <center><h4 class="title"><span class="text"><strong>Login</strong></span></h4></center>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/"><div class="span5"></div>
							<fieldset>
								<div class="control-group">
                                                                    <label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Password</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									</div>
								</div></fieldset>
                                                        <center><div class="control-group">
                                                                    <input tabindex="3" class="btn btn-inverse large" type="submit" id="submit" name="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
                                                            </div></center>
							
						</form>	

					        </div><!--

<!--					         Controls -->
<!--					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
					            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					            <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
					            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					            <span class="sr-only">Next</span>
					        </a>-->
					    </div>
                                            </div>
					</div>
				</div>
			</section><!-- end of slider section -->
                        
                        
                        
                        
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
