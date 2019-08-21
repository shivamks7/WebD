<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="well" style=" background-color:#43453d;">
		<h1 style="text-align:center; font-family:times new roman,sans serif; font-size:50px; font-weight:bold;color:white;">PG DETAILS</h1><br>
	</div>
  
  
   <?php
        $server="localhost";
        $username="root";
        $password="";
        $db="pg";
        $conn=mysqli_connect($server,$username,$password,$db);
        if(!$conn)
        {
            echo"connection falied"."<br>";
        }
        else
        {
            //echo"connection succesfull"."<br>";
        }
		$pgno;
        $pgn= $_GET['pgno'];
        
        if($pgn==101)
        {
            echo'<img src="pgpics\1.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
        if($pgn==102)
        {
           echo'<img src="pgpics\2.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
        if($pgn==103)
        {
          echo'<img src="pgpics\3.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    
        if($pgn==104)
        {
            echo'<img src="pgpics\4.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
        if($pgn==105)
        {
            echo'<img src="pgpics\5.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    
       if($pgn==106)
        {
            echo'<img src="pgpics\6.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==107)
        {
            echo'<img src="pgpics\7.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==108)
        {
            echo'<img src="pgpics\8.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==109)
        {
            echo'<img src="pgpics\9.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==110)
        {
            echo'<img src="pgpics\10.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    if($pgn==111)
        {
            echo'<img src="pgpics\11.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==112)
        {
            echo'<img src="pgpics\12.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==113)
        {
            echo'<img src="pgpics\13.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==114)
        {
            echo'<img src="pgpics\14.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==115)
        {
            echo'<img src="pgpics\15.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==116)
        {
            echo'<img src="pgpics\16.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==117)
        {
            echo'<img src="pgpics\17.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==118)
        {
            echo'<img src="pgpics\18.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==119)
        {
            echo'<img src="pgpics\19.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==120)
        {
            echo'<img src="pgpics\20.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==121)
        {
            echo'<img src="pgpics\21.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==122)
        {
            echo'<img src="pgpics\22.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==123)
        {
            echo'<img src="pgpics\23.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==124)
        {
            echo'<img src="pgpics\24.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==125)
        {
            echo'<img src="pgpics\25.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==126)
        {
            echo'<img src="pgpics\26.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==127)
        {
            echo'<img src="pgpics\27.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==128)
        {
            echo'<img src="pgpics\28.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==129)
        {
            echo'<img src="pgpics\29.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==130)
        {
            echo'<img src="pgpics\30.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==131)
        {
            echo'<img src="pgpics\31.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==132)
        {
            echo'<img src="pgpics\32.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
			
           
        }
    if($pgn==133)
        {
            echo'<img src="pgpics\33.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==134)
        {
            echo'<img src="pgpics\34.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==135)
        {
            echo'<img src="pgpics\35.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==136)
        {
            echo'<img src="pgpics\36.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==137)
        {
            echo'<img src="pgpics\37.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==138)
        {
            echo'<img src="pgpics\38.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==139)
        {
            echo'<img src="pgpics\39.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==140)
        {
            echo'<img src="pgpics\40.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==141)
        {
            echo'<img src="pgpics\41.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==142)
        {
           echo'<img src="pgpics\42.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    if($pgn==143)
        {
          echo'<img src="pgpics\43.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    
    if($pgn==144)
        {
            echo'<img src="pgpics\44.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==145)
        {
            echo'<img src="pgpics\45.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    
    if($pgn==146)
        {
            echo'<img src="pgpics\46.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==147)
        {
            echo'<img src="pgpics\47.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";        
        
        }
        if($pgn==148)
        {
            echo'<img src="pgpics\48.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==149)
        {
            echo'<img src="pgpics\49.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==150)
        {
            echo'<img src="pgpics\50.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==151)
        {
            echo'<img src="pgpics\51.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==152)
        {
           echo'<img src="pgpics\52.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    if($pgn==153)
        {
          echo'<img src="pgpics\53.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    
    if($pgn==154)
        {
            echo'<img src="pgpics\54.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==155)
        {
            echo'<img src="pgpics\55.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    
    if($pgn==156)
        {
            echo'<img src="pgpics\56.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==157)
        {
            echo'<img src="pgpics\57.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==158)
        {
            echo'<img src="pgpics\58.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==159)
        {
            echo'<img src="pgpics\59.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==160)
        {
            echo'<img src="pgpics\60.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==161)
        {
            echo'<img src="pgpics\61.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==162)
        {
           echo'<img src="pgpics\62.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    if($pgn==163)
        {
          echo'<img src="pgpics\63.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";  
        }
    
    if($pgn==164)
        {
            echo'<img src="pgpics\64.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==165)
        {
            echo'<img src="pgpics\65.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    
    if($pgn==166)
        {
            echo'<img src="pgpics\66.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==167)
        {
            echo'<img src="pgpics\67.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==168)
        {
            echo'<img src="pgpics\68.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==169)
        {
            echo'<img src="pgpics\69.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    if($pgn==170)
        {
            echo'<img src="pgpics\70.jpg" align="center" class="img-thumbnail" style="margin-left:390px; width:500px; height:500px;">'."<br><br>";
           
        }
    
     
      
    $sql="select pgname,pgaddress,rent,o.ownername,owneraddress,contactno from pg p,owner o where p.pgno=o.pgno and p.pgno in ($pgn)";
    $result=mysqli_query($conn,$sql);
	
	
	
    $row=mysqli_fetch_assoc($result);
    
    $a=$row["pgname"];
    $b=$row["pgaddress"];
    $c=$row["rent"];
    $d=$row["ownername"];
    $e=$row["owneraddress"];
    $f=$row["contactno"];
    /*
    echo "<h1 align='center'>PG NAME</h1> "."<h3 align='center'>$a</h3>";
    echo "<h1 align='center'>PG's ADDRESS</h1> "."<h3 align='center'>$b</h3>";
    echo "<h1 align='center'>MONTHLY RENT</h1> "."<h3 align='center'>$c</h3>";
    echo "<h1 align='center'>OWNER</h1> "."<h3 align='center'>$d</h3>";
    echo "<h1 align='center'>OWNER's ADDRESS</h1> "."<h3 align='center'>$e</h3>";
    echo "<h1 align='center'>OWNER's CONTACT NO.</h1> "."<h3 align='center'>$f</h3>";
	*/
    
?>



<div class="container">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td style="font-weight:bold; font-family:geramond;">PG NAME</td>
				<td><?php echo $a ?></td>
			<tr>
		
			<tr>
				<td style="font-weight:bold; font-family:geramond;">MONTHLY RENT</td>
				<td><?php echo $c ?></td>
			<tr>
		
			<tr>
				<td style="font-weight:bold; font-family:geramond;">PG's ADDRESS</td>
				<td><?php echo $b ?></td>
			<tr>
		
			<tr>
				<td style="font-weight:bold; font-family:geramond;">OWNER</td>
				<td><?php echo $d ?></td>
			<tr>
		
			<tr>
				<td style="font-weight:bold; font-family:geramond;">OWNER's ADDRESS</td>
				<td><?php echo $e ?></td>
			<tr>
		
			<tr>
				<td style="font-weight:bold; font-family:geramond;">OWNER's CONTACT NO.</td>
				<td><?php echo $f ?></td>
			<tr>
    
		</tbody>
	
	</table>
</div>
    </body>
</html>