<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="cart.php"><i class="lni lni-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="cart-header">
        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70%!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Qunatity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "testing");
				$query = "SELECT * FROM cart ORDER BY u_id ASC";

                // mysqli_select_db($con ,"clothing_db");

				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
                    $sum = 0;
					while($row = mysqli_fetch_array($result))
					{

                        $sum += $row["u_total_price"];

				?>

                <tr>
                    <td><a href="#"><i class="lni lni-cross-circle"></i></a></td>
                    <td><img src="<?php echo $row["u_image"]; ?>" alt=""></td>
                    <td><?php echo $row["u_name"]; ?></td>
                    <td>RS.<?php echo $row["u_price"]; ?></td>
                    <td><input type="number" value="<?php echo $row["u_qty"]; ?>" name="quantity"></td>
                    <td>RS.<?php echo $row["u_total_price"]; ?></td>
                </tr>

                <?php
					}
				}
			    ?>

            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <form action="checkout.php" method="post">
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>RS.<?php if(isset($sum)){echo $sum;} else {echo 0;}?></td>
                        <input type="hidden" name="total-amount" value="<?= $sum; ?>">
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>RS.<?php if(isset($sum)){echo $sum;} else {echo 0;}?></strong></td>
                    </tr>
                </table>
                <button class="normal" type="submit">Proceed to checkout</button>
            </form>
        </div>
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