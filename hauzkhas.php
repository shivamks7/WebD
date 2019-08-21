<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body
{
	
	background-image:url(img/pexels-photo.jpg);
	
}


select 
{
	border-radius:4px;
	background-color:#85C1E9;
	width:20.5%;
	padding:10px 5px;
	color:white;
	margin-bottom:10px;
}

option
{
	
}




</style>
</head>

<body>
	<div class="well">
		<h1 style="color:#34495E; font-family:times new roman,sans serif; text-align:center; margin-top:40px; font-size:40px;">Welcome To Hauz Khas</h1><br>
    </div>    
		
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="GET">
	<select name="foods">
    <option value="YES">FOOD</option>
    <option value="NO">WITHOUT FOOD</option>
	</select>
	<br><br>
  
	<select name="acs">
    <option value="YES">AC</option>
    <option value="NO">NON-AC</option>
	</select>
  
	<br><br>
  
	<select name="range">
	
    <option value="1">Less than or equal to 5000</option>
    <option value="2">Between 5000 and 10000</option>
	<option value="3">Between 10000 and 15000</option>
	
	</select>
	<br><br>
 
	<input type="submit" style="background-color:#273746; color:white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); margin-left:75px; padding:5px 10px;">
</form>
		
        <?php
        $server="localhost";
        $username="root";
        $password="";
        $db="pg";
        $conn=mysqli_connect($server,$username,$password,$db);
        
        $acs = 	isset($_GET['acs']) ? $_GET['acs'] : '';
		$range = isset($_GET['range']) ? $_GET['range'] : '';
		$foods = isset($_GET['foods']) ? $_GET['foods'] : '';
		

        $sql='select * from pg where locality="Hauz Khas"';
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $count=0;
			while($row=mysqli_fetch_assoc($result))
            {
				if($acs==$row["airconditioned"]  && $foods==$row["food"] && $range==1 && $row["rent"] <= 5000)
				{
			
				$t=$row["pgname"];
                $r=$row["rent"];
				$pgno = $row["pgno"];
				
				echo"<a href='details.php?pgno=$pgno' style='color:black;'><h2 style='margin-left:500px; color:white; margin-top:20px; font-family:Imapact garamond;'>$t</a> $r </h2>";
				$count++;
				}
				if($acs==$row["airconditioned"]  && $foods==$row["food"] && $range==2 && $row["rent"] > 5000 && $row["rent"] <= 10000)
				{
			
				$t=$row["pgname"];
                $r=$row["rent"];
				$pgno = $row["pgno"];
				
				echo"<a href='details.php?pgno=$pgno' style='color:black;'><h2 style='margin-left:500px; color:white; margin-top:20px; font-family:Imapact garamond;'>$t</a> $r </h2>";
				$count++;
				}
				
				if($acs==$row["airconditioned"]  && $foods==$row["food"] && $range==3 && $row["rent"] > 10000 && $row["rent"] <= 15000)
				{
			
				$t=$row["pgname"];
                $r=$row["rent"];
				$pgno = $row["pgno"];
				
				echo"<a href='details.php?pgno=$pgno' style='color:black;'><h2 style='margin-left:500px; color:white; margin-top:20px; font-family:Imapact garamond;'>$t</a> $r </h2>";
				$count++;
				}
				

				
				
			}
			if($count==0)
				{
					echo " <h2 style='margin-left:500px; color:white; margin-top:-90px; font-family:Imapact garamond;' >NO PG FOUND</h2>";
				}
			
        }
		
        

?>
	
	
    </body>
</html>