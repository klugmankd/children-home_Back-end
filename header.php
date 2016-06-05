<?php include_once ("includes/connection.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Дитячий будинок</title>
    <link href="image/dove.ico" rel="shortcut icon" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/windowStyle.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/navbar-fixed-top.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/newsCss.css">
    <script src="js/jquery.fancybox.pack.js"  type="text/javascript"></script>
    <script src="js/jquery.min.js"  type="text/javascript"></script>
    <script src="js/windowScript.js"  type="text/javascript"></script>
    <script src="js/editNews.js"  type="text/javascript"></script>
</head>

<body class="container-fluid ">

<nav class="navbar navbar-default navbar-fixed-top mybg">
    <div class="navbar-inner">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="navbar" class="navbar-collapse collapse nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">головна</a></li>
                    <li><a href="gallery.php" class="navcolor">фотогалерея</a></li>
                    <li><a href="documents.php" class="navcolor">нормативна база</a></li>
                    <li><a href="aboutus.php" class="navcolor">про нас</a></li>
                    <li><a href="feedback.php" class="navcolor">зворотній зв'язок</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>

<div class="row center-block page-header">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <img src="image/dove.png" class="img img-responsive" alt="логотип"/>
    </div>
    <div class="col-md-8 col-sm-6 col-xs-12">
        <p  class="h1 text-center" style="color: white">Комунальний заклад „Черкаський обласний спеціалізований будинок дитини” Черкаської обласної ради</p>
        <a class="btn btn-lg btn-block btn-primary" href="#">почати ознайомлення</a>
        <p class="h4 text-right" style="color: white">18036 м.Черкаси, вул.Пилипенка, 4<br/>
            Тел: 64-11-14<br/>
            Е-mail - chobd@mail.ru</p>
    </div>
</div>