
<!doctype html>
    <html>
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RIWAAYAT</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="styleriw.css"> </head>
        <style>
              body{
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-image:url(bg1.jpg);
                background-size: cover;
            }
            .filbtn
            {
                color:mediumvioletred;  
    background: antiquewhite;
    padding: 15px;  
    margin-left: 10%;  
    align-items: right;
    text-align: center;
    width:70%;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-decoration-color: antiquewhite;
    border-radius: 30px;
    border-color: mediumvioletred;
    border: solid;
    font-size:20px;
            }
.obutton {
    background-color:black ;
    border: black;
     border-radius:5px ;
    border-style: solid;
    color:whitesmoke;
    padding: 5px 20px;
    text-align: center;
    text-decoration:wavy;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
    align-content: space-around;
    box-shadow: 0 12px 16px 0 rgba(175, 184, 15, 0.155),0 17px 50px 0 rgba(12, 28, 214, 0.19);          
 
}
.filterDiv {
      float:left;
      background-color:white;
      color: black;               
      width: 400px;
      line-height: 20px;
      text-align: center;
      margin: 1px;
      display: none;
      font-size: large;
    
    }

.imageColumn {
   float: left;
   width: 25%;
   padding: 5px;
}
.show {
      display: block;
    }
</style>
<body>

<div class="home_black_version">
        <header class="header_area header_black">
            <!--header top starts-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <li class="top_links">
                                      <a href="#">My Account <i class="ion-chevron-down"></i></a>  
                                      <ul class="dropdown_links">
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="mycartnew.php">Shopping Cart</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--header top ends-->

            <!--header middle starts-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="RIWAAYAT.html"><img src="RIWAAYAT.png" alt=""></a>
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7 col-6">
                                <div class="middle_right">
                                    <div class="search_btn">
                                    <a href="#"><i class="ion-ios-search"></i></a>
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            <button type="submit"><i class="ion-ios-search"></i></button>
                                        </form>
                                    </div>
                                    </div>
                                
                                <div class="wishlist_btn">
                                    <a href="#"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart-link">
                                    <a href="#"><i class="ion-android-cart"> </i>
                                        <span class="cart_text_quantity">Rs 67,598</span>
                                    <i class="ion-chevron-down"></i></a>
                                    <span class="cart_quantity">2</span>
                                </div>
                                <!--mini cart-->
                                <div class="mini_cart"> 1
                                    <div class="cart_close"> 2
                                        <div class="cart_text"> 3
                                            <h3>cart</h3>
                                        </div> 3 close
                                        <div class="mini_cart_close"> 4 4 close changes
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>  <!--shayad ise--> 2 close
                                     </div><!-- to get two itemsextra-->
                                    <div class="cart_item"> 5
                                        <div class="cart_img"> 6
                                            <a href="#"><img src="earring1.webp" alt=""></a>
                                        </div> 6 close
                                        <div class="cart_info"> 7
                                            <a href="#">Earings</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">Rs. 54,599 </span>
                                        </div> 7 close
                                        <div class="cart_remove"> 8
                                            
                                         8 close
                                        <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div> 5 close

                            <!--</div> newextra  remove this to go back to two items also the upper one-->
                            <div class="cart_item"> 9
                                <div class="cart_img"> 10
                                    <a href="#"><img src="wristwear1.webp" alt=""></a>
                                </div> 10 close
                                <div class="cart_info"> 11
                                    <a href="#">Bracelet</a>
                                    <span class="quantity">Qty: 1</span>
                                    <span class="price_cart">Rs. 12,599 </span>
                                </div> 11 close
                                <div class="cart_remove"> 12 
                                <a href="#"><i class="ion-android-close"></i></a>
                                </div>12 close
                            </div> 9 close
                           <!-- newwwextra-->
                            

                      <!--extra-->
                    <div class="cart_total"> 13
                        <span>Subtotal:</span>
                        <span>Rs. 67,599</span>
                    </div> 13 close
                    <div class="mini_cart_footer"> 14
                        <div class="cart_button view_cart"> 15
                            <a href="#">View Cart</a>
                        </div> 15 close
                        <div class="cart_button checkout"> 16
                            <a href="#"class="active">Checkout</a>
                            <!--</div>yaha laga do-->
                    </div> 16 close
                        </div> 14 close
                    </div>
                    <!--extra-->
                    <!--mini cart ends-->
                </div>
                </div>
               
            </div>
            
        </div>
        </div>
        <!--header middle ends-->
        <!--header bottom starts-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="logo_sticky">
                            <a href="#"><img src="RIWAAYAT.png" alt="logo"></a>
                        </div>
                        <div class="main_menu">
                        <nav>
                            <ul>
                                <li class="active">
                                    <a href="indexnew.php">Home <i class="ion-chevron-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="#">Colletions</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Discover</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop <i class="ion-chevron-down"></i></a>
                                    <ul class="mega_menu">
                                        <ul>
                                            <li><a href="Earings page.html">Earrings</a></li>
                                            <li><a href="neklace.html">Necklaces</a></li>
                                            <li><a href="banglemain.html">Wristwear</a></li>
                                            <li><a href="fingering.html">Rings</a></li>
                                        </ul> 
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Gifts <i class="ion-chevron-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="#">Most Gifted</a></li>
                                        <li><a href="#">Festive Gifting</a></li>
                                        <li><a href="#">Gift Card</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        </div>
                    </div>    
                    </div>
                </div>
            </div>
        </div>

         <!--header bottom starts-->

        </header>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="riwmain.js"></script>
    


    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="riwmain.js"></script>
    <script>
        filterSelection("")
        function filterSelection(c) {
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "") c = "";
          for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
          });
        }
        </script>

<!--filtering-->
<div id="myBtnContainer">
  <button class="obutton" onclick="filterSelection()">COLLECTIONS</button>

  <button class="obutton" onclick="filterSelection('hoops')"> HOOPS</button>
  <button class="obutton" onclick="filterSelection('studs')"> STUDS</button>
  <button class="obutton" onclick="filterSelection('jhumka')"> JHUMKA</button>
  </div>  

  <div class="row">
    <div class="imageColumn">
    <div class="container">
    <div class="filterDiv hoops" >
    <img src="https://cdn.shopify.com/s/files/1/0640/5167/5359/products/E2155-54-358_2_540x.jpg?v=1662117122"style="width:90%;color:black;">   
     <form action="hera pearl hoop.html">
    <button class="filbtn"  action=> <b><i>HERA PEARL HOOPS</i></b></button></form></div>
    </div></div>
        <div class="imageColumn">
        <div class="container">
        <div class="filterDiv hoops" >
        <img src="https://cdn.shopify.com/s/files/1/0640/5167/5359/products/E2156-54-358_2_540x.jpg?v=1662117137"style="width:90%;color:black;">   
         <form action="celestial hoops.php">  <button class="filbtn"  action=> <b><i>CELESTIAL LAPIS HOOPS</i></b></button></form></div>
        </div></div></div>


        <div class="row">
            <div class="imageColumn">
            <div class="container">
            <div class="filterDiv studs" >
            <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd355379.JPG"style="width:90%;color:black;">   
             <form action="gem stud.html">
            <button class="filbtn"  action=> <b><i>GEM STONE STUDS</i></b></button></form></div>
            </div></div>
            
                <div class="imageColumn">
                <div class="container">
                <div class="filterDiv studs" >
                <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd657a15.JPG"style="width:90%;color:black;">   
                 <form action="pearl stud.html">
                <button class="filbtn"  action=> <b><i>PEARL STUDS</i></b></button></form></div>
                </div></div>
              
                    <div class="imageColumn">
                    <div class="container">
                    <div class="filterDiv studs" >
                    <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/6310a5b817001.JPG"style="width:90%;color:black;">   
                     <form action="diamond stud.html">
                    <button class="filbtn"  action=> <b><i>DIAMOND STUDS</i></b></button></form></div>
                    </div></div>
                    
                        <div class="imageColumn">
                        <div class="container">
                        <div class="filterDiv studs" >
                        <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/6310a5ba12bd1.JPG"style="width:90%;color:black;">   
                         <form action="diamond round stud.html">
                        <button class="filbtn"  action=> <b><i>DIAMOND ROUND STUDS</i></b></button></form></div>
                        </div></div>
                        <div class="imageColumn">
                            <div class="container">
                            <div class="filterDiv studs" >
                            <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd3a45a2.JPG"style="width:90%;color:black;">   
                             <form action="shilp stud.html">
                            <button class="filbtn"  action=> <b><i>SHILP STUDS</i></b></button></form></div>
                            </div></div></div>

                            <div class="row">
                                <div class="imageColumn">
                                <div class="container">
                                <div class="filterDiv jhumka" >
                                <img src="https://staticimg.titan.co.in/Tanishq/Catalog/501719JBAABA29_1.jpg"style="width:90%;color:black;">   
                                 <form action="jhumka.html">
                                <button class="filbtn"  action=> <b><i>FLORAL JALLI JHUMKA</i></b></button></form></div>
                                </div></div></div>




   <div class="alignRow">
<div class="imageColumn">
<img src="https://cdn.shopify.com/s/files/1/0640/5167/5359/products/E2155-54-358_2_540x.jpg?v=1662117122"style="width:50%" hspace="10">
 <form action="hera pearl hoop.html" target=_self>
                <button class="obutton"  action=> <b><i>Hera Pearl Hoops</i></b></button></form>
</div>
<div class="imageColumn">
<img src="https://cdn.shopify.com/s/files/1/0640/5167/5359/products/E2156-54-358_2_540x.jpg?v=1662117137"style="width:50%">
 <form action="celestial hoops.html" target=_self>
                <button class="obutton"  action=> <b><i>Celestial Lapis Hoops</i></b></button></form></div>
                <div class="imageColumn">
                  <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd355379.JPG"style="width:50%">
                  <form action="gem stud.html" target=_self>
                <button class="obutton"  action=> <b><i>Gem Stone Studs</i></b></button></form></div>
                  <div class="imageColumn">
                  <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd657a15.JPG"style="width:50%">
                  <form action="pearl stud.html" target=_self>
                <button class="obutton"  action=> <b><i>Pearl Studs</i></b></button></form></div>
                 <div class="imageColumn">
                  <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/6310a5b817001.JPG"style="width:50%">
                  <form action="diamond stud.html" target=_self>
                <button class="obutton"  action=> <b><i>Diamond Studs</i></b></button></form></div>
                  <div class="imageColumn">
                <img src= "https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/6310a5ba12bd1.JPG"style="width:50%">
                  <form action="diamond round stud.html" target=_self>
                <button class="obutton"  action=> <b><i>Diamond round Studs</i></b></button></form></div>
                <div class="imageColumn">
                <img src="https://d2hazhkwxu3du8.cloudfront.net/production/images/pro_image/63108dd3a45a2.JPG" style="width:50%">
                <form action="shilp stud.html" target=_self>
                <button class="obutton"  action=> <b><i>Shilp Studs</i></b></button></form></div>
                 <div class="imageColumn">
                <img src="https://staticimg.titan.co.in/Tanishq/Catalog/501719JBAABA29_1.jpg" style="width:50%">
                <form action="jhumka.html" target=_self>
                <button class="obutton"  action=> <b><i>Floral Jalli Jhumka</i></b></button></form></div>

                 






        <body>