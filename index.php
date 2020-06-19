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
        <title>Business Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <style >
            <?php include "index.css";?>
        </style>

        <script src="index.js"></script>
    </head>
    <body>

        <div id="hder"class="header">
            <h2>Scroll Down</h2>
            <p>Scroll down to see the sticky effect.</p>
        </div>

        <div id="navbar">
            <a class="active" href="#hder">Home</a>
            <a href="#catalog">Catalog</a>
            <a href="#contact">Contact Us</a>
            <a href="#location">Location</a>

        </div>

        <div class="content">

            <div id="catalog">
                                <!-- Slideshow container -->
                <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 5</div>
                            <img src="foodImg/pic1.jpg">
                            <div class="text">Steak salad</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 5</div>
                            <img src="foodImg/pic2.jpg" >
                            <div class="text">Roasted Steak</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 5</div>
                            <img src="foodImg/pic3.jpg">
                            <div class="text">Steak potato</div>
                        </div>
                         <div class="mySlides fade">
                            <div class="numbertext">4 / 5</div>
                            <img src="foodImg/pic4.jpg" >
                            <div class="text">Nun and steak</div>
                        </div>
                         <div class="mySlides fade">
                            <div class="numbertext">5 / 5</div>
                            <img src="foodImg/pic5.jpg" >
                            <div class="text">Salad</div>
                        </div>
                         
                        

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>

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
            </div>

            <div id="location">

            </div>
        </div>

    </body>
</html> 