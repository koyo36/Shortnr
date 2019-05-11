<?php 
    require_once '../src/app/init.php'; 
    //require_once 'short.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Document</title>
    <style>
        #error-p {
            color: red;
            font-weight: 300;
        }
    </style>
</head>

<body>

    <div class="loader"></div>
   
    <div class="heading">

        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="logo">
                        <a href="./">
                            <img src="images/logo.png" alt="">
                        </a>
                        
                    </div><!-- .logo -->
                    
                </div><!-- .col-md-12 -->

            </div><!-- .row -->
        </div><!-- .container -->

    </div><!-- .heading -->
    <div class="underline">

    </div>

    <div class="container">
        <div class="row">

            <div id="main-content" class="main-content offset-md-2 col-md-8">

                <h1 class="lead-text">Get your links shornr</h1>

                <div class="input-group">
                    <input type="text" id="link-short" class="form-control link-input" placeholder="Paste your link here..">
                </div>

                <a href="#" id="btn-short" class="btn btn-short">
                    Sorten URL
                </a>
                <p id="error-p" class="lead-p">
                </p>

                <p class="lead-p">All links on shortnr can be publicly acceessed by anyone.</p>
            </div>

        </div>
    </div>


    <div class="main-footer">
        <div class="container">
            <div class="row">
                <footer class="offset-md-2 col-md-8">

                    <p>Created by <a href="shorten.html">koyo<span class="red-text">creative</span></a></p>

                </footer>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>