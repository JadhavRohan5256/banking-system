<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <link rel="stylesheet" href="css/index.css">
    <!-- carousel path start -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- carousel path end -->
    <!-- font awesome link start -->
    <script src="https://kit.fontawesome.com/a2a0858223.js"></script>
    <!-- font awesome link end -->
    <!-- carousel path start  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- carousel path end -->
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                animateOut: true,
            });
        })
    </script>
    <style>
        #contactForm h2 {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <section class="navagation" id="nav">
        <div class="container">
            <div class="nav">
                <img src="img/logo.png" alt="logo" class="logo">
                <!-- <div> -->
                <input type="checkbox" id="check">
                <label for="check" class="sideBarIcon">
                    <div class="spinner top"></div>
                    <div class="spinner middle"></div>
                    <div class="spinner bottom"></div>
                </label>
                <!-- </div> -->
                <ul id="navBar">
                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="title owl-carousel owl-theme" id="slide">
        <div class="item">
            <img src="img/about img1.jpg" alt="about img1.jpeg" class="item">
        </div>
        <div class="item">
            <img src="img/about img2.jpg" alt="about img2.jpeg" class="item">
        </div>
        <div class="item">
            <img src="img/about img3.jpg" alt="about img3.jpeg" class="item">
        </div>
    </div>
    <div class="top">
        <a href="#slide">
            <h2>Back to Top</h2>
        </a>
    </div>

    <div class="heading">
        <h2>Transfer Money</h2>
    </div>
    <!-- Transfer Form section start  -->
    <section class="container">
        <form action="transfer-data.php" method="post" id="contactForm">
            <h2>Sender Details</h2>
            <!-- sender details start  -->
            <div class="field">
                <label for="name">Enter Sender Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Sender Name">
            </div>
            <div class="field">
                <label for="email">Enter Sender E-Mail</label>
                <input type="email" name="email" id="email" placeholder="Enter Sender E-Mail">
            </div>
            <!-- sender details end -->
            <h2>Receiver Details</h2>
            <!-- receiver details start  -->
            <div class="field">
                <label for="Rname">Enter Receiver Name</label>
                <input type="text" name="Rname" id="Rname" placeholder="Enter Receiver Name">
            </div>
            <div class="field">
                <label for="Rmail">Enter Receiver E-Mail</label>
                <input type="email" name="Rmail" id="Rmail" placeholder="Enter Receiver E-Mail">
            </div>
            <!-- receiver details end -->

            <!-- ammount details start  -->
            <h2>Ammount Details</h2>
            <div class="field">
                <label for="ammount">Ammount</label>
                <input type="number" name="ammount" id="ammount" placeholder="Enter Ammount">
            </div>
            <div class="field">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="100" rows="10"></textarea>
            </div>
            <!-- ammount details end -->

            <input type="submit" value="Submit" id="submit" name="submit">
        </form>
    </section>
    <!-- footer section start  -->
    <!-- Transfer Form section end -->
    <footer>
        <section class="container">
            <div class="footer">
                <div class="company">
                    <h2>Company</h2>
                    <ul>
                        <li><a href="aboutUs.php">About Us</a></li>
                        <li><a href="">Term and conditions</a></li>
                        <li><a href="">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="contact">
                    <h2>Contact Details</h2>
                    <ul>
                        <li><a href="">sparkfoundation@gmail.com</a></li>
                        <li><a href="">+919898989984</a></li>
                    </ul>
                </div>
                <div class="support">
                    <h2>Tech Support</h2>
                    <ul>
                        <li><a href="">Installation guild</a></li>
                        <li><a href="">Sign Out</a></li>
                    </ul>
                </div>
        </section>
        </div>
        <h2>Copyrigh @2021 All rights reserved</h2>
    </footer>
    <!-- footer section end  -->
</body>

</html>