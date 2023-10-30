<?php
require_once ('CreateDB1.php');
require_once ('component1.php');
// create instance of Createdb class
$database = new CreateDb("softwaredb", "productdb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trial</title>
  <link rel="stylesheet" href="list.css">
</head>
<body bgcolor=" #27276b">
<nav>
        <ul>
            <li class="dropdown">
                <a href="#"><i class="fab fa-apple"></i></a>
            </li>
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-content">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
                <div class="dropdown-content">
                    <a href="#">Cart</a>
                    <a href="#">Checkout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="event-container">
        <h3 class="year">LIST OF SOFTWARE</h3>
        <div class="row">
            <?php
                        $result = $database->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_desc'], $row['product_link'], !isset($_SESSION['user_name']));
                        }
                        ?>
                </div>
                    </div>
    <div>
        <a href = "addProduct.html"><button> ADD PRODUCT </button>
    </div>
</body>
</html>

