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
    body { 
        background: url("res/img/hasil.jpg") no-repeat fixed center;
        height: 100%; 
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
                    <a class="nav-link" href = "daftarmentoring.php"  style="margin-Left:20px">Daftar Mentoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href = "hasil.php"style="margin-Left:40px">Hasil Mentoring</a>
                                    </li>
                <li class="nav-item">
                    <a class="nav-link active"  href = "card.html"style="margin-Left:60px">Chat</a>
                </li>  
            </ul> 

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" style="margin-Right:50px" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons" style="font-size:30px"><font color="ffffff">account_circle</i>  <?php echo $_SESSION['username']?></font></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>        
            </ul>
        </nav>
    </header>

    <div class="mt-3 ml-4 mb-1" style="max-width: 60%">
        <h1>Hasil Mentoring</h1>
    </div>

    <!-- <div class="card shadow-sm mt-3 ml-4 mb-1" style="width: 900px; max-width: 90%">
        <div class="card-body">
            <div class="row">
                <div class="col ">
                    <h4> Day, DD MM YYYY </h4>
                    <p class = "text-muted">Status</p>
                    xx.00 - xy.00   

                </div>
                <div class="col text-right">
                <a href="bookingdetail.php?transnum=<?php echo $transnum;?>"class="card-link"><i class="material-icons">more_horiz</i> Detail</a> 
                </div>
            </div>
        </div>
    </div> -->

    <div class="mb-5">

 
    </div>
    
</body>
</html>

<img src="res/img/pas1.png" style="display:block; margin-left: 80px;width:1190px;height:550px;">