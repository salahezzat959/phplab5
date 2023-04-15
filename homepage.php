<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI Road-Map</title>
    <link rel="icon" href="/img/ITI_logo.png">
    <link rel="stylesheet" href="style.css">
    <style>
        .sign{
            
            background-color:red;
            color:white;
            padding:10px;
        }
    </style>
</head>

<body class="home">
    <div class="header">
        <div class="logo">
            <img src="img/ITI_logo.png" alt="logo" height="50px" width="100px">
        </div>
        <div class="nav">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="index.html">RaodMap</a></li>
                <li><a href="form.html">RegistrationForm</a></li>
                <li><a href="https://www.iti.gov.eg/iti/home" target="_blank">Contact</a></li>
            </ul>
        </div>
        
    </div>
    <div>
        <h1 style="text-align:center;"> <?php echo "Hi  " . $_COOKIE['name'] .", Welcome to our site" ?> </h1>
        </div>
    <div>
        <a href="index.html"> <img src="img/indexPage.jpg" width="100%" height="100%" alt=""></a>
    </div>
    <hr>
    
    <div class="footer">
        <button class="sign"> <a style="text-decoration: none; color:white" href="./login.php">Sign Out</a></button>
        <p>Copyright by Salah &copy;. All Rights Reserved</p>
    </div>
</body>

</html>