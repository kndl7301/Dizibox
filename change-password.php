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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  style="background-image: url(pictures/netflıxbackground.jpg);">

<div class="container">
	<br>
	
<form method="POST" action=""><br><br>


	<input type="password" name="password" class="şifre" placeholder="New password"><br><br>
	

	
	<input class="change" type="submit" name="change" value="change password"><br><br>
   <button class="btn btn-danger" style="background-color:red;"> <a href="film.php" style="text-decoration:none; color:white;">homepage</button></a>

	</form>


</div>
</body>
</html>

<?php


 if (isset($_POST['change'])) {

  if (!empty( $_POST['password'])) {
     	
  
 $sql = "update film SET password='".$_POST['password']."' WHERE email='".$_SESSION['email']."'";
  $sonuc=mysqli_query($baglan,$sql);
echo "<h1> password has been successfully changed.</h1>";

 }
}

	?>

<style type="text/css">
	
		.container{
			background: linear-gradient(rgb(12, 12, 12),rgba(5, 5, 5, 0.911)); 
	text-align: center;
    width: 450px; 
    height: 250px;
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

		
		.change{
			background-color: green;
			width: 300px;
			height: 40px;
			border-radius: 7px;
			font-family: sans-serif;
			font-size: 25px;
			color: white;
		}

</style>