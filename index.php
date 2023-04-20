<?php
  include_once 'includes/dbh.inc.php';
?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Andrew Ellis, Johnny Martinez, Champ Nguyen">
  <meta name="keywords" content="Gum, exotic flavors, Exotic Gum, World Gum">
  <link rel="shortcut icon" href="/images/images/newlogo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Exotic Gum!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/1c0e6c2e01.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/5.3.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
</head>

<body>

  <!--Beginning of site nav bar-->

  <section>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-sm fixed-top">
        <a class="navbar-brand ms-auto" href="index.html">
          <img src="/images/newlogo.png" class="logonav">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item px-2">
              <a href="Specialties.html" class="nav-link btn btn-inner-clr inner-clr">
                Specialty Gums!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="Our_gums.html" class="nav-link btn btn-inner-clr inner-clr">
                Our Gums!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="Contact.html" class="nav-link btn btn-inner-clr inner-clr">
                Contact Us!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="About.html" class="nav-link btn btn-inner-clr inner-clr">
                About Us!
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

  <!--Ending of site nav bar-->

  <!--Beginning of carousel-->
  <section class="carousel">

    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/Tropical.png" class="d-block w-100 h-40" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Desert.png" class="d-block w-100 h-40" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/images/Beach.png" class="d-block w-100 h-40" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <br>

  <!--Ending of carousel-->

  <!--Beginning of carousel-->

  <section class=" pt-2 px-2">
    <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row card-names">
              <div class="col-sm-12 text-center">
                <h1>Our Most Popular Gums!</h1>
              </div>
            </div>
            <div class="row">
              <div class="card-group">
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Birria!
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Here!
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Birria.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Empanada!
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Here!
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Empanada.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Viscacha!
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Here!
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Viscacha.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="carousel-item">
            <div class="row card-names">
              <div class="col-sm-12 text-center">
                <h1>Staff Picks!</h1>
              </div>
            </div>
            <div class="row">
              <div class="card-group">
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Delivery
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Online
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Birria.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Delivery
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Online
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Empanada.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 px-2 py-2">
                  <div class="card card-carousel mid-clr">
                    <div class="card-body text-center">
                      <p>
                        <h5 class="card-title">
                          Delivery
                        </h5>
                        <hr>
                        <a href="Order.html" class="btn btn-inner-clr inner-clr">
                          Order Online
                        </a>
                        <a href="index.html"><img class="card-img-top" src="/images/Viscacha.png" alt="Card image"></a>
                        <p class="card-text">
                          Order from our online menu and have it delivered straight to your door!
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>


  <!--End of card carousel-->



  <!--Back to Top button-->


  <a id="button"></a>


  <!--End to Top button-->




  <!-- parrallax -->


  <section class="parallax-section">
    <div class="parallax">
      <!-- end of the parralax -->


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,32L60,58.7C120,85,240,139,360,144C480,149,600,107,720,90.7C840,75,960,85,1080,90.7C1200,96,1320,96,1380,96L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
      </svg>
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-10 mx-auto">
            <div class="card card-parallax">
              <div class="card-body">
                <h5 class="card-title">Want to Know More About our Company?</h5>
                <div class="row">
                  <p class="card-text">
                   
                  </p>
                </div>
                <div class="row">
                  <p class="card-text">
                  </p>
                </div>
                <br>
                <a href="About.html" class="btn btn-inner-clr inner-clr">
                  About Us!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,224L80,240C160,256,320,288,480,293.3C640,299,800,277,960,261.3C1120,245,1280,235,1360,229.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
      </svg>
    </div>
  </section>

  <!--Back to Top button-->


  
  <!--End to Top button-->

  <!--CSS Waves-->

      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(122,198,217,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(109,178,195,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(122,198,217,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#7AC6D9" />
        </g>
      </svg>

  <!--End of waves-->

  <!--Beginning of footer-->


  <section class="footer-section">
    <footer>
      <div class="container-fluid">
        <br>
        <div class="row text-center justify-content-center">
          <div class="col-md-4">
            <h2 class="footer-head">Follow Us</h2>
            Follow us on our Social Medias to keep up with recent news about new and up and coming Gums!
            <br>
            <br>
            <a href="https://www.facebook.com/profile.php?id=100091569529499">
              <img src="/images/Facebook_Logo.png" height="50px">
            </a>
            <a href="https://instagram.com/exotic_gum?igshid=YmMyMTA2M2Y=">
              <img src="/images/Instagram_logo.png" height="50px">
            </a>
          </div>
          <div class="col-md-4">
            <br>
            <a href="#top">
              <img src="/images/newlogo.png " height="150px">
            </a>
            <br>
          </div>
          <div class="col-md-4 ">
            <h2 class="footer-head">Find Us</h2>
            Our location!
            <br>
            The depths of the Mariana Trench
            <br>
            The Sea
            <br>
            55555
            <br>
            (555) 555-5555
          </div>
        </div>
        <br>
        <br>

    </footer>
  </section>


  <!--End of footer-->







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>