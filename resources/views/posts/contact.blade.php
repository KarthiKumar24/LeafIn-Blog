<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeafIn-Contact</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/headerfooter.css')}}" />
    <link rel="icon" type="image/x-icon" href="/images/leave-in-Logo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <nav class="nav-bar"> <input type="checkbox" id="check"> <label for="check" id="checkbtn"><i
                class="fa fa-bars"></i></label> <label class="logo"> <img src="Images/leave in logo.png"
                alt="leaf-in-logo">LeafIn </label>
        <ul class="leaf-nav">
            <li><a href="./index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html" class="nav-active">Contact</a></li> <button class="nav-btn-container"><a
                    class="btn-log" href="login.html">Login</a></button>
        </ul> <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
    </nav>
    <form>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="field" placeholder="Enter your name" required>
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" id="mail" class="field" placeholder="Enter your mail" required>
                    <label>Contact Us</label> <textarea type="email" class="field" placeholder="Message"
                        required></textarea>
                    <button class="btn" for="email" id="field">Send</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Footer -->
    <footer>
        <div class="heading">
            <img src="./Images/leave in Logo.png" alt="">
            <h2>LeafIn</h2>
        </div>
        <div class="content">
            <!--service section-->
            <div class="services">
                <h4>Services</h4>
                <a href="#">Shipping</a>
                <a href="#">Plants-Medicines</a>
                <a href="#">Payment-option</a>
                <a href="#">Help</a>
            </div>

            <!--Social media section-->
            <div class="social-media">
                <h4>Social</h4>
                <a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook"></i>&nbsp;&nbsp;Facebook</a>
                <a href="https://www.instagram.com/accounts/onetap/"><i
                            class="fa-brands fa-instagram"></i>&nbsp;&nbsp;Instagram</a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i>&nbsp;&nbsp;Youtube</a>
            </div>
            <!--navigation links-->
            <div class="links">
                <h4>Quick Links</h4>
                <a href="#">Home</a>
                <a href="./about.html">About</a>
                <a href="./contact.html">Contact</a>
                <a href="./login.html">Log In</a>
            </div>
            <div class="details">
                <h4 class="address">Address</h4>
                <a>Plant Center,<br>KK-nagar,<br /> Madurai-16.
                </a>
            </div>
            <div class="email">
                <h4 class="mail">Contact</h4>
                <a href="tel:919790477908"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;9790477908</a>
                <a href="mailto:leafinofficial@gmail.com"><i class="fa-regular fa-envelope"></i>&nbsp;&nbsp;leafinofficial@gmail.com</a>
            </div>
        </div>
        <div class="footer">
            <p>&copy;LeafIn 2023.</p>
        </div>
    </footer>
</body>

</html>