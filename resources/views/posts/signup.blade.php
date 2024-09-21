<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>LeafIn-Signup</title>
    <link rel="icon" type="image/x-icon" href="/images/leave-in-Logo.ico">
    <link rel="stylesheet" href="/login.css" />
    <link rel="stylesheet" href="./contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
    <nav class="nav-bar">
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
        <label class="logo">
            <img src="./Images/leave in Logo.png" alt="">LeafIn</label>
        <ul class="leaf-nav">
            <li><a href="./index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
        </ul>
        <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
    </nav>
    <form>
        <div class="login-full-container">
            <div class="login-container">
                <h1>User Login</h1>
                <p><input type="text" id="user" placeholder="Username" required></p>
                <p><input type="email" id="user" placeholder="Email" required></p>
                <p><input type="password" id="password" placeholder="Password" required></p>
                <p id="drop"></p>
                <!-- <button onclick="login()" class="login-button">Login</button>-->
                <button class="login-button Create"><a href="#">Create Account</a></button>
                <p id="forget">Already have an account?<a href="./login.html">Log In</a></p>
            </div>
        </div>
    </form>


    <footer>
        <div class="heading">
            <img src="./Images/leave in Logo.png" alt="">
            <h2>LeafIn</h2>
        </div>
        <div class="content">
            <!--service section-->
            <div class="services">
                <h4>Services</h4>
                <p><a href="#">Shipping</a></p>
                <p><a href="#">Plants-Medicines</a></p>
                <p><a href="#">Payment-option</a></p>
                <p><a href="#">Help</a></p>
            </div>

            <!--Social media section-->
            <div class="social-media">
                <h4>Social</h4>
                <p><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook"></i>&nbsp;&nbsp;Facebook</a></p>
                <p><a href="https://www.instagram.com/accounts/onetap/"><i
                            class="fa-brands fa-instagram"></i>&nbsp;&nbsp;Instagram</a></p>
                <p><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i>&nbsp;&nbsp;Youtube</a></p>
            </div>
            <!--navigation links-->
            <div class="links">
                <h4>Quick Links</h4>
                <p><a href="#">Home</a></p>
                <p><a href="./about.html">About</a></p>
                <p><a href="./contact.html">Contact</a></p>
                <p><a href="./login.html">Log In</a></p>
            </div>
            <div class="details">
                <h4 class="address">Address</h4>
                <p>Plant Center,<br>KK-nagar,<br /> Madurai-16.
                </p>
            </div>
            <div class="contact">
                <h4 class="mail">Contact</h4>
                <p><a href="tel:919790477908">9790477908</a></p>
                <p><a href="mailto:leafinofficial@gmail.com">leafinofficial@gmail.com</a></p>
            </div>
        </div>
        <div class="footer">
            <p>&copy;LeafIn 2023.</p>
        </div>
    </footer>

</body>

</html>