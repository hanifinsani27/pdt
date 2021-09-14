<?php
$db_connection = mysqli_connect("127.0.0.1", "root","", "WeMet");
session_start();
if(empty($_SESSION['username'])){
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - WeMet</title>
    <style>
.parallax {
  /* The image used */
  background-image: url("res/img/DaftarMentor.jpg");

  /* Set a specific height */
  min-height: 200px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="res/css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <a href="index.php" class="nav-brand ml-3 mr-3">
            <img src="res/img/logo.jpeg" width="100" height="57" class="d-inline-block align-top" alt=""> </a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href = "daftarmentoring.php"  style="margin-Left:20px">Daftar Mentoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hasil.php" style="margin-Left:40px">Hasil Mentoring</a>
                </li> 
                                <li class="nav-item">
                    <a class="nav-link active"  href = "card.html"style="margin-Left:60px">Chat</a>
                </li>   
            </ul> 

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" style="margin-Right:50px" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons" style="font-size:30px">account_circle</i> <?php echo $_SESSION['username']?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>        
            </ul>
        </nav>
    </header>
    <div class="parallax"></div>
    <div class="mt-3 ml-4 mb-1" style="max-width: 60%">
        <h1>Mentoring Yang Terdaftar</h1>
    </div>

    <div class="mb-5">


<img src="res/img/pas.png" style="display:block; margin-left: 250px;margin-top: 50px; width:750px;height:600px;">