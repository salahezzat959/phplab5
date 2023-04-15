<?php
  
$conn = mysqli_connect("localhost", "root", "", "users");
if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}
if (isset($_POST['submit'])){
$name =$_POST['username'];
$pass = $_POST['password'];
$sql = "INSERT INTO loginn (namee, pass) VALUES ('$name', '$pass')";
$retval=mysqli_query($conn, $sql);
mysqli_close($conn);
setcookie("name",$name );
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        <style>
* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans",
     "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
}
body {
  	background-color: #435165;
  	margin: 0;
}
.register {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.register h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.register form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.register form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
 	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.register form input[type="password"], .register form input[type="text"],
 .register form input[type="email"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.register form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
  	margin-top: 20px;
  	background-color: #3274d6;
 	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.register form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}
        </style>
	</head>
	<body>
		<div class="register">
			<h1>Log in</h1>
			<form action="" method="post" autocomplete="off">
				<label for="user">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user" placeholder="Username" id="username" required>
				<label for="pass">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="pass" placeholder="Password" id="password" required>
				<input type="submit" name = "submit2"value="Login">
			</form>
		</div>
	</body>
</html>
<?php

$conn = mysqli_connect("localhost", "root", "", "users");
if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
}
$sql = "SELECT namee, pass FROM loginn";
$result = mysqli_query($conn, $sql);
if(isset($_POST['submit2'])){
if (mysqli_num_rows($result) > 0){
while($row = $result->fetch_assoc()){
                    if( $row['namee'] == $_POST['user'] || $row['pass'] == $_POST ['pass']){
                        header( "Location: homepage.php" ); 
                        exit; 
                    }
                    else {
                        die ("incorect username or password ..... please try again ");
                    }
            }
            }
            }
                ?>

