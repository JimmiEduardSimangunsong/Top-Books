<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Web</title>
  <link rel="stylesheet" href="assets/main.css" />
  <!-- icon -->
  <link rel="icon" href="assets/icon.ico">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- internal css -->
  <style>
    .card {
      margin-bottom: 30px;
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid transparent;
      border-radius: 0;
    }

    .card .card-subtitle {
      font-weight: 300;
      margin-bottom: 10px;
      color: black;
    }

    .table-product.table-striped tbody tr:nth-of-type(odd) {
      background-color: #f3f8fa !important;
    }

    .table-product td {
      border-top: 0px solid #dee2e6 !important;
      color: #728299 !important;
    }

    .card-title {
      color: black !important;
      font-weight: bold !important;
      font-size: 18px !important;
    }

    .card-text {
      color: white !important;
    }

    .gugur {
      position: relative;
      width: 100%;
      height: 80vh;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 100px;
    }

    .gugur .set {
      position: absolute;
      width: 100%;
      height: 100%;
      border-top: 0;
      left: 0;
      pointer-events: none;
    }

    .gugur .set div {
      position: absolute;
      display: block;
    }

    .gugur .set div:nth-child(1) {
      left: 20%;
      animation: animate 15s linear infinite;
      animation-delay: -7s;
    }

    .gugur .set div:nth-child(2) {
      left: 50%;
      animation: animate 20s linear infinite;
      animation-delay: -5s;
    }

    .gugur .set div:nth-child(3) {
      left: 70%;
      animation: animate 20s linear infinite;
      animation-delay: 0s;
    }

    .gugur .set div:nth-child(4) {
      left: 0%;
      animation: animate 15s linear infinite;
      animation-delay: -5s;
    }

    .gugur .set div:nth-child(5) {
      left: 85%;
      animation: animate 18s linear infinite;
      animation-delay: -10s;
    }

    .gugur .set div:nth-child(6) {
      left: 0%;
      animation: animate 12s linear infinite;
    }

    .gugur .set div:nth-child(7) {
      left: 15%;
      animation: animate 14s linear infinite;
      animation-delay: -10s;
    }

    .gugur .set div:nth-child(8) {
      left: 60%;
      animation: animate 15s linear infinite;
    }

    .gugur:hover .set div {
      animation-play-state: paused;
    }

    @keyframes animate {
      0% {
        opacity: 0;
        top: -10%;
        transform: translateX(20px) rotate(0deg);
      }

      10% {
        opacity: 1;
      }

      20% {
        transform: translateX(-20px) rotate(45deg);
      }

      40% {
        transform: translateX(-20px) rotate(90deg);
      }

      60% {
        transform: translateX(20px) rotate(180deg);
      }

      80% {
        transform: translateX(-20px) rotate(180deg);
      }

      100% {
        top: 110%;
        transform: translateX(-20px) rotate(225deg);
      }
    }

    .set2 {
      transform: scale(2) rotate(180deg);
      filter: blur(2px);
    }

    .set3 {
      transform: scale(2) rotate(180deg);
      filter: blur(4px);
    }

    .konten1 {
      height: 350px;
      width: 100%;
      background-image: url(gambar/cover.jpg);
      background-attachment: fixed;
      position: relative;
      background-size: cover;
      background-position: center;
      margin-bottom: 20px;
    }

    .penjelas {
      display: grid;
      grid-template-areas:
        "ket1"
        "ket2";
    }

    .ket1 {
      grid-area: ket1;
      padding: 10px;
      margin-top: 40px;
      background-color: #fff;
      opacity: 0.8;
      margin-left: 100px;
      width: 300px;
      height: 50px;
      transform: rotate(2deg);
    }

    .ket1 h2 {
      color: black;
      text-align: center;
      font-size: 16px;
    }

    .ket2 {
      opacity: 0.8;
      grid-area: ket2;
      padding: 30px;
      margin-top: 15px;
      background-color: yellow;
      margin-left: 100px;
      max-width: 45%;
      transform: rotate(-3deg);
    }

    .ket {
      margin-top: 60px;
    }

    .ket2 h2 {
      color: black;
      text-align: left;
      font-size: 2.4vh;
    }

    .konten1 .penjelas {
      position: absolute;
    }

    .nav-link {
      font-family: Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 20px;
      font-weight: 500 !important;
      color: #fff;
    }

    .nav-item a:hover {
      color: red !important;
      font-family: Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 20px;
      font-weight: 500;
    }

    .nav-item {
      margin: 0 10px;
    }

    .active {
      color: red !important;
    }

    .slidertop .onetitle {
      font-family: YouTube Sans, Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 30px;
      font-weight: 700;
    }

    .onetitle {
      font-family: YouTube Sans, Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 30px;
      font-weight: 700;
      color: black !important;
      margin-bottom: 30px !important;
    }

    .card {
      border: none !important;
      border-radius: 0 !important;
      color: white !important;
    }

    .card-body {
      padding-left: 0 !important;
    }

    .nice-keren {
      padding-left: 10px !important;
    }

    .card p {
      color: grey !important;
      font-size: 14px !important;
      font-weight: bold !important;
    }

    #loader-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1000;
    }

    #loader {
      display: block;
      position: relative;
      left: 50%;
      top: 50%;
      width: 150px;
      height: 150px;
      margin: -75px 0 0 -75px;

      border: 3px solid #3498db;
      z-index: 1500;
    }

    #loader:before {
      content: "";
      position: absolute;
      top: 5px;
      left: 5px;
      right: 5px;
      bottom: 5px;
      border: 3px solid #e74c3c;
    }

    #loader:after {
      content: "";
      position: absolute;
      top: 15px;
      left: 15px;
      right: 15px;
      bottom: 15px;
      border: 3px solid #f9c922;
    }

    /* change border to transparent and set only border-top to a solid color */
    #loader {
      -webkit-animation: spin 1.5s linear infinite;
      animation: spin 1.5s linear infinite;
      border: 3px solid transparent;
      border-top-color: #3498db;
    }

    #loader:before {
      -webkit-animation: spin 1.5s linear infinite;
      animation: spin 1.5s linear infinite;
      border: 3px solid transparent;
      border-top-color: #e74c3c;
    }

    #loader:after {
      -webkit-animation: spin 1.5s linear infinite;
      animation: spin 1.5s linear infinite;
      border: 3px solid transparent;
      border-top-color: #f9c922;
    }

    #loader {
      border-radius: 50%;
    }

    #loader:before {
      border-radius: 50%;
    }

    #loader:after {
      border-radius: 50%;
    }

    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);
        /* IE 9 */
        transform: rotate(0deg);
        /* Firefox 16+, IE 10+, Opera */
      }

      100% {
        -webkit-transform: rotate(360deg);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);
        /* IE 9 */
        transform: rotate(360deg);
        /* Firefox 16+, IE 10+, Opera */
      }
    }

    @keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);
        /* IE 9 */
        transform: rotate(0deg);
        /* Firefox 16+, IE 10+, Opera */
      }

      100% {
        -webkit-transform: rotate(360deg);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);
        /* IE 9 */
        transform: rotate(360deg);
        /* Firefox 16+, IE 10+, Opera */
      }
    }

    .card-img-top {
      max-height: 300px !important;
    }

    .navbar {
      transition: background 1s;
      color: #fff !important;
      /* background: lightskyblue !important; */
      /* control how smooth the background changes */

      background: linear-gradient(267deg, #58a5e5, #1ecc43, #af1ecc);
      background-size: 1000% 1000%;

      -webkit-animation: AnimationName 10s ease infinite;
      -moz-animation: AnimationName 10s ease infinite;
      animation: AnimationName 10s ease infinite;
    }

    @-webkit-keyframes AnimationName {
      0% {
        background-position: 0% 29%
      }

      50% {
        background-position: 100% 72%
      }

      100% {
        background-position: 0% 29%
      }
    }

    @-moz-keyframes AnimationName {
      0% {
        background-position: 0% 29%
      }

      50% {
        background-position: 100% 72%
      }

      100% {
        background-position: 0% 29%
      }
    }

    @keyframes AnimationName {
      0% {
        background-position: 0% 29%
      }

      50% {
        background-position: 100% 72%
      }

      100% {
        background-position: 0% 29%
      }
    }

    .scrolled {
      background: rgba(0, 0, 0, 0.9) !important;
    }

    @media screen and (max-width: 768px) {
      .ket2 {
        max-width: 70%;
      }


    }
  </style>
</head>

<body style="background-color: white; top:0">
   <!-- <div id="loader-wrapper" style="background-color: black;">
    <div id="loader"></div>
  </div>  -->
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg">
    <div class=" container-fluid">
      <a class="navbar-brand" href="index.php" style="vertical-align: middle">
        <h3>JIC Book</h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#topBook">Top Book</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#topNovel">Top Novel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#bookList">Book List</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" target="_blank" href="http://localhost/bookpw5/queryrdf/viewRDF.php?data=http://localhost/bookpw5/Data/booksss.rdf">Top Book RDF</a></li>
              <li><a class="dropdown-item" target="_blank" href="http://localhost/bookpw5/queryrdf/viewRDF.php?data=http://localhost/bookpw5/Data/novel.rdf">Novel RDF</a></li>
              <li><a class="dropdown-item" target="_blank" href="http://localhost/bookpw5/queryrdf/viewRDF.php?data=http://localhost/bookpw5/Data/book.rdf">Book RDF</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <br /><br />

  <div class="konten">

    <?php include "homepage.php"  ?>
  </div>

  <br />
  <br />

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center carousel-title">
          JIC Team
        </h1>
        <hr />
      </div>
      <!-- End of Col-md-12 -->

      <div class="col-md-12">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active">
              <img class="rounded-circle" style="background-size: cover;" width="100px" height="100px" src="assets/jimmi.jpeg" alt="First slide" />
            </li>
            <li data-target="#carouselExample" data-slide-to="1">
              <img class="rounded-circle" style="background-size: cover;" width="100px" height="100px" src="assets/ftt.jpg" alt="Second slide" />
            </li>
            <li data-target="#carouselExample" data-slide-to="2">
              <img class="rounded-circle" style="background-size: cover;" width="100px" height="100px" src="assets/cea.jpeg" alt="Third slide" />
            </li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                Jimmi Eduard Simangunsong
              </blockquote>
              <blockquote class="blockquote">
                201401106
              </blockquote>
            </div>
            <!-- End of Carousel Item 1 -->

            <div class="carousel-item">
              <blockquote class="blockquote">
                Irfan Akbari Habibi
              </blockquote>
              <blockquote class="blockquote">
                201401086
              </blockquote>
            </div>
            <!-- End of Carousel Item 2 -->

            <div class="carousel-item">
              <blockquote class="blockquote">
                Cheliza Sriayu Simarsoit
              </blockquote>
              <blockquote class="blockquote">
                201401097
              </blockquote>
            </div>
            <!-- End of Carousel Item 3 -->
          </div>
          <!-- End of Carousel Inner -->

          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fas fa-chevron-circle-left fa-2x"></i>
          </a>
          <!-- End of Carousel Control Prev -->

          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <i class="fas fa-chevron-circle-right fa-2x"></i>
          </a>
          <!-- End of Carousel Control Next -->
        </div>
        <!-- End of CarouselExample -->
      </div>
      <!-- End of Col-md-12 -->
    </div>
    <!-- End of Row -->
  </div>
  <br>
  <br>
  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright JIC
    </div>
    <!-- Copyright -->
  </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- Jquery untuk animase, navigasi, dll -->
  <script>
    $(document).ready(function() {
      open();
      novel();
      modalBook();

    });

    function modalBook() {
      $(".bestbookmodal").click(function() {
        var id = $(this).attr("id");
        $("#myModal2" + id).modal("show");
      });
      $(".bestbookmodal").hover(function() {
        // change cursor to pointer
        $(this).css("cursor", "pointer");
      });
    }

    function novel() {
      $(document).ready(function() {

        $.ajax({
          url: "dataNovel.php",
          type: "post",
          dataType: "json",
          success: function(data) {
            console.log(data);
            var html = "";
            var iseng;
            var index = 0;
            $.each(data, function(key, value) {
              html +=
                ' <div class="col"><div id="' + index + '" class="card mb-3" style="max-width: 540px;"><div class="row g-0"><div class="col-md-4"><img style="background-size:cover" height="100%" src="' + value.image + '" class="img-fluid rounded-start" alt="..."></div><div class="col-md-8"><div class="card-body nice-keren"><h5 style="color:black" class="card-title">' + value.name + '</h5></div></div></div> </div></div>';
              index++;
            });

            $(".novelkeren").html(html);

          },
          error: function(data) {
            console.log(data.responseText);
          }
        });
      });
    }

    function open() {
      $(".kerenbanget").hide();
      $(".gugur").hide();
      $(".novelkeren").hide();
      //  delay 1 second
      $("html, body").animate({
        scrollTop: 0
      }, 500);
      setTimeout(function() {
        //  fade out
        $("#loader-wrapper").fadeOut(800);

        // show on scroll
        $(window).scroll(function() {
          if ($(this).scrollTop() > 80) {
            $(".gugur").fadeIn(2500);
            $(".novelkeren").slideDown(2000);
          } else {
            $(".gugur").fadeOut();
            $(".novelkeren").fadeOut();
          }
        });
        $(".kerenbanget").slideDown(2000);
      }, 700);
    }
  </script>
  <script>
    $(document).ready(function() {
      history.pushState(null, null, location.href);
      window.onpopstate = function() {
        window.history.pushState(null, "", window.location.href);
      };
      geto();

      function geto(params) {
        $.ajax({
          url: "dataListBook.php",
          type: "post",
          dataType: "json",
          success: function(data) {
            // console.log(data);
            var html = "";
            var iseng;
            var index = 0;
            $.each(data, function(key, value) {
              html +=
                '<tr id="' + index + '"><td>' + value.name + '</td><td>' + value.author + '</td><td>' + value.rilis + '</td><td><button id="detail" data-toggle="modal" data-target="#myModal" class="btn bengga btn-success">Detail</button></td></tr>';
              index++;
            });
            $(".listing tbody").html(html);
            $(".bengga").click(function() {
              $("#loader-wrapper").fadeIn(1000);
              $.ajax({
                url: "detail.php",
                type: "post",
                data: {
                  index: data[$(this).parent().parent().attr("id")]
                },
                success: function(data) {
                  $("#loader-wrapper").fadeOut(1000);
                  setTimeout(function() {
                    $('.konten').html(data);
                    $("html, body").animate({
                      scrollTop: 0
                    }, 500);
                  }, 1000);
                  history.pushState(null, null, location.href);
                  window.onpopstate = function() {
                    $.ajax({
                      url: "homepage.php",
                      type: "get",
                      success: function(datas) {
                        $("#loader-wrapper").fadeIn(500);
                        // delay 1 second
                        setTimeout(function() {
                          $('.konten').html(datas);
                          geto();
                          novel();
                          open();
                          modalBook();
                          // scroll to top
                          $("html, body").animate({
                            scrollTop: 0
                          }, 1000);
                        }, 500);
                      }
                    });
                    window.history.pushState(null, "", window.location.href);
                  };
                },
              });
            });
          },
        });
      }
    });
  </script>
  <script>
    var navbar = document.querySelector(".navbar");

    window.onscroll = function() {

      // pageYOffset or scrollY
      if (window.pageYOffset > 30) {
        navbar.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled')
      }
    }
  </script>
  <!-- end -->
</body>

</html>