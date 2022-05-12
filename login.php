

<?php 

session_start();
$baglan = mysqli_connect("localhost","root","","kayit") or  die("connection failed:".connection_error());


?>
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login	</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  style="background-image: url(pictures/netflıxbackground.jpg);">

<div class="container " id="login">
	<br>
	<h2> Sign ln</h2>
<form method="POST" action=""><br><br>
	<input type="search" id="email" name="email" class="email form-control" placeholder="@email" ><br><br>
	<input type="password" id="password" name="password" class="şifre" placeholder="password"><br><br>
	

	<input class="login" id="lgn" type="submit" name="login" value="login"><br><br>
	<input class="sign" id="sgn" type="submit" name="sign" value="sign"><br><br>

	</form>


	<i class="fa fa-facebook" style="font-size: 55px; "></i>


<a href="https://www.facebook.com/" style="text-decoration: none;color: white;"><h3> login with facebook</h3></a>
</div>
</body>
</html>




<!-- Registiratiton part-->

<?php








if(isset($_POST['email']) && isset($_POST['password'])) {

	$email = $_POST['email'];

	$password = $_POST['password'];
	

}





 if(isset($_POST['sign'])){
	 if(empty($email) && empty($password)){
	
	header("location:login.php");echo "<h1>not registered</h1>";

}else

$sql = "INSERT INTO film(email,password)  VALUES ('".$email."','".$password."')";
$sonuc=mysqli_query($baglan,$sql);



echo "<h1>your registiration have been successfully</h1>";


}


?>


<!--Login part-->
<?php

if (!isset($_POST['sign']) &&isset($_POST['email'])) {
  

$sql="SELECT * FROM film WHERE email = '$email' AND password = '$password' ";
$select=mysqli_query($baglan,$sql);
$row=mysqli_fetch_array($select);




if (is_array($row)) {
  
  $_SESSION['email']=$row['email'];
  $_SESSION['password']=$row['password'];
 
if (empty($email && $password)) {

  echo    "<h1>invalıd email or password</h1></div>";
  header("location:login.php");

  }else
  header("location:film.php");
  exit();
  

}else
{
      echo "<h1>invalıd email or password</h1>"
;
}


}


?>




<style type="text/css">
	
		.container{
			background: linear-gradient(rgb(12, 12, 12),rgba(5, 5, 5, 0.911)); 
	text-align: center;
    width: 450px; 
    height: 550px;
     margin-left: 35%;
      margin-top: 8%;
      color: aliceblue;
		}

		h1{
			color:white;
		}
		h2{
			font-family: sans-serif;
			font-size: 35px;
			margin-left: -180px;
			margin-top: 75px;
		}


		.email{

				width: 300px;
				border-radius: 7px;
				height: 35px;

		}
			.şifre{

				width: 300px;
				border-radius: 7px;
				height: 30px;

		}

		.login{
			background-color: green;
			width: 300px;
			height: 35px;
			border-radius: 7px;
			font-family: sans-serif;
			font-size: 25px;
			color: white;
		}
		.sign{
			background-color: red;
			width: 300px;
			height: 35px;
			border-radius: 7px;
			font-family: sans-serif;
			font-size: 25px;
			color: white;
		}

		@media (max-width:420px){

			#login{
				margin-top: 50px;
				margin-left: 50px;
				height:550px;
				width:260px;
			}
			#email{
				width:250px;
			}
			#password{
				width:250px;
			}
			
			#lgn{
				width:250px;
			}
			#sgn{
				width:250px;
			}
			h2{
				margin-left: 50px;
			}
		
		}

</style>