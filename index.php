<?php 
    include_once "./contactF/contact.php";
    if($_POST){
        sendEmail();
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Restaurant template design</title>
        <meta name="description" content="This is a template design of a restaurant website made from 'The Modern Website'">
        <meta name="author" content="Kouadio Kenneth">


        <meta name="viewport" content="width=device-width">
        <style >
            <?php include "index.css";?>
        </style>

        <script>
            <?php include "index.js";?>
        </script>
    </head>
    <body>

        <div id="navbar" class="sticky">
            <a class="active" href="#hder">Home</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact Us</a>
            <a href="https://maps.google.com/" target="_blank">Location</a>
            <a href="#aboutus">About Us </a>

        </div>
        <div id="hder"class="header">
            <h2>Creative Restaurant Website Design</h2>
            <p>Open our doors to have a look</p>
        </div>

      

        <div class="content">

            <div id="menu">
                                    <!-- Slideshow container -->
                <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <div class="numbertext">1 / 5</div>
                                <img src="foodImg/pic1.jpg">
                                <div class="text">
                                <h1>Steak salad</h1>

                                    <ul>
                                        <li>Lorem pi</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 5</div>
                                <img src="foodImg/pic2.jpg" >
                                <div class="text">
                                <h1>Roasted Steak</h1>

                                     <ul>
                                        <li>Lorem pi</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 5</div>
                                <img src="foodImg/pic3.jpg">
                                <div class="text">
                                <h1>Steak potato</h1>

                                     <ul>
                                        <li>Lorem pi</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">4 / 5</div>
                                <img src="foodImg/pic4.jpg" >
                                <div class="text">
                                <h1>Nun and steak</h1>

                                    <ul>
                                        <li>Lorem pi</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <div class="numbertext">5 / 5</div>
                                <img src="foodImg/pic5.jpg" >
                                <div class="text">
                                    <h1>Salad and Steak</h1>
                                    <ul>
                                        <li>Lorem pi</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                        <li>Lorem pi rez</li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                    <div id="aboutus">
                        <h1>About Us</h1>
                        <h2>Roster Restaurant</h2>
                        <p>velit dignissim sodales ut eu sem integer vitae justo eget</p>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tortor at risus viverra adipiscing. Duis convallis convallis tellus id interdum velit laoreet id.
                        </p>
                    </div>
                      
                </div>
            </div>
            <div id="contact">
                    <form action="contactF/contact.php" method="post">

                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" value="" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" value="" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" value="" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit">

                    </form>
                    <div>
                        <a href="tel:2502139352340">telephone: (250) 213 935 2340</a>
                        <br/>

                    </div>
                </div>
        </div>
        <footer>
            <p>
                &copy; 2020 The Modern Website Design. All rights reserved. &verbar; 
                <span> Privacy Policy</span>  &verbar;<span>Terms & Conditions of Use</span>
                &verbar;<span> Portfolio</span>
            </p>
        </footer>

    </body>
</html> 