<?php

// Add products into the cart table

$con = mysqli_connect("localhost","root","");
            if (!$con)
            {
            die('Could not connect: ' . mysqli_error($con));
            }

            mysqli_select_db($con ,"testing");


    if (isset($_POST['u_id'])) {
        $u_id = $_POST['u_id'];
        $u_qty = $_POST['u_qty'];
        $u_size = $_POST['u_size'];
        $u_name = $_POST['u_name'];
        $u_price = $_POST['u_price'];
        $u_image = $_POST['u_image'];


        $total_price = $u_price * $u_qty;
        $user_query = "INSERT INTO cart (u_id,u_name,u_price,u_qty,u_total_price,u_size,u_image) VALUES('$u_id','$u_name','$u_price','$u_qty',$total_price,'$u_size','$u_image')";
        $user_query_run = mysqli_query($con, $user_query);

        if ($user_query_run) {

            echo '<script>alert("Successfully Added!")</script>';
            header("Location: sproduct.php");

        } else {

            echo '<script>alert("Failed to Added!")</script>';
            header("Location: sproduct.php");
        }
    }

?>