<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>LeafIn-Home</title>
    <link rel="icon" type="image/x-icon" href="/images/leave-in-Logo.ico">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/headerfooter.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <nav class="nav-bar">
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
        <label class="logo">
            <img src="./Images/leave in Logo.png" alt="">LeafIn
        </label>
        <ul class="leaf-nav">
            <li><a class="nav-active" href="{{ route('posts.index') }}">Home</a></li>
            <li><a href="{{ route('blog.index') }}">Blogs</a></li>
            <li><a href="{{route('posts.contact')}}">Contact</a></li>
            <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
        </ul>

        <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
    </nav>
    <div class="Hero">
        <div class="hero-container">
            <h1>We love to helping you to save the earth...!!</h1>
            <p>We help realize you dreams in making a garden. Let's start with small things that can change the
                world. So you can enjoy the fresh air forever</p>
            <a href="./login.html">
                Join now
            </a>
        </div>
    </div>
    <div class="margin-space">
        <div class="next-page">
            <div class="heading">
                <h2>Steps To Start Your Plants Off Right</h2>
            </div>
            <div class="Plantss">
                <div class="inoculate">
                    <img src="Images/Inoculate.png">
                    <h3>Inoculate</h3>
                    <p>Coating the seed with bacteria that allow it to “fix” nitrogen soil.</p>
                </div>
                <div class="sow-seed">
                    <img src="Images/Sow the seeds.png">
                    <h3>Sow the seeds</h3>
                    <p>The quantities of our additions are not an exact science.</p>
                </div>
                <div class="pots">
                    <img src="Images/Pots.png">
                    <h3>Put in pots</h3>
                    <p>We own two of these blocker are with seed Price Matters.</p>
                </div>
            </div>
        </div>

        <div class="Smoothy">
            <div class="Smoothy-details">
                <h2 class="fs-42">Join with us to explore the nature's palette</h2>
                <p>Join us on a journey to explore nature's palette, where every leaf tells a story and every
                    blossom whispers of possibility. Whether you're a seasoned gardener or a curious enthusiast, our
                    passion for plants will inspire and delight you. Come, let's cultivate a greener world
                    together!"</p>
                <div class="See">
                    <a href="https://youtu.be/KCK16XHo4Yc?si=JnznXTObgkGlZvWq">See how it works</a>&nbsp;
                </div>
            </div>
            <div class="Smoothy-image">
                <img src="Images/grouppeople.png">
            </div>
        </div>
        <div class="grow ">
            <img src="Images/smoothy.png" alt="">
            <div class="grow-cont">
                <h2>Grow with love</h2>
                <p>Where every sprout is nurtured with care, cultivating not just greenery, but a bond with nature.
                    Join our community and watch your love for plants blossom into a thriving garden of joy and
                    serenity.
                </p>
            </div>
        </div>
        <div class="info-box">
            <div class="box-details">
                <h2>Is Your Home Ready to Bloom with Planthie?
                </h2>
                <p>Transform your living space into a lush oasis with Planthie’s
                    easy-to-care-for plants. Embrace the green life with Planthie and
                    let nature flourish in your home!</p>

            </div>
            <div class="box-image">
                <img src="Images/groot.png">
            </div>
        </div>
    </div>
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