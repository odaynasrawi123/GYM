<?php

include('ServerManagers/UserManager.php');
//  require_once("DatabaseManagers/UsersDBManager.php");

//if user is not logged in, they cannot access this page 
if (empty($_SESSION['userId'])) {
    header('location: signin.php');
}


?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
    <title> Top Gym</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style/gym.css">
    <script src="./js/javaScript.js"></script>



</head>

<body>

    <div class="box"> </div>


    <div class="main">
        <ul>
            <li> <a href="Club.php"> Home</a></li>
            <li> <a href="goal.php"> Goal</a></li>
            <li> <a href="trainers.php"> Trainers</a></li>
            <li> <a href="services.php"> services</a></li>
            <li> <a href="profile.php"> profile</a></li>
            <li><a href="contactUs.php">contactUs </a></li>
            <li> <button class="ok" value="logout"> <a href="signin.php?logout='1'">logout </a> </button></li>
        </ul>
    </div>

    <div class="letter">
        <h2><i class="fa fa-align-center" aria-hidden="true"></i> Top Gym<i class="fa fa-align-center"
                aria-hidden="true"></i></h2>

    </div>

    <h1> welcome to Top GYM</h1>
    <Button class="style">
        <a href="goal.php">
            <span>lets get started</span>
            <div class="liquid"></div>
    </Button></a>


    <h3>About us </h3>
    <p>Our purpose of a gym is to help you learn new exercises, techniques and training methods to meet your
        weight-loss, muscle building, heart health or sports performance goals
        We are committed to helping you exceed your fitness goals. With our indoor pool, basketball courts, group
        exercise classes and state-of-the-art fitness floor, you will find exactly what you are looking for..
    </p>
    <img src="images/aboutUs.jpg" alt="" class="aboutus">

    <h2>About Gym </h2>
    <p>We’ve transformed every aspect of our membership to encompass integrated digital and in-club offerings to keep
        you at your best—all the time, any time.
        Top Gym is a privately owned and operated health and fitness club founded in 2003 by Peter Taunton. Its
        headquarters is in Chanhassen, Minnesota, United States.

        Top Gym is associated by ownership and otherwise with other fitness and franchise businesses through its parent
        Lift Brands and various affiliate companies. Those brands include 9Round, YogaFit Studios, Insurgence, Steele
        Fitness, Kosama and TRUMAV.

        Top Gym operates in 48 states in the United States, plus Australia, Belgium, Canada, Egypt, Georgia, Hong Kong,
        India, Indonesia, Ireland, Mexico, The Netherlands, New Zealand, Philippines, Spain, Taiwan, Turkey, United Arab
        Emirates, United Kingdom.
    </p>
    <h2>Awards</h2>
    <p>In 2010, founder Peter Taunton was named Ernst & Young’s “Entrepreneur of the Year,” for demonstrating
        extraordinary success in the areas of innovation, financial performance and personal commitment to his business
        and community.</p>
    <p>Top Gym appeared on the 2010 Fastest Growing Franchises list at No. 20 and on Entrepreneur’s 2011 Fastest Growing
        Franchises list at No. 27.
    </p>
    <p>Top Gym has been ranked on Entrepreneur’s annual Franchise 500 list every year in the last decade.

    </p>
    <h2 class="h2"> Gallery </h2>
    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 20</div>
            <img src="./images/gallery1.jpg" style="width:100%" width="400" height="400">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 20</div>
            <img src="./images/gallery2.jpg" style="width:100%" width="400" height="400">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 20</div>
            <img src="./images/gallery3.jpg" style="width:100%" width="400" height="400">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 20</div>
            <img src="./images/gallery4.jpg" style="width:100%" width="400" height="400">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 20</div>
            <img src="./images/gallery5.jpg" style="width:100%" width="400" height="400">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 20</div>
            <img src="./images/gallery6.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">7 / 20</div>
            <img src="./images/gallery7.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">8 / 20</div>
            <img src="./images/gallery8.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">9 / 20</div>
            <img src="./images/gallery9.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">10 / 20</div>
            <img src="./images/gallery10.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">11 / 20</div>
            <img src="./images/gallery11.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">12 / 20</div>
            <img src="./images/gallery12.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">13 / 20</div>
            <img src="./images/gallery13.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">14 / 20</div>
            <img src="./images/gallery14.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">15 / 20</div>
            <img src="./images/gallery15.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">16 / 20</div>
            <img src="./images/gallery16.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">17 / 20</div>
            <img src="./images/gallery17.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">18 / 20</div>
            <img src="./images/gallery18.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">19 / 20</div>
            <img src="./images/gallery19.jpg" style="width:100%" width="400" height="400">
        </div>
        <div class="mySlides">
            <div class="numbertext">20 / 20</div>
            <img src="./images/gallery20.jpg" style="width:100%" width="400" height="400">
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>


    </div>
            <!-- Full-width images with number text -->
 
    
 


</body>
<script src="./js/club.js"></script>
<footer id="footer" class="clearfix">
    <div id="footer-widgets">

        <div class="container">

            <div id="footer-wrapper">

                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <div id="meta-3" class="widget widgetFooter widget_meta">
                            <h4 class="widgettitle">Importent Page :</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
                                <li><a href="#"><i class="fa fa-link"></i>   Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-envelope fa-fw"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div> <!-- end widget1 -->

                    <div class="col-sm-6 col-md-2">
                        <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                            <h4 class="widgettitle">Our social media :</h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i>
                                        Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i>
                                        Twitter</a>
                                </li>
                                <li>
                                    <a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i>
                                        Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end widget1 -->

                    <div class="col-sm-6 col-md-4">
                        <div id="meta-4" class="widget widgetFooter widget_meta">
                            <h4 class="widgettitle">Subscribe :</h4>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">E-mail :</span>
                                    <input class="form-control" placeholder="Write your email .." type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Phone :</span>
                                    <input class="form-control" placeholder="+972526789463" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Subscribe !</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end widget1 -->
                </div> <!-- end .row -->
            </div> <!-- end #footer-wrapper -->
        </div> <!-- end .container -->
    </div> <!-- end #footer-widgets -->
    <div id="sub-floor">
        <div class="container">
            <div class="row">
                <div class="col-md-4 copyright">
                    © oday nasrawi 2021
                </div>

            </div> <!-- end .row -->
        </div>
    </div>

</footer>

</html>