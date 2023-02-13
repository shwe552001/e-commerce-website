<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIWAAYAT</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="styleriw.css"> 
    <link rel="stylesheet" href="footerstyle.css"> 
   
    <script type="text/JavaScript" src="main.js"></script>


</head>
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
                                <a href="RIWAAYAT.html"><img src="riwlogo.png" alt="" width="200" height="150"></a>
                                    
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
                                <?php
                                     $count=0;
                                    if(isset($_SESSION['cart']))
                                    {
                                        $count=count($_SESSION['cart']);
                                    }
                                    ?>
                                    <?php
                                     $total=0;
                                     if(isset($_SESSION['cart']))
                                    {
                                    foreach($_SESSION['cart'] as $key => $value)
                                 {
                                  $total=$total+$value['Price'];
                                }
                            } 
                            ?>
                                    <a href="mycartnew.php"><i class="ion-android-cart"> </i>
                                        <span class="cart_text_quantity">Rs <?php echo $total;?> </span>
                                    <i class="ion-chevron-down"></i></a>
                                    <span class="cart_quantity"><?php echo $count;?></span>
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
                                            <li><a href="Earings page.php">Earrings</a></li>
                                            <li><a href=necklace.html">Necklaces</a></li>
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
   <script type="text/JavaScript" src="main.js"></script>

   
</body>


</html>