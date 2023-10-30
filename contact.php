<head>
  <link rel="stylesheet" href="contact.css" />
</head>

<body>
  <nav>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    </head>

    <body>

      <ul>
        <li class="dropdown">
          <a href="#"><i class="fab fa-apple"></i></a>
        </li>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.html">About</a></li>
        <li><a href="contact.php">Contact</a></li>
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
  <div class="container">
    <div class="innerwrap">

      <section class="section1 clearfix">
        <div class="textcenter">

          <span class="seperator"></span>
          <h1>Contact Us</h1>
        </div>
      </section>

      <section class="section2 clearfix">
        <div class="col2 column1 first">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.601444145161!2d72.8860211749002!3d19.081253182124417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8866a456c9f%3A0x8d1745d15baac575!2sDon%20Bosco%20Institute%20of%20Technology%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1696832837372!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
            <div id='gmap_canvas' style='height:100%;width:100%;'></div>
            <div><small><a href="http://embedgooglemaps.com"> embed google maps </a></small></div>
            <div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div>
            <style>
              #gmap_canvas img {
                max-width: none !important;
                background: none !important
              }
            </style>
          </div>
          <script
            type='text/javascript'>function init_map() { var myOptions = { zoom: 14, center: new google.maps.LatLng(19.075314480255834, 72.88153973865361), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(19.075314480255834, 72.88153973865361) }); infowindow = new google.maps.InfoWindow({ content: '<strong>My Location</strong><br>mumbai<br>' }); google.maps.event.addListener(marker, 'click', function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
        <div class="col2 column2 last">
          <div class="sec2innercont">
            <div class="sec2addr">
              <p>Premier Automobiles Road Opp. HDIL Premier Exotica, Kurla, Mumbai, Maharashtra 400070</p>
              <p><span class="collig">Phone :</span>+91 8833836980</p>
              <p><span class="collig">Email :</span> chrisgadekar@gmail.com</p>
              <p><span class="collig">Fax :</span> +91 9768850839</p>
            </div>
          </div>
          <div class="sec2contactform">
            <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
            <form method="POST" action="process_contact.php">
              <label for="first_name">First Name:</label>
              <input type="text" name="first_name" required><br>
              
              <label for="last_name">Last Name:</label>
              <input type="text" name="last_name" required><br>
              
              <label for="email">Email:</label>
              <input type="email" name="email" required><br>
              
              <label for="contact_number">Contact Number :</label>
              <input type="text" name="contact_number" id="contact_number" pattern="[0-9]{10}">

              
              <label for="message"><br>Message:</br></label>
              <textarea name="message" rows="4" required></textarea><br>
              
              <input type="submit" name="submit" value="Submit" >
          ` </form>
          

          </div>

        </div>
      </section>
      <link rel="stylesheet" href="feedback.css" />
     

    </div>
  </div>
  
</body>