<?php 

include("headernewest.php"); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Index</title>

    
</head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active1 {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>


<div class="slideshow-container">

 
  
 

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="sl.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="sl2.jpg" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="sl3.jpg" style="width:100%">
  
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    <?php ?>

    <div class="container-sm mt-5" >
        <div class="row">
            <div class="col-lg-3">
<form action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="earring1.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Mirror Earrings </h5>
    <p class="card-text">Price: Rs.9,990</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Mirror Earrings">
    <input type="hidden" name="Price" value="9990">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="wristwear1.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Wristwear </h5>
    <p class="card-text">Price: Rs.8,990</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Wristwear">
    <input type="hidden" name="Price" value="8990">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="necklace.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title ">Necklace </h5>
    <p class="card-text">Price: Rs.10,990</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Necklace">
    <input type="hidden" name="Price" value="10990">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="ring.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Pearl Fan Ring </h5>
    <p class="card-text">Price: Rs.5,990</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Pearl Fan Ring">
    <input type="hidden" name="Price" value="5990">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="handcuff.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Emerald Doublet Bracelet </h5>
    <p class="card-text">Price: Rs.6,990</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Emerald Doublet Bracelet">
    <input type="hidden" name="Price" value="6990">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="neclace2.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Polki Necklace </h5>
    <p class="card-text">Price: Rs.11,33,000</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Polki Necklace">
    <input type="hidden" name="Price" value="1133000">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="earring3.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Hera Pearl Hoop </h5>
    <p class="card-text">Price: Rs.9,499</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Hera Pearl Hoop ">
    <input type="hidden" name="Price" value="9499">
  </div>
            </div>
</form>
        </div>
        <div class="col-lg-3">
<form  action="manage_cartnew.php" method="POST">
            <div class="card" style="width: 18rem;">
  <img src="ring2.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Diamond Finger Ring </h5>
    <p class="card-text">Price: Rs.1,16,720</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Diamond Finger Ring ">
    <input type="hidden" name="Price" value="116720">
  </div>
            </div>
</form>
        </div>      


    </div>
</body>


<footer>
<div class="row primary">
  <div class="column about">

  <h3 style="font-family:Candara">RIWAAYAT</h3>

   <p style="font-family:Candara">
   Become an Riwaayat Insider and get access to exclusive services like early access to our sale, free 
   <br>shipping on all your orders, personal styling consultations, newsletters and trend updates.
  </p>

  <div class="social">
    <i class="fa-brands fa-facebook-square"></i>
    <i class="fa-brands fa-instagram-square"></i>
    <i class="fa-brands fa-twitter-square"></i>
    <i class="fa-brands fa-youtube-square"></i>
    <i class="fa-brands fa-whatsapp-square"></i>
  </div>
</div>




<div class="column links">
  <h3 style="font-family:Candara">Some links  </h3>
   <ul >
    <li>
     <a href="#faq" style="font-family:Candara">F.A.Q</a>
    </li>
    <li>
     <a href="#cookies-policy" style="font-family:Candara">Cookies Policy</a>
    </li>
    <li>
    <a href="#terms-of-services" style="font-family:Candara">Terms Of Service</a>
    </li>
    <li>
    <a href="#support" style="font-family:Candara">Support</a>
    </li>
  </ul>
</div>

<div class="column subscribe">
 <h3 style="font-family:Candara">Newsletter</h3>
  <div>
   <input type="email" placeholder="Your email id here" />
   <button>Subscribe</button>
  </div>

</div>

</div>

<div class="row copyright">
  <div class="footer-menu">

  
  <a href="">About</a>
  <a href="">Contact</a>
  <a href="">Blog</a>
  <a href="">Social</a>

  </div>
   <p>Copyright &copy; 2021 Riwaayat</p>
</div>
</footer>

</html>