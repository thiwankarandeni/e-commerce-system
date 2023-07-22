<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />


    <script>

        //Leave a message form validations
        function checkForm(Theform){
            var x = document.forms["info"]["name"].value;
            if(x == ""){
                alert("Name must be filled out");
                return false;
            }


            if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(info.email.value)){
                return (true);
            }
            alert("You have entered an invalid email address!");
            return false;


            var textarea = document.getElementById("pmessage").value;
            if (textarea.trim() == "") {
                alert("Textarea cannot be empty");
                return false; // Prevent form submission
            } else {
                // Perform other actions or submit the form
                return true; // Allow form submission
            }


        }

        function validatmail(email){
  
            var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            return re.test(email);
        }

        function validateandalert(){
            var email=document.getElementById("pemail").value;
            if (validatmail(email)) {
                alert("You will get updates through your email");
            } else {
                alert("Invalid email address");
            }
        }

        function submit(){
            alert("You have succesfully submit the message!");
        }

    </script>
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>


        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="lni lni-cart"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Let's_talk</h2>

        <p>LEAVE A MESSAGE,We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or cantact us today</h2>
            <h3>Head office</h3>
            <div>
                <li>
                    <i class="lni lni-map"></i>
                    <p><a
                            href="https://www.google.com/search?q=odel%20department%20store%20address&rlz=1C1YTUH_enLK1009LK1009&sxsrf=APwXEdeoQzcE4y4rEzerWkp6ZkRUdBAYSg:1683767217821&ei=qD9cZJfZHY6b4-EP6bOcOA&oq=odel+department+store+add&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAxgAMgUIIRCgATIFCCEQoAEyBQghEKABMgoIIRAWEB4QDxAdOgoIABBHENYEELADOg0IABBHENYEEMkDELADOgsIABCKBRCSAxCwAzoGCAAQFhAeOggIABCKBRCGAzoICCEQFhAeEB1KBAhBGABQxx1YhiFgtCtoAXABeACAAaoBiAHjBJIBAzAuNJgBAKABAcgBCsABAQ&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:4&tbm=lcl&rflfq=1&num=10&rldimm=17030152616890990215&lqi=Ch1vZGVsIGRlcGFydG1lbnQgc3RvcmUgYWRkcmVzcyIFSAGIAQFIisXCpJiWgIAIWjEQABABEAIYABgBGAIiFW9kZWwgZGVwYXJ0bWVudCBzdG9yZSoGCAMQARACKgQIAhAAkgEQZGVwYXJ0bWVudF9zdG9yZZoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VORGRGcExURWhuRUFFqgFZEAEqGSIVb2RlbCBkZXBhcnRtZW50IHN0b3JlKAAyHxABIhuPLKrRChcSmnytuXhCha67fzXZSkw8Lk4pg1gyGRACIhVvZGVsIGRlcGFydG1lbnQgc3RvcmU&ved=2ahUKEwjnh5zXiez-AhWd2DgGHZF_DAcQvS56BAgLEAE&sa=X&rlst=f#rlfi=hd:;si:10015326505460643313,l,Ch1vZGVsIGRlcGFydG1lbnQgc3RvcmUgYWRkcmVzcyIFSAGIAQFI76TjteaAgIAIWjEQABABEAIYABgBGAIiFW9kZWwgZGVwYXJ0bWVudCBzdG9yZSoGCAMQARACKgQIAhAAkgEOY2xvdGhpbmdfc3RvcmWaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUkpOR05NYUZoUkVBRaoBWRABKhkiFW9kZWwgZGVwYXJ0bWVudCBzdG9yZSgAMh8QASIbjyyq0QoXEpp8rbl4QoWuu3812UpMPC5OKYNYMhkQAiIVb2RlbCBkZXBhcnRtZW50IHN0b3Jl;mv:[[7.2361037,79.9395503],[6.6865985,79.8396599]]">Google
                            Map</a></p>
                </li>
                <li>
                    <i class="lni lni-envelope"></i>
                    <p>G-3 Udeshi City Shopping Complex, Makola Rd, Kiribathgoda</p>
                </li>
                <li>
                    <i class="lni lni-phone"></i>
                    <p>+9411 07 344 56</p>
                </li>
                <li>
                    <i class="lni lni-alarm-clock"></i>
                    <p>Monday to Saturday:10.00am to 18.00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.094252794654!2d79.9289306!3d6.9770148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257fb221b88b7%3A0x8afd9664ab8935f1!2sODEL%20-%20Kiribathgoda!5e0!3m2!1sen!2slk!4v1683769503343!5m2!1sen!2slk"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form name="info" action="" method="post" onsubmit="return checkForm(info)">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to here from you</h2>
            <input type="text" placeholder="Your Name" name="name">
            <input type="text" placeholder="E-mail" name="email">
            <input type="text" placeholder="Subject" name="subject">
            <textarea id="pmessage" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal" onclick = "submit()">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>Dulan Herath</span>Senior Marketing Manager<br> Phone: +94776540987
                    <br>Email: dulanherath@casa.com
                </p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>Achila Mendis</span>Senior Marketing Manager<br> Phone: +94776540987
                    <br>Email: achila.m@casa.com
                </p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Devni Sineka</span>Senior Marketing Manager<br> Phone: +94776540987
                    <br>Email: devnisineka@gmail.com
                </p>
            </div>
        </div>
    </section>

    <section id="newsletters" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form" name="newslet">
            <input type="text" name="" id="pemail" placeholder="Your email adress">
            <button class="normal" onclick="validateandalert()">Sign Up</button>
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