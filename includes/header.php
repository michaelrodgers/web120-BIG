<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="description" content="a workspace for learning html and web development basics">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../big/css/big.css" type="text/css"/>   
    <link rel="stylesheet" href="../big/css/nav.css" type="text/css"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 id="top"><a href="index.php">Michael's WEB120 BIG Website</a></h1>
            
            <!--
                MADE WITH <3
            -->
                
            <nav id="cssmenu">
                <ul>
                    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
                    <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
                    <li><a href="flexbox.php"><span>Flexbox</span></a></li>
                    <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                        <ul>
                            <li><a href="map.php"><span>Map</span></a></li>
                            <li><a href="calendar.php"><span>Calendar</span></a></li>
                            <li><a href="youtube.php"><span>YouTube</span></a></li>
                        </ul>
                    </li>
                    <li><a href="parallax.php"><span>Parallax</span></a></li>
                    <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
                    <li><a href="responsivevnative.php"><span>Site vs App</span></a></li>
                    <li><a href="webcam.php"><span>Web Cam</span></a></li>
                </ul>
            </nav>
        </header>