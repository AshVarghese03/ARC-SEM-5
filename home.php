<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Two Sections and Navigation</title>
    <link rel="stylesheet" href="home.css"> <!-- Link to your CSS file -->
</head>
<body>
    
    <section class="first-section">
        <nav class="navbar">
            <ul class="nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login_form.php">Login</a></li>
                        <li><a href="./register_form.php">Register</a></li>
                        <li><a href="./user_page.php">Welcome <span>
                        <?php 
                        if(isset($_SESSION['user_name'])){
                            echo $_SESSION['user_name']; 
                        }else{
                            
                            echo "user";
                        }
                        
                       ?> 
                    
                </a>    
        </ul>

        </nav>
        
        <!-- Button positioned up and to the left side with hover effect -->
        <a href="trial.php"><button class="button">Explore</button></a>
    </section>

    <section class="new-section">
        <div class="section-content">
            <img src="homepage_reviews.png" alt="Image">
            <div class="text">
                <h1>Using Software?</h1>
                <h2>Write a review.</h2>
                <p>Help over 5 million monthly Buyers on G2<br> make the right choice for their business.</p>
                <div class="button-container">
                    <a href="as.html"><button class="round-button">Review</button></a>
                </div>
            </div>
        </div>
        <div class="section-content white-text">
            <div class="text">
                <h1>Selling Software?</h1>
                <h2>Claim your profile now!</h2>
                <p>Your future customers are researching their next purchase on arc<br> Make sure they can find you.</p>
                <div class="button-container">
                    <a href="vendor.html"><button class="round-button">Claim Now</button></a>
                </div>
            </div>
            <img src="seller.png" alt="Image">
        </div>
    </section>
    <footer class="footer">
        <div class="footer-distributed">
            <div class="footer-left">
                <h3>ARC</h3>
                <p class="footer-links">
                    <a href="home.html">Home</a>
                    ·
                    <a href="aboutus.html">About</a>
                    ·
                    <a href="contact.html">Contact</a>
                </p>
                <p class="footer-company-name">ARC &copy; 2023</p>
            </div>
            <div class="footer-right">
                <h3>About Company</h3>
                <p class="footer-company-about">
                    Dedicated to innovation, we strive to transform ideas into impactful solutions at ARC." 
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Premier Automobiles Rd.</span> Kurla, Mumbai, India</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>7045442497</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="ARC@company.com">contact@ARC.com</a></p>
                </div>
                <div>
                <i class="fa fa-comment"></i>
                <p><a href="feedback.html">Feedback</a></p>
            </div>
            </div>
        </div>
    </footer>
    <script src="app.js"></script> <!-- Link to your JS file -->
</body>
</html>


