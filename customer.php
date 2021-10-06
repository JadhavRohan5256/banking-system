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
    <link rel="stylesheet" href="css/customer.css">
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
                items:1,
                loop:true,
                nav:true,
                autoplay:true,
                autoplayTimeout:3000,
                animateOut:true,
            });
        })
    </script>
</head>
<body>
    <!-- Navagation menu start  -->
    <section class="navagation" id="nav">
        <div class="container">
            <div class="nav">
                <img src="img/logo.png" alt="logo" class="logo">
                <input type="checkbox" id="check">
                <label for="check" class="sideBarIcon">
                    <div class="spinner top"></div>
                    <div class="spinner middle"></div>
                    <div class="spinner bottom"></div>
                </label>
                <ul id="navBar">
                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Navagation menu end -->

    <!-- title image section start  -->
    <div class="title owl-carousel owl-theme" id="slide">
        <div class="item">
            <img src="img/about img1.jpg" alt="about img1.jpeg"  class="item">
        </div>
        <div class="item">
            <img src="img/about img2.jpg" alt="about img2.jpeg"  class="item">
        </div>
        <div class="item">
            <img src="img/about img3.jpg" alt="about img3.jpeg"  class="item">
        </div>
    </div>
    <!-- title image section end -->
    <div class="top">
        <a href="#slide">
            <h2>Back to Top</h2>
        </a>
    </div>
    
    <div class="heading">
        <h2>Customer Details</h2>
    </div>
    <!-- Customer table Section start -->
    <section class="container">
        <div id="table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Balance</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>  
                    <?php
                    include 'conn.php';
                    $sql = "select *from customer";
                    $result = mysqli_query($conn,$sql);
                    while($res = mysqli_fetch_assoc($result)){
                        ?>
                <tr>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['email'];?></td>
                    <td><?php echo $res['balance'];?></td>
                    <td><?php echo $res['date'];?></td>
                </tr>
                <?php
                    }
                    mysqli_close($conn);
                    ?>
            </tbody>
        </table>
    </div>
</section>
<!-- Customer table Section end -->

<!-- footer section start  -->
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