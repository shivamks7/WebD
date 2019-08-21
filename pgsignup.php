 <!DOCTYPE html>
<html>
<head>

  
 

  
  
</head>


<body class="tm-gray-bg">


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


												$nameErr = $emailErr = $numberErr = $passerr =$cnfrmerr =$idnoerr =$ageerr="";
												$name = $email = $age = $number = $pass =$cnfrmpass=$idno= "";
												$count=0;
												if ($_SERVER["REQUEST_METHOD"] == "POST") 
												{
													if (empty($_POST["name"])) 
													{
														$nameErr = "Name is required";
														$count=$count+1;
													}
													if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
													{
														$nameErr = "Only letters and white space allowed";
														$count=$count+1;
													}
													else 
													{
														$name = $_POST["name"];
													}
													if (empty($_POST["email"])) 
													{
														$emailErr = "Email is required";
														$count=$count+1;
													}
													else
													{
														$email = $_POST["email"];
														if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
														{
															$emailErr = "Invalid email format";
															$count=$count+1;
														}
														else 
														{
															$email = $_POST["email"];
														}
													}
													
													function test_input($data) {
													  $data = trim($data);
													  $data = stripslashes($data);
													  $data = htmlspecialchars($data);
													  return $data;
													}
													
													if (empty($_POST["id"])) 
													{
														$idnoerr= "id is required";
														$count=$count+1;
													} 
													else 
													{
														$idno= $_POST["id"];
													}
													if (empty($_POST["age"]))
													{
														$ageerr = "age is required";
														$count=$count+1;
													} 
													
													
													else 
													{
														$age = $_POST["age"];
													}
													if (empty($_POST["contact"]))
													{
														$numberErr = "Contact no is required";
														$count=$count+1;
													}
													else 
													{
														$number = $_POST["contact"];
													}
													
													if (empty($_POST["password"]))
													{
														$passerr = "Password is required";
														$count=$count+1;
													}
													else 
													{
														$pass = $_POST["password"];
													}
													if (empty($_POST["cpassword"]))
													{
														$cnfrmerr = "confirmation is required";
														$count=$count+1;
													}
													else
													{
														$cnfrmpass = $_POST["cpassword"];
														{
															if($cnfrmpass!==$pass)
															{
																$cnfrmerr="passwords don't match";
																$count=$count+1;
															}
														}
													}
												}

if($count==0)
{
	/*
		$name = $_POST['name'];  
$age = $_POST['age'];
$contact = $_POST['contact'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
*/

if(isset($_POST['name']))
	{ $name = $_POST['name'] ; }
 
if(isset($_POST['age']))
	{ $age = $_POST['age'] ; }
 
if(isset($_POST['contact']))
	{ $number = $_POST['contact'] ; }
 
if(isset($_POST['id']))
	{ $idno = $_POST['id'] ; }
 
if(isset($_POST['email']))
	{ $email = $_POST['email'] ; }
 
if(isset($_POST['password']))
	{ $password = $_POST['password'] ; }
 
echo $name;
/*if($name === NULL || $age === NULL || $contact===NULL || $id === NULL || $email === NULL || $password === NULL)
{
	echo "Insert Data";
}
else*/
{
 $sql = "insert into userdetails values 
		('$name', '$age', '$number', '$idno', '$email', '$password')";
  if(mysqli_query($conn, $sql))
  {
	echo "Data inserted successfully";
  }
  else
  {
	echo "Error inserting data: " . mysqli_error($conn);
  }
echo "<br>";

}
}

mysqli_close($conn);



?> 



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
					    <li role="presentation" class="active">
	
							<a href="#SignUp" aria-controls="SignUp" role="tab" data-toggle="tab">Sign Up</a>
					    </li>
					    <li role="presentation">
					    	<a href="pgsignin.php" aria-controls="SignIn" role="tab" data-toggle="tab">Sign In</a>
					    </li>
					</ul>
					
					
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="SignUp">
					    	<div class="tm-search-box effect2">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
									
							            	Name:<input type="text" name="name" class="form-control"><?php echo $nameErr ?> <br><br>
											Age: <input type="text" name="age" class="form-control"><?php echo $ageerr ?><br><br>
											Contact No:  <input type="text" name="contact" class="form-control"><?php echo $numberErr ?> <br><br>
											ID No.:  <input type="text" name="id" class="form-control"> <?php echo $idnoerr ?><br><br>
											Email-ID:<input type="text" name="email" class="form-control"><?php echo $emailErr ?>  <br><br>
											Password: <input type="password" name="password" class="form-control" placeholder-"Password"><?php echo $passerr ?> <br><br>
											Confirm Password: <input type="password" name="cpassword" class="form-control"><?php echo $cnfrmerr ?> <br><br>
											
											

											
										</div>							
										<div class="form-group tm-yellow-gradient-bg text-center">
											<button type="submit" name="submit" class="tm-yellow-btn">Sign Up</button>
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
	
						
</body>									

<html>