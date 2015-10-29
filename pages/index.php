<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="Styles/main.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <title></title>
    </head>
    <body>
        <div id="menuContainer">
            <div id="upperMenuWrapper">
                <div id="upperMenuDiv">
                    <ul id="upperMenu">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Partners</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="cleardiv"></div>
            <div id="bottomMenuWrapper">
                <div id="bottomMenuDiv">
                    <ul id="bottomMenu">
                        <li>Find a Spa</li>
                        <li>Category</li>
                        <li>Advertise with us</li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="spaimg/spa1.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="spaimg/spa2.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="spaimg/spa5.jpg" alt="Flower" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="spaimg/spa6.jpg" alt="Flower" width="460" height="345">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
        </div>
    </body>
</html>
