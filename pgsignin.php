<!DOCTYPE html>
<html>
<head>

  <title>PG</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
	
</head>

<body class="tm-gray-bg">

<div class="tm-header">
  	<div class="container">
		<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
			<a href="#" class="tm-site-name">  PG Searching Portal </a>
		</div>				
  	</div>	  	
</div>

<div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> PG</h1>
					
					<a href="#more" class="tm-banner-link">FIND NOW</a>	
</div>
				<img src="img/banner-1.jpg" alt="Image" />



<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation">
	
							<a href="pgsignup.php" aria-controls="SignUp" role="tab" data-toggle="tab">Sign Up</a>
					    </li>
					    <li role="presentation" class="active">
					    	<a href="#SignIn" aria-controls="SignIn" role="tab" data-toggle="tab">Sign In</a>
					    </li>
					</ul>
					
					
					
					
						<div role="tabpane2" class="tab-pane fade in active tm-white-bg" id="SignIn">
							<div class="tm-search-box effect2">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
											Email-Id: <input type="text" name="email" class="form-control"> <br> <br>
											Password:  <input type="password" name="password" class="form-control"> <br> <br>
											

										</div>
										<div class="form-group tm-yellow-gradient-bg text-center">
											<button type="submit" name="submit" class="tm-yellow-btn">Sign In</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
</section>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pg";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['email']))
	{ $email = $_POST['email'] ; }
 
if(isset($_POST['password']))
	{ $password = $_POST['password'] ; }

//if($email === NULL || $password === NULL)

if( isset($_POST['email']) && isset($_POST['password'])  )
{
$sql = "select	name, emailid, password from userdetails where emailid= '$email' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)>0)
	
	 {
		$name=$row["name"];
		header("Location: home page.php?name=$name");
		exit();
	 }
	else
	{
	echo "<h3><center>Incorrect Email-ID or Password</h3></center><br><br>";
	}
}

else
	{
	echo "<h2><center>Enter Email-Id and Password</center></h2>";
}


 
			
?>
</body>									

<html>