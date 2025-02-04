<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara-E-Commerce Website</title>

    <style>
        .logoutbtn{
            border-radius: 5px;
            background-color: #2f44cd;
            box-shadow:  6px 6px 12px #acacac,
                        -6px -6px 12px #ffffff;
            border: 0.5px solid black;
            padding: 7px;
            color: #fff;
            cursor: pointer;
            font-weight: 500;
        }
        #navbar button:hover{
            background: rgb(73, 38, 138);
            color: #fff;
            transition: 0.2s;
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!--Boxicons Link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <!-- Header Section -->
    <section id="header">
        <a href="#"><img src="assets/images/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <!-- <li><a href="contact.html">Contact Us</a></li> -->
                <li><a href="cart.html"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="login.html"><button class="logoutbtn" class="normal">Log Out</button></a>
                <!-- CART  -->
            </ul>
        </div>
    </section>

    <section id="hero">
        <h3>Exciting Offers!</h3>
        <h2>Great Deals</h2>
        <h1>On all Products!</h1>
        <p>Save more with Coupons and get 50% Off!</p>
        <button><strong><a href="shop.html">Shop Now</a></strong></button>

    </section>

    <section id="features" class="section-p1">
        <div class="fe-box">
            <img src="assets/images/features/f1.png" alt="First Feature">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/features/f2.png" alt="Second Feature">
            <h6>Order Online</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/features/f3.png" alt="Third Feature">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/features/f4.png" alt="Fourth Feature">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/features/f5.png" alt="Fifth Feature">
            <h6>Happy Sale</h6>
        </div>
        <div class="fe-box">
            <img src="assets/images/features/f6.png" alt="Sixth Feature">
            <h6>Support</h6>
        </div>
            
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Modern Collection</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sprod.html';">
                <img src="assets/images/products/f1.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Summer Flower T-Shirt - Yellow</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/f2.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Summer Flower T-Shirt - Green</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/f3.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Summer Flower T-Shirt - Light Yellow</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/f4.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Summer Flower T-Shirt - White</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/n1.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Formal Shirt - Sky Blue</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/n2.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Formal Shirt - Dark Blue</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/n3.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Formal Shirt - White</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>

            <div class="pro">
                <img src="assets/images/products/n4.jpg" alt="Product1">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Formal Shirt - Brown</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>$70</h4>
                </div>
                <a href="#"><i class='bx bx-cart cart' ></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h2>Upto <span>50% Off</span> On All Products</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 Get 1 Free</h2>
            <span>The best dresses are on Sale at Cara!</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcoming Season</h2>
            <span>Wide ranges!</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <p class="space"></p>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="assets/images/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 52 Wellington Road, Street 40, Bangalore.</p>
            <p><strong>Phone:</strong> +91-7845738991</p>
            <p><strong>Hours:</strong> 10:00 - 17:00, Monday - Saturday</p>
        </div>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class='bx bxl-facebook'></i>
                <i class='bx bxl-twitter' ></i>
                <i class='bx bxl-instagram' ></i>
                <i class='bx bxl-pinterest-alt' ></i>
                <i class='bx bxl-youtube' ></i>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play Store.</p>
            <div class="row">
                <img src="assets/images/pay/app.jpg" alt="">
                <img src="assets/images/pay/play.jpg" alt="">
            </div>
            <p>Secure Payment Gateways</p>
            <img src="assets/images/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p style="color: black;"><strong>&copy; 2024 Cara. All rights reserved.</strong></p>
            <p style="color: rgb(26, 21, 21);"><strong>PROJECT BY ISHANI BHONGALE</strong>  </p>
        </div>
        
    </footer>
    
    <script src="assets/script.js"></script>
</body>
</html>
