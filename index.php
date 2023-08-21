<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with Ollie landing page.">
  <meta name="author" content="Devcrud">
  <link rel="shortcut icon" href="assets/icons/prelogo_decodex.png" type="image/png">
  <title>DECODEX</title>

  <!-- font icons -->
  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
  <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.css">

  <!-- Bootstrap + Ollie main styles -->
  <link rel="stylesheet" href="assets/css/ollie.css">
  <link rel="stylesheet" href="assets/css/icons.css">
  <link rel="stylesheet" href="assets/css/decodex.css">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

  <div class="whatsapp">
    <a href="https://wa.me/59169801967" target="_blank">
      <ion-icon name="logo-whatsapp" size="large" style="color: #fff;"></ion-icon>
    </a>
  </div>


  <?php
    include('components/navegation.html');
    include('components/home.html');
    include('components/about.html');
    include('components/portfolio.html');
    include('components/testimonial.html');
    // include('components/blog.html');
    include('components/contact.html');
    include('components/footer.html');
  ?>

  <!-- core  -->
  <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

  <!-- bootstrap 3 affix -->
  <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

  <!-- Owl carousel  -->
  <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


  <!-- Ollie js -->

  <script src="assets/js/Ollie.js"></script>
  <script src="assets/js/email.js"></script>
  <dialog id='res-email'></dialog>
</body>

</html>