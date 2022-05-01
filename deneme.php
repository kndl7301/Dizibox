

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
<body  style="background-image: url(netflıxbackground.jpg);">

<div class="container">
	<br>
	<h2> Sign ln</h2>
<form method="POST" action=""><br><br>
	<input type="search" name="email" class="email form-control" placeholder="@email"><br><br>
	<input type="password" name="password" class="şifre" placeholder="password"><br><br>
	

<button class="login">login</button><br><br>
	<button class="sign" name="buton" >sign in</button><br><br></form>


	<i class="fa fa-facebook" style="font-size: 55px; "></i>


<a href="https://www.facebook.com/" style="text-decoration: none;color: white;"><h3> login with facebook</h3></a>
</div>
</body>
</html>




<?php

$email = $_POST['email'];

$password = $_POST['password'];

if(isset($_POST['buton'])){

$sql = "insert into film(email,password)values('".$_POST['email']."','".$_POST['password']."')";
  $sonuc=mysqli_query($baglan,$sql);





}


?>






<?php

if (isset($_POST['email'])) {
  
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM film WHERE email = '$email' AND password = '$password' ";
$select=mysqli_query($baglan,$sql);
$row=mysqli_fetch_array($select);




if (is_array($row)) {
  
  $_SESSION['email']=$row['email'];
  $_SESSION['password']=$row['password'];
  echo "asdasd";
if (empty($email && $password)) {

  echo    "<div class=\"container\"><h1>lütfen bir kullanıcı ad ve şifre giriniz</h1></div>";

  }else
  header("location:film.html");
  exit();
  

}else
{
      echo "<div class=\"container\"><h1>geçersiz kullanıcı adı yada şifre</h1></div>"
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

</style>