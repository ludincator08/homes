<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require('inc/links.php'); ?>
  
  <title><?= $general_r['site_title'] ?> - ABOUT</title>

  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>

</head>

<body class="bg-light">
  <!-- Header -->
  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <!-- <hr> -->
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Excepturi culpa officiis <br> aperiam eaque vitae non
      temporibus omnis quasi dolores odit.
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptate error aut, hic facere iste sequi vero?
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptate error aut, hic facere iste sequi vero?
        </p>
      </div>
      <!-- Img -->
      <div class="col-lg-5 col-md-4 mb-4 order-lg-2 order-md-2 order-1">
        <img src="images/about/about.jpg" alt="" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-between">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/hotel.svg" alt="" width="70px">
          <h4 class="mt-3">100+ FACILITIES</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/customers.svg" alt="" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/rating.svg" alt="" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="images/about/staff.svg" alt="" width="70px">
          <h4 class="mt-3">200+ SAFFS</h4>
        </div>
      </div>

    </div>
  </div>

  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
  <!-- Swiper (slider) -->
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <?php
          $about_r = selectAll('team_details');
          $path = ABOUT_IMG_PATH;

          while($row = mysqli_fetch_assoc($about_r)){
            echo <<< data
              <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                <img src="$path$row[picture]" style="height: 370px; width: 300px; " class="w-100">
                <h5 class="mt-2">$row[name]</h5>
              </div>
            data;
          }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

  <!-- Footer -->
  <?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
  </script>

</body>

</html>