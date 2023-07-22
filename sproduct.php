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
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="lni lni-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="prodetails" class="section-p1">

        <?php
        $con = mysqli_connect("localhost","root","");
        if (!$con)
        {
        die('Could not connect: ' . mysqli_error($con));
        }
        mysqli_select_db($con ,"testing");
        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM cloth WHERE id ='$id' LIMIT 1";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
    ?>

        <div class="single-pro-image">
            <img src="<?php echo $row['image'] ?>" width="100%" id="MainImg" alt="">

            <div class="small-image-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / T-Shirts</h6>
            <h4><?php echo $row['name']; ?></h4>
            <h2>RS.<?php echo $row['price']; ?></h2>
            <form action="" class="form-submit" method="post">
                <table>
                    <tr>
                        <td>
                            
                                <select name="size" class="u_size">
                                    <option value="">Select Size</option>
                                    <option value="xs">Extra Small</option>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                    <option value="xl">Extra Large</option>
                                </select>
                                <button type="submit" value="submit" class="normal">Check Availability</button>
                            
                        </td>
                        <td style="padding-left:15px; padding-top:30px;">
                            <?php

                            $con = mysqli_connect("localhost","root","");
                            if (!$con)
                            {
                            die('Could not connect: ' . mysqli_error($con));
                            }

                            if(isset($_POST['size'])) {

                                $selected = $_POST['size'];

                                mysqli_select_db($con ,"testing");

                                $result = mysqli_query($con, "SELECT clothing_item.amount FROM clothing_item INNER JOIN cloth ON cloth.id = clothing_item.id WHERE cloth.id='$id' AND clothing_item.size='$selected'");
                                
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo $row['amount']. " items available in the stock";
                                }
                            }

                            mysqli_close($con);
                        ?>
                        </td>
                    </tr>
                </table>




                <input type="number" class="u_qty" value="1">
                <input type="hidden" class="u_id" value="<?= $row['id'] ?>">
                <input type="hidden" class="u_name" value="<?= $row['name'] ?>">
                <input type="hidden" class="u_price" value="<?= $row['price'] ?>">
                <input type="hidden" class="u_image" value="<?= $row['image'] ?>">
                <button class="btn normal addItemBtn">Add to Cart</button>
            </form>
            <h4>Product Description</h4>

            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat non nisi illum commodi ullam
                aspernatur facere iusto autem qui nostrum. Non voluptatem alias quidem vero a nam distinctio
                molestias
                optio!</span>

        </div>

        <?php
              }
            } else {
              echo "<h4>No Record Found.!</h4>";
            }
          }

          ?>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                    </div>
                    <h4>RS.2100</h4>
                </div>
                <a href="#"><i class="lni lni-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                    </div>
                    <h4>RS.3100</h4>
                </div>
                <a href="#"><i class="lni lni-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                    </div>
                    <h4>RS.1700</h4>
                </div>
                <a href="#"><i class="lni lni-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                        <i class="lni lni-star-fill"></i>
                    </div>
                    <h4>RS.2450</h4>
                </div>
                <a href="#"><i class="lni lni-cart cart"></i></a>
            </div>
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
            <p>&copy; Cara Clothing</p>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript">
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
    }
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        debugger;
        // Send product details in the server
        $(".addItemBtn").click(function(e) {
            debugger;
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var u_id = $form.find(".u_id").val();
            var u_size = $form.find(".u_size").val()
            var u_qty = $form.find(".u_qty").val();
            var u_name = $form.find(".u_name").val();
            var u_price = $form.find(".u_price").val()
            var u_image = $form.find(".u_image").val();

            $.ajax({
                url: 'code.php',
                method: 'post',
                data: {
                    u_id: u_id,
                    u_size: u_size,
                    u_qty: u_qty,
                    u_price: u_price,
                    u_name: u_name,
                    u_image: u_image
                },
                success: function(response) {
                    
                    
                }
            });
        });
    });
    </script>

    <script src="script.js"></script>
</body>

</html>