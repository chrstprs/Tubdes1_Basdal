<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Selamat datang di K1Cafe, tempat di mana kami menghadirkan pengalaman santai dengan hidangan lezat dan suasana yang hangat. Kami menyajikan menu yang dirancang dengan cermat, mulai dari sarapan hingga camilan ringan, semua disiapkan dengan bahan-bahan berkualitas.
             Suasana cafe kami yang nyaman dan ramah membuat setiap kunjungan Anda menjadi istimewa. Kami mengundang Anda untuk menikmati momen santai dan berbagi cerita di K1Cafe.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Manjakan diri Anda dengan pilihan kuliner yang tiada habisnya, tepat di ujung jari Anda</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Pengiriman secepat kilat yang mengalahkan rasa lapar Anda.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Makan malam seperti seorang raja, tanpa meninggalkan sofa Anda.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>K1Cafe adalah tempat yang luar biasa untuk makan malam! Pelayanan ramah, hidangan lezat, dan atmosfir yang nyaman. 
               Sangat direkomendasikan untuk pengalaman kuliner yang istimewa di Kota ini</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>K1Cafe adalah surga bagi pecinta pizza! Hidangan pizza mereka sangat autentik dengan adonan yang renyah dan topping yang melimpah. 
               Suasana restorannya cozy dan sempurna untuk makan santai. Layanannya cepat dan ramah. Pasti akan kembali lagi!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Katrina</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>K1Cafe adalah tempat yang nyaman untuk menikmati kopi dan camilan ringan! Mereka menawarkan berbagai pilihan kopi yang segar dan hidangan ringan yang lezat. 
               Suasana cafe sangat cozy dengan dekorasi yang menarik.  Stafnya ramah dan pelayanannya cepat. Pasti tempat yang saya rekomendasikan untuk bersantai santai!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mikel</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>K1Cafe adalah tempat yang cocok untuk menghabiskan waktu santai sambil menikmati kopi yang segar. 
               Atmosfernya sangat menyenangkan dengan pencahayaan yang lembut dan dekorasi yang minimalis. 
               Kopi mereka memiliki rasa yang kaya dan beragam, dan pilihan camilan mereka juga memuaskan.
                Pelayanan dari stafnya ramah dan efisien. Pasti akan kembali lagi!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kevin</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>K1Cafe adalah tempat yang sempurna untuk bersantai sambil menikmati kopi yang berkualitas. 
               Suasana cafe sangat menyenangkan dengan dekorasi yang modern dan penuh dengan cahaya alami. Kopi mereka memiliki rasa yang segar dan disajikan dengan sempurna. 
               Pilihan camilan ringan juga cukup menggugah selera. Pelayanan stafnya sangat ramah dan membantu. Saya pasti akan merekomendasikan K1Cafe kepada teman-teman saya!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ijat</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>