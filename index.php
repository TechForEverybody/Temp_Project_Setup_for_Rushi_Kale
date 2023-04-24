<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
  // user is logged in
  $link_text = $_SESSION['name'];

} else {
  // user is not logged in
  $link_text = "Login";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GreenStore</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php
  if(isset($_GET['success'])){
    echo "<script>alert('".$_GET['success']."')</script>";
  }
?>
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.html"><img src="https://i.ibb.co/kDVwgwp/logo.png" alt="RedStore" width="125px" /></a>
        </div>
        <nav>
          <ul id="MenuItems" >
            <?php if (isset($_SESSION['id']) && isset($_SESSION['name'])) { ?>
              <li><a href="profile.php"><?php echo $link_text; ?></a></li>
            <?php } else { ?>
              <li><a href="login1.php"><?php echo $link_text; ?></a></li>
            <?php } ?>
            
            <li><a href="contact_page.php">Contact</a></li>
            <li><a href="apointment.php">Appointment</a></li>
          </ul>
        </nav>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
          <h1>
            RECYCLE IT ALL <br />
            NO MATTER <br>
            HOW SMALL!
          </h1>
          <p style="text-align: left;">
            There is no such thing as 'away.' <br />When we throw anything away, it must go somewhere.
          </p>
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Book Appointment &#8594;</a>
        </div>
        <div class="col-2">
          <img  align="right" src="https://tse1.mm.bing.net/th?id=OIP.BgREIDXdDQiSHYmFP28LmwHaE8&pid=Api&P=0" alt="" />
        </div>
      </div>
    </div>
  </div>

  <!-- Featured categories -->
  <div class="categories">
    <h2 class="title">Our Services</h2>
    <div class="small-container">
      <div class="row">
        <div class="col-3">
        <img src="https://viagreen.co.in/media/SEO/slide.png" alt="" />
        <div>
          <h3>Corporate Services</h3>
          <p>Corporate organizations are bulk waste generators, 
            too, and responsible for a significant portion of pollution
             of the environment</p>
        </div>
      </div>
      <div class="col-3">
        <img src="https://tse1.mm.bing.net/th?id=OIP.O3uccwmu1iVTAUbuZ9tRlwHaEK&pid=Api&P=0" alt="" />
         <div>
          <h3>Convenient Pickup</h3>
          <p>We provides curbside trash pickup services for homeowners in Green, Ohio and throughout Summit 
            and Stark counties including. </p>
        </div>
      </div>
      <div class="col-3">
        <img src="https://tse4.mm.bing.net/th?id=OIP.TushUwhsStdMO0pQXie_mQHaEK&pid=Api&P=0" alt="" />
         <div>
          <h3>E-waste Events</h3>
          <p>This initiative trains waste pickers in India to collect electronic waste, such as computers and mobile
             phones, for safe disposal and recycling.</p>
        </div>
      </div>
    </div>  
  </div>
</div>

<!-- Featured products -->
<div class="small-container">
  <h2 class="title">Featured Products</h2>
  <div class="row">
    <div class="col-4">
        <?php
$nextPageUrl = "./products/product1.html";
?>
        <img src="https://www.greenhandle.in/images/cotton%20bag.jpg" alt="" />
        <h4><a href="<?php echo $nextPageUrl; ?>">Cotton Bags</a></h4>
      </a>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹277.00</p>
    </div>

    <div class="col-4">
        <?php
$nextPageUrl = "./products/product2.html";
?>
      <img src="https://www.greenhandle.in/images/cup-glass.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Cups And Glass</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹139.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product3.html";
?>
      <img src="https://www.greenhandle.in/images/plate-tray.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Plates And Trays</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹109.00</p>
    </div>  

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product4.html";
?>
      <img src="https://www.greenhandle.in/images/bio-pen-pencil.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Bio Pen And Pencils</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹399.00</p>
    </div>
  </div>
  <h2 class="title">Latest Products</h2>
  <div class="row">
    <div class="col-4">
       <?php
$nextPageUrl = "./products/product5.html";
?>
      
      <img src="https://www.greenhandle.in/images/book-diaries.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Books And Diaries</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹379.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product6.html";
?>
      <img src="https://www.greenhandle.in/images/shipping-box.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Shipping Boxes</a></h4>

      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹99.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product7.html";
?>
      <img src="https://www.greenhandle.in/images/gift-box.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Gift Boxes</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹199.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product8.html";
?>
      <img src="https://www.greenhandle.in/images/jute-pouch.jpg" alt="" />
    <h4><a href="<?php echo $nextPageUrl; ?>">Cotton Bags</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹500.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
       <?php
$nextPageUrl = "./products/product9.html";
?>
      
      <img src="https://www.greenhandle.in/images/paper-pouchs.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Paper Pouch</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹79.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product10.html";
?>
      
      <img src="https://www.greenhandle.in/images/tissue-paper.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Tissue And Paper</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹168.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product11.html";
?>
      <img src="https://www.greenhandle.in/images/nonwoven_bag.jpg" alt="" />
        <h4><a href="<?php echo $nextPageUrl; ?>">Nonwoven</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹29.00</p>
    </div>

    <div class="col-4">
       <?php
$nextPageUrl = "./products/product12.html";
?>
      <img src="https://www.greenhandle.in/images/hand-gloves.jpg" alt="" />
      <h4><a href="<?php echo $nextPageUrl; ?>">Hand Gloves</a></h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹189.00</p>
    </div>
  </div>
</div>
<!-- offer -->
<div class="offer">
  <div class="small-container">
    <div class="row">
      <div class="col-2">
        <img src="https://i.ibb.co/YjKW31B/2.jpg" alt="" class="offer-img" />
      </div>
      <div class="col-2">
        <h1>Take the power back.</h1>
        <small>We’re on a mission to eliminate energy waste and make Net Zero profitable.
          Our end-to-end energy management and energy efficiency services make achieving Net Zero
           possible and profitable for all organisations.</small>
        <br />
        <a href="#" class="btn">Get in touch &#8594;</a>
      </div>
    </div>
  </div>
</div>

<!-- Testimonial -->
<div class="testimonial">
  <div class="small-container">
    <div class="row">
      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          This growing mountain of garbage and trash represents not only an 
          attitude of indifference toward valuable natural resources, but also a serious
           economic and public health problem.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <img src="https://tse1.mm.bing.net/th?id=OIP.O5Lv6Voi6IX0sxjXozdPjgHaGL&pid=Api&P=0" alt="" />
        <h3>Jimmy Carter</h3>
      </div>

      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          If we destroy the biosphere, then mankind will die. We all waste our 
          time worrying about stupid wars and petty jealousy and greed, and all the time, 
          we're sitting on a time bomb.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <img src="https://tse2.explicit.bing.net/th?id=OIP.QuKi0Fv0IVd_-aa4XRM9OgHaHa&pid=Api&P=0" alt="" />
        <h3>Ron Moody</h3>
      </div>

      <div class="col-3">
        <i class="fas fa-quote-left"></i>
        <p>
          Waste is worse than loss. The time is coming when every 
          person who lays claim to ability will keep the question of waste 
          before him constantly. The scope of thrift is limitless.
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <img src="https://tse2.mm.bing.net/th?id=OIP.UGwg8b1zzNCVIWKOYDju6gHaHa&pid=Api&P=0" alt="" />
        <h3>Thomas A. Edison</h3>
      </div>
    </div>
  </div>
</div>
<!-- brands -->
<div class="brands">
    <h2 class="title">Suppliers</h2>

  <div class="small-container">
    <div class="row">
      <div class="col-5">
        <img src="https://i.ibb.co/Gfwzz1S/logo-godrej.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://tse4.mm.bing.net/th?id=OIP.MKZj63RESkWQgn6dLGCMFAHaC0&pid=Api&P=0" alt="" />
      </div>

      <div class="col-5">
        <img src="https://i.ibb.co/3zs234S/logo-coca-cola.png" alt="" />
      </div>

      <div class="col-5">
        <img src="https://tse4.mm.bing.net/th?id=OIP.3Oi-XK1XXc_jFDEnVKVd-AHaGU&pid=Api&P=0" alt="" />
      </div>

      <div class="col-5">
        <img src="https://i.ibb.co/GVSNwJD/logo-philips.png" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <p>Join our social community. </p>
        <div class="app-logo">
          <ul class="social-icons">
    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  </ul>
        </div>
      </div>

      <div class="footer-col-2">
        <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
        <p>
          We need to address our Nation's mounting garbage problem by generating less
          garbage, particularly paper waste.
        </p>
      </div>

      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Coupons</li>
          <li>Blog Post</li>
          <li>Return Policy</li>
          <li>Join Affiliate</li>
        </ul>
      </div>

      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>YouTube</li>
        </ul>
      </div>
    </div>
    <hr />
    <p class="copyright">Copyright &copy; 2023 - Red Store</p>
  </div>
</div>

<!-- js for toggle menu -->
<script>
  var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }
</script>
<!-- partial -->
  
</body>

</html>
