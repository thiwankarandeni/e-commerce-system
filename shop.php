<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

</head>
<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        

        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="lni lni-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="page-header">        
        <h2>#happyshopping</h2>
        <p>Save more with coupons & upto 70% off!</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">

        <?php

            $con = mysqli_connect("localhost","root","");
            if (!$con)
            {
            die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con ,"testing");

        $query = "SELECT * FROM cloth";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $uni) {
        ?>

            <div class="pro">
                <a href="sproduct.php?id=<?php echo $uni['id']; ?>"><img src="<?php echo $uni['image'];?>" alt=""></a>
                
                <div class="des">
                    <h5><?php echo $uni['name']; ?></h5>
                    <div class="star">
                        <i class="lni lni-star-fill"></i> 
                        <i class="lni lni-star-fill"></i> 
                        <i class="lni lni-star-fill"></i> 
                        <i class="lni lni-star-fill"></i> 
                        <i class="lni lni-star-fill"></i> 
                    </div>
                    <h4>RS.<?php echo $uni['price']; ?></h4>
                </div>
                <a href="#"><i class="lni lni-cart cart"></i></a>
            </div>

            <?php
                }
              } else {
                ?>
                <P>No Record Found</p>
              <?php
              }
              ?> 
            
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="lni lni-arrow-right"></i></a>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contacts</h4>
            <p><strong>Address : </strong>G-3 Udeshi City Shopping Complex, Makola Rd, Kiribathgoda</p>
            <p><strong>Phone : </strong>+9477 07 344 56</p>
            <p><strong>Hours : </strong>10:00 - 18:00, Mon - Sat</p>

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="lni lni-facebook-fill"></i>
                    <i class="lni lni-youtube"></i>
                    <i class="lni lni-instagram-original"></i>
                    <i class="lni lni-tiktok-alt"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col payment">
            <h4>Payment Gateways</h4>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>&copy; Casa Clothing</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>