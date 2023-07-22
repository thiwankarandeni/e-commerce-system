<!DOCTYPE html>
<html lang="en">
<head>
    <title>CheckOut</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <script>
        function validateform(form){
            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(checkForm.email.value)){
                return (true);
            }
            alert("You have entered an invalid email address!");
            return false;


            var x = document.forms["checkForm"]["fname"].value;
            if(x == ""){
                alert("First Name must be filled out");
                return false;
            }


            var y = document.forms["checkForm"]["lname"].value;
            if(y == ""){
                alert("Last Name must be filled out");
                return false;
            }


            var z = document.forms["checkForm"]["address"].value;
            if(z == ""){
                alert("Address must be filled out");
                return false;
            }


            var l = document.forms["checkForm"]["city"].value;
            if(l == ""){
                alert("City must be filled out");
                return false;
            }


            
            
        }
    </script>
</head>
<body>

    <?php
                $connect = mysqli_connect("localhost", "root", "", "testing");
				
                $grand_total = $_POST['total-amount'];

                // mysqli_select_db($con ,"clothing_db");

				// $result = mysqli_query($connect, $query);

                ?>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        
    </section>

    <section id="person-details">
        <form action="save_order.php" method="post" name="checkForm" onsubmit="return validateform(checkForm)">
            <h4>Contact</h4><br>
            <input type="text" placeholder="Email" name="email"><br>
            <h4>Shipping Address</h4><br>
            <input type="text" placeholder="First Name" name = 'fname'>
            <input type="text" placeholder="Last Name" name = 'lname'><br>
            <input type="text" placeholder="Address" name = 'address'><br>
            <input type="text" placeholder="City" name = 'city'>
            <input type="text" placeholder="Postal Code" name = 'postalcode'><br>
            <input type="text" placeholder="Phone" name = 'phone'><br>
            <input type="hidden" name="total-amount" value="<?= $grand_total; ?>">
            <input type="hidden" name="date" value="<?= date('Y-m-d'); ?>">

            <button class="normal" type = "submit">Submit</button>

        </form>
    </section>

    

    <script src="script.js"></script>
</body>
</html>