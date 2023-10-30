<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<?php
@include 'config.php';
session_start();

require_once ('CreateDb.php');
require_once ('component.php');
$database = new CreateDb();
$result = $database->getData();
echo print_r($result);
?>
<head>
    <link rel="stylesheet" href="shop.css" />
</head>

<body>
    <nav>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
        </head>

        <div class="header">
            <div class="nav-header">
             <div>
                <img src="logo.png" alt="" height="4px"class="logo">
            </div>
            
            <div class="login-icon">
                <img src="https://raw.githubusercontent.com/dizas9/CSS-UI-Practices/main/BBC-HomePage/icons/sign-in-user-name.png" alt="" class="login-user-icon">
                <span style="padding: 0.5rem;"><a href="login.html"><h1 style="color: white;">SIGN IN</h1></a></span>
            </div>  
            <div class="nav-list">
                <li><a href="home.html">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li class="dropdown">
                    <a href="#">Shop</a>
                    <div class="dropdown-content">
                      <a href="#">ADOBE</a>
                      <a href="#">WINZIP</a>
                      <a href="#">TALLY</a>
                      <a href="#">ANY DESK</a>
                      <a href="#">MICROSOFT</a>
                    </div>
                  </li>
                <li><a href="">Software Type</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="./user_page.php">Welcome <span><?php 
                    if(isset($_SESSION['user_name'])){
                        echo $_SESSION['user_name']; 
                    }else{
                        
                        echo "user";
                    }
                    
                   ?>
            </div>   
            <div class="search-section">
                
                <input type="search" placeholder="Search Software" >
            </div>  
            </div>
            
        </div>

    <section class="welcome">
        <h1 style="color: greenyellow;">Shop for your favorite Software products.</h1>
    </section>

    <section class="product-mac">
        <div class="container">
            <h2 style="font-size: xx-large; font-family: Arial, Helvetica, sans-serif;">ADOBE</h2>
            <div class="grid">
                <div class="grid-product">
                    <img src="https://www.dolphincomputer.co.in/wp-content/uploads/2019/02/After-Effects-CC.png">
                    <div class="grid-detail">
                        <p>Adobe After-Effects</p>
                        <p>From: ₹2,913.00 for 1 month (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img src="https://www.dolphincomputer.co.in/wp-content/uploads/2019/01/Adobe_Acrobat_DC_Icon.png">
                    <div class="grid-detail">
                        <p>Adobe Acrobat Pro For Teams</p>
                        <p>From: ₹1,875.00 for 1 month (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img src="https://www.dolphincomputer.co.in/wp-content/uploads/2019/01/adobe-animate-cc.png">
                    <div class="grid-detail">
                        <p>Adobe Animate CC For Teams</p>
                        <p>From: ₹2,913.00 / month (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2022/01/Adobe-Captivate-for-Teams.png">
                    <div class="grid-detail">
                        <p>Adobe Captivate For Teams</p>
                        <p>From: ₹2,913.00 for 1 month (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img src="https://www.dolphincomputer.co.in/wp-content/uploads/2019/01/au.jpg">
                    <div class="grid-detail">
                        <p>Adobe Audition CC For Teams</p>
                        <p>From: ₹2,913.00 for 1 month (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img src="https://www.dolphincomputer.co.in/wp-content/uploads/2019/01/cloud.jpg">
                    <div class="grid-detail">
                        <p>Adobe Creative Cloud For Teams All Apps</p>
                        <p>From: ₹6,839.00 for 1 month (Inclusive of GST)</p>
                    </div>
                </div> <!--end grid-product-->
            </div> <!--end grid-->
        </div> <!--end container-->
    </section>


    <section class="product-iphone">
        <div class="container">
            <h2>MICROSOFT</h2>
            <div class="grid">
                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2021/02/Microsoft-Business-Apps-1.png">
                    <div class="grid-detail">
                        <p>Microsoft 365 Apps For Business| 12-Month Subscription</p>
                        <p>From ₹9,204.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2021/02/Office-365-Enterprise-E1.png">
                    <div class="grid-detail">
                        <p>Office 365 E1 | 12-Month Subscription</p>
                        <p>From ₹11,215.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2021/02/Windows11-pro-1.jpg">
                    <div class="grid-detail">
                        <p>Windows 11 Pro - Legalization Get Genuine</p>
                        <p>From ₹16,515.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2022/10/Office-LTSC-Standard-2021-1.jpg">
                    <div class="grid-detail">
                        <p>Office LTSC Standard 2021</p>
                        <p>From ₹39,000.00 (Inclusive of GST)</p>
                    </div>
                </div>
            </div> <!--end grid-->
        </div> <!--end container-->
    </section>



    <section class="product-watch">
        <div class="container">
            <h2>WINZIP</h2>
            <div class="grid">
                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2020/04/61usrz2VgGL._AC_SL1500_.jpg">
                    <div class="grid-detail">
                        <p>WinZip 28 Pro | File Management, Encryption, Compression & Backup Software</p>
                        <p>From ₹4,450.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2021/02/615nFPrrzaL._AC_SL1500_-768x768.jpg">
                    <div class="grid-detail">
                        <p>WinZip 28 Standard | File Management, Encryption & Compression Software</p>
                        <p>From ₹3,200.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2022/06/WinZip-Enterprise-2.jpg">
                    <div class="grid-detail">
                        <p>WinZip Enterprise | Manage, Encrypt, Zip & Securely Share Files</p>
                        <p>From ₹6,900.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2021/02/61ZZjBNtQjL._AC_SL1500_.jpg">
                    <div class="grid-detail">
                        <p>WinZip Mac | Encryption, Compression & File Manager Software</p>
                        <p>From ₹3,200.00 (Inclusive of GST)</p>
                    </div>
                </div>

                <div class="grid-product">
                    <img
                        src="https://www.dolphincomputer.co.in/wp-content/uploads/2020/04/616EbZGeWhL._AC_SL1500_.jpg">
                    <div class="grid-detail">
                        <p>WinZip Mac Pro 10 | Encryption, Compression, File Manager & Backup Software</p>
                        <p>From ₹4,450.00 (Inclusive of GST)</p>
                    </div>
                </div><!--end grid-product-->
            </div> <!--end grid-->
        </div> <!--end container-->
    </section>  
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-main">
            <div class="footer-detail">
                <p>Prices are inclusive of VAT. Free delivery for all orders.</p>
                <p>*Total order value must be less than 30,000 THB. Admin fee may be charged by bank/processing entity
                    in addition to order value.</p>
                <p>**For approved customers only. Subject to approval. For more information, see <a
                        href="#">http://www.apple.com/th-en/help/payments.</a></p>
            </div> <!-- end footer detail -->

            <div class="footer-welcome">
                <i class="fab fa-apple"></i>
                <i class="fas fa-chevron-right"></i>
                <p>Welcome to the Apple Store</p>
            </div> <!-- end footer-welcome -->

            <div class="footer-ul">
                <ul>
                    <li>
                        <h4>Shop and Learn</h4>
                    </li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">iPad</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Apple Watch</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">iTunes</a></li>
                    <li><a href="#">iPod Touch</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gift Cards</a></li>
                </ul>

                <ul>
                    <li>
                        <h4>Apple Store</h4>
                    </li>
                    <li><a href="#">Apple Store App</a></li>
                    <li><a href="#">Financing</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shopping Help</a></li>
                </ul>

                <ul>
                    <li>
                        <h4>For Education</h4>
                    </li>
                    <li><a href="#">Apple and Education</a></li>
                    <li><a href="#">Shop for College</a></li>
                    <li id="mt">
                        <h4>For Business</h4>
                    </li>
                    <li><a href="#">Apple and Business</a></li>
                    <li><a href="#">shop for Business</a></li>
                </ul>

                <ul>
                    <li>
                        <h4>Account</h4>
                    </li>
                    <li><a href="#">Manage Your Apple ID</a></li>
                    <li><a href="#">Apple Store Account</a></li>
                    <li><a href="#">iClound.com</a></li>
                    <li id="mt">
                        <h4>Apple Values</h4>
                    </li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Environment</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Supplier Responsibility</a></li>
                </ul>

                <ul>
                    <li>
                        <h4>About Apple</h4>
                    </li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Apple</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <p>More ways to shop: visit an <a href="#">Apple Store, </a>Call 001‑800‑65‑6957, or <a href="#">find a
                        seller</a></p>
            </div>
            <div class="footer-copyright">
                <p>Copyright © 2019 Apple Inc. All rights reserved.</p>

                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <div class="vr"></div>
                    <li><a href="#">Terms of Use</a></li>
                    <div class="vr"></div>
                    <li><a href="#">Sales and Refunds</a></li>
                    <div class="vr"></div>
                    <li><a href="#">Legal</a></li>
                    <div class="vr"></div>
                    <li><a href="#">Sitemap</a></li>
                </ul>

                <div class="footer-lang">
                    <div class="circle">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_Thailand.svg/1200px-Flag_of_Thailand.svg.png">
                    </div>
                    <p>ไทย</p>
                    <div class="vr"></div>
                    <p>ภาษาไทย</p>
                </div>
            </div>

        </div>
    </footer>
</body>