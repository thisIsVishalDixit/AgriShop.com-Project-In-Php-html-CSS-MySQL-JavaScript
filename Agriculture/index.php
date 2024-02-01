
<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to signin page if not logged in
    header('location:signin.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store By Agriculture Product</title>

    <!-- code for font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- code for font awesome cdn -->

      <!-- code for linkin css file -->
      <link rel="stylesheet" href="css/style.css">
        <!-- code for linking css file -->

        <!-- for responsive size min max -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- for google translate------------------------ -->
        
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        

        
</head>

<body>
<!-- header section -->
<header class = " header">
  <a href="#" class ="logo"><i class="fa fa-pagelines"></i>Agriculture</a>


 
    <!-- <a href="#"class = "logo"><i class="fad fa-wheat"></i> Agriculture</a> -->

    <nav class = "navbar">
        <a href="index.php">Home</a>
        <a href="feature.html">Features</a>
        <a href="product.html">Products</a>
        <a href="categories.html">Categories</a>
        <a href="review.html">Review</a>
        <a href="blogs.html">Blogs</a>
    </nav>


    

    <div class="trans">
      <div id="google_translate_element"></div>
    </div>

<!-- __________________________translate------------- -->
<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>


<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_translate_element");
  }
  </script>




    <div class="icons">
        <div class="fa fa-bars" id="menu-btn"></div>
        <div class="fa fa-search" id="search-btn"></div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
        <a href="./mycart.php" class="btn primary-btn">My Cart (<?php echo $count; ?>)</a> 
        <a href="signin.html"><div class="fa fa-user" id="login-btn"></div> </a> 
    </div>

  

  <!-- for search bar -->
    <form class="search-form">
        <input type="search" id="search-box" placeholder="Search Here..">
        <label for="search-box" class="fa fa-search"></label>
    </form>






</header>

<!-- header section -->





<!-- ________________________________________________________________ -->
<!-- Banner section -->
<section class="Home" id="Home">
  <div class="content">
    <h3>Fresh And <span>Organic</span> Products For You</h3>
    <p>Through This Website, We Want To Help Our Users So That They Can Buy And Sell Their Goods.</p>

    <a href="product.html" class="btn">Shop Now</a>
    <br>
    <br><a href="farmer.html" class="btn">Farmer Section</a>
  </div>
</section>


<!-- Banner Section -->






<!-- feature Section -->
<section class="features" id="features">
  <h1 class="heading">Our <span>Features</span></h1>

  <div class="box-container">
    <div class="box">

      <!-- ______________________________Fresh and Organic vali image_______________ -->
      <img src="image/feature-img-1.png">
      <h3>Fresh And Organic</h3>
      <p>At fresh and organic delivery, we aim to deliver premium quality groceries and daily essentials at your doorstep so that you can stay safe without compromising on your health.</p>
       <a href="#" class="btn">read more</a>
    </div>


    <div class="box">

      <!-- ______________________________Fvali image_______________ -->
      <img src="image/feature-img-2.png">
      <h3>Free Delivery</h3>
      <p>We believe in keeping things simple and transparent, which is why we offer free delivery on all orders. No minimum purchase required, no hidden fees – just straightforward, hassle-free shipping to your doorstep.</p>
       <a href="#" class="btn">read more</a>
    </div>
          

    <div class="box">

      <!-- ______________________________Fresh and Organic vali image_______________ -->
      <img src="image/feature-img-3.png">
      <h3>Easy Payments</h3>
      <p> we have a secure and user-friendly payment gateway. Our online payment process is designed to be smooth, fast, and hassle-free. You can use various options such as credit cards, debit cards, net banking, and digital wallets...</p>
       <a href="#" class="btn">read more</a>
    </div>

    
  </div>

</section>

<!-- feature Section -->



<!-- Product Section -->
<!-- Product Section                     Check karna hai kuchh erroor if we remove swiper- youtube video 18  -->
<section class="products" id="products">
  <h1 class="heading">our <span>products</span></h1>

  <div class="swiper product-slider">

    <div class="wrapper">
      <form action ="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-1.png" >
        <h1>fresh orange</h1>
        <div class="price">₹120/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Orange">
        <input type="hidden" name="Price" value="120">
      </div>
    </form>

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-2.png" >
        <h1>fresh Onion </h1>
        <div class="price">₹80/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Onion">
        <input type="hidden" name="Price" value="80">
      </div>
      </form>
      

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-3.png" >
        <h1>fresh Corn</h1>
        <div class="price">₹65/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Corn">
        <input type="hidden" name="Price" value="65">
      </div>
      </form>

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-4.png" >
        <h1>fresh Cabbage</h1>
        <div class="price">₹40/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Cabbage">
        <input type="hidden" name="Price" value="40">
      </div>
      </form>
     

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-5.png" >
        <h1>fresh Potato</h1>
        <div class="price">₹40/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Potato">
        <input type="hidden" name="Price" value="40">
      </div>
      </form>

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-6.png" >
        <h1>fresh Avocado</h1>
        <div class="price">₹180/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Avocado">
        <input type="hidden" name="Price" value="180">
      </div>
      </form>

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-8.png" >
        <h1>fresh Lemon</h1>
        <div class="price">₹175/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Avocado">
        <input type="hidden" name="Price" value="175">
      </div>
      </form>

      <form action="manage_cart.php" method="post">
      <div class="swiper-slider box">
        <img src="image/product-7.png" >
        <h1>fresh Carrot</h1>
        <div class="price">₹50/-</div>
        <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
        <input type="hidden" name="Item_Name" value="fresh Carrot">
        <input type="hidden" name="Price" value="50">
      </div>
      </form>
  
  

    </div>
  </div>
 </section>

 <!-- review section -->
 <section class="review" id="review">
  <h1 class="heading">Customer's<span>Review</span></h1>

  <div class="swiper review-slider">
     <div class="swiper-wrapper">


         <div class="swiper-slider box">
             <img src="image/pic-1.png" >
             <p>I recently made my first purchase of vegetables, fruits from Agriculture.com and I must say, I'm extremely impressed! From the ordering process to the delivery, everything was seamless and exceeded my expectations.</p>
             <h3>Radesh Sharma</h3>
             <div class="stars">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half"></i>
               </div>
         </div>
         <div class="swiper-slider box">
          <img src="image/pic-2.png" >
          <p>Fresh produce & dairy delights delivered fast. User-friendly website, excellent service. Highly recommended for hassle-free shopping. Love it!</p>
          <h3>Sarita Singh</h3>
          <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              
            </div>
      </div>
      <div class="swiper-slider box">
        <img src="image/pic-3.png" >
        <p>Fresh produce, speedy delivery, secure payments. Shop now for quality vegetables, fruits, and dairy milk. Exceptional service guaranteed!</p>
        <h3>Jaypraksh</h3>
        <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>
    </div>
    <div class="swiper-slider box">
      <img src="image/pic-4.png" >
      <p>it's the best online grocery store I've ever come across! From fresh vegetables and juicy fruits to top-notch dairy milk products, this website has it all.</p>
      <h3>Diksha pandey</h3>
      <div class="stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
         
        </div>
     </div>
     </div>
  </div>

</section>

  <!-- review section -->


<!-- blog section -->
<section class="blogs" id="blogs">
  <h1 class="heading">Our<span>Blogs</span></h1>
<div class="box-container">   
   
  <div class="box">
      <img src="image/blog-1.Jpg">
      <div class="content">
          <div class="icons">
              <a href="#"><i class="fa fa-user"></i> Himanshu Mishra</a>
              <a href="#"><i class="fa fa-calendar"></i> 15 may 2023 </a>

          </div>
          <h3> Fresh And Organic Vegitabls and fruits </h3>
          <p>The word 'Organic' refers to something that originates naturally or derived from living matter. Organic farming is an ancient agricultural system that adopts an organic technique while using environmentally friendly pest management and biological fertilizers primarily derived from animal and plant waste and nitrogen-fixing crops. Organic...</p>
           <a href="https://www.agrivi.com/blog/word-food-safety-day/" class="btn">read more</a>        
      </div>
  </div>

  <div class="box">
      <img src="image/blog-2.jpg">
      <div class="content">
          <div class="icons">
              <a href="#"><i class="fa fa-user"></i>Nitin Patidar</a>
              <a href="#"><i class="fa fa-calendar"></i> 31 Dec 2022 </a>

          </div>
          <h3> Fresh And Organic Vegitabls and fruits </h3>
          <p>The word 'Organic' refers to something that originates naturally or derived from living matter. Organic farming is an ancient agricultural system that adopts an organic technique while using environmentally friendly pest management and biological fertilizers primarily derived from animal and plant waste and nitrogen-fixing crops. Organic...</p>
           <a href="https://www.earthytales.in/forum/methods-of-organic-farming" class="btn">read more</a>        
      </div>
  </div>

  <div class="box">
      <img src="image/blog-3.jpg">
      <div class="content">
          <div class="icons">
              <a href="#"><i class="fa fa-user"></i> Vishal Dikshit</a>
              <a href="#"><i class="fa fa-calendar"></i> 10 july 2023 </a>

          </div>
          <h3> Fresh And Organic Vegitabls and fruits </h3>
          <p>The word 'Organic' refers to something that originates naturally or derived from living matter. Organic farming is an ancient agricultural system that adopts an organic technique while using environmentally friendly pest management and biological fertilizers primarily derived from animal and plant waste and nitrogen-fixing crops. Organic...</p>
           <a href="https://www.agrivi.com/blog/fostering-sustainable-agriculture-with-agrivi-fms/" class="btn">read more</a>        
      </div>
  </div>
  <!-- <div class="box">
      <img src="image/blog-1.jpg">
      <div class="content">
          <div class="icons">
              <a href="#"><i class="fa fa-user"></i> Rakesh</a>
              <a href="#"><i class="fa fa-calendar"></i> 01 may 2020 </a>

          </div>
          <h3> Fresh And Organic Vegitabls and fruits </h3>
          <p>The word 'Organic' refers to something that originates naturally or derived from living matter. Organic farming is an ancient agricultural system that adopts an organic technique while using environmentally friendly pest management and biological fertilizers primarily derived from animal and plant waste and nitrogen-fixing crops. Organic...</p>
           <a href="#" class="btn">read more</a>        
      </div>
  </div> -->


</div>
</section>

<!-- blog section -->


<!-- footer section -->
<section class="footer">
  <div class="box-container">

    <div class="box">
     <h2> Agriculture <i class="fa fa-pagelines"></i></h2>
     <p>We want to help us for facing many types of problem in farmer and customer daily life</p>
    <div class="share">
      <a href="#" class="fa fa-whatsapp"></a>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      <!-- <a href="#" class="fa fa-linkdIn"></a> -->
      
    </div>
    </div>

    
    <div class="box">
      <h3> Contact info</h3>
       <a href="#" class="links"><i fa fa-phone-square> </i>+91 8878797380</a>  
       <a href="#" class="links"><i fa fa-phone> </i> </i>+91 8878797380</a>   
       <a href="#" class="links"><i fa fa-envelope> </i>Agriculture@help.in</a> 
       <a href="#" class="links"><i fa fa-map-pin> </i>Pashchim vihar east, New Delhi, 110063</a> 
    </div>

     
    <div class="box">
      <h3> Quick Links</h3>
      <a href="index.php" class="links"><i class="fa fa-arrow-right"></i>Home</a>
      <a href="feature.html" class="links"><i class="fa fa-arrow-right"></i>Features</a>
      <a href="product.html" class="links"><i class="fa fa-arrow-right"></i>Products</a>
      <a href="categories.html" class="links"><i class="fa fa-arrow-right"></i>Categories</a>
      <a href="review.html" class="links"><i class="fa fa-arrow-right"></i>Review</a>
      <a href="blogs.html" class="links"><i class="fa fa-arrow-right"></i>Blogs</a>
    
     </div>

     
    <div class="box">
      <h3> News Letters</h3>
       <p>Subscribe For Latest Updates</p>
       <input type="email" placeholder="Your Email" class="email">
       <input type="submit" value="Subscribe" class="btn">
       <img src="image/payment.png" class="=payment-img" >
     </div>
     </div>

     
  </div>
</section>
<!-- footer section -->




 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- code for linking  js file -->
 <script src = "js/script.js"></script>
  <!-- code for linking js file -->
  
  
</body>
</html>  