<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Order</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

    </section>
    <?php
    $con = mysqli_connect("localhost","root","");
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error($con));
    }

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $phone = $_POST['phone'];
    $total = $_POST['total-amount'];
    $date = $_POST['date'];

    // echo $email." | ".$fname." | ".$lname." | ".$address." | ".$city." | ".$postalcode." | ".$phone." | ".$total." | ".$date;


    mysqli_select_db($con ,"testing");

    $user_query = "INSERT INTO item_order (order_date,total,email,first_name,last_name,address,city,postal_code,contact_no) VALUES('$date','$total','$email','$fname','$lname','$address','$city','$postalcode','$phone')";
        $user_query_run = mysqli_query($con, $user_query);

        if ($user_query_run) {

            echo '<script>alert("Your order successfully placed!")</script>';
            // header("Location: sproduct.php");

        } else {

            echo '<script>alert("Failed to place the order!")</script>';
            // header("Location: sproduct.php");
        }


    ?>

    <section id="banner" class="section-m1">
        <h2>Thanks for shopping with us!</h2>
        <button class="normal" onclick="window.location.href = 'shop.php';">Explore More</button>
    </section>
</body>

</html>