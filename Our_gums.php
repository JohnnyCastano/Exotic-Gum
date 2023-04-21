<?php
include_once 'includes/dbh.inc.php';
?>
<!doctype html>
<html lang="en">

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
</head>

<body>

  <!--This is the sites navbar-->

  <section>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-sm fixed-top">
        <a class="navbar-brand ms-auto" href="index.php">
          <img src="http://localhost/ExoticGum/images/newlogo.png" class="logonav">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item px-2">
              <a href="Specialties.php" class="nav-link btn btn-inner-clr inner-clr">
                Specialty Gums!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="Our_gums.php" class="nav-link btn btn-inner-clr inner-clr">
                Our Gums!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="Contact.php" class="nav-link btn btn-inner-clr inner-clr">
                Contact Us!
              </a>
            </li>
            <li class="nav-item px-2">
              <a href="About.php" class="nav-link btn btn-inner-clr inner-clr">
                About Us!
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

  <section class="parallax-section">
    <div class="parallax">
      <!-- end of the parallax -->


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,144C672,117,768,107,864,117.3C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
      </svg>

      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-3 mx-auto">
            <div class="card card-parallax-gum">
              <div class="card-body">
                <h2 class="card-title">Ethiopian Gum!</h2>
              </div>
            </div>
          </div>
        </div>
        <br>
        <Br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,144C672,117,768,107,864,117.3C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>

    </div>
  </section>

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-3 mx-auto">
        <div class="card card-parallax-gum">
          <div class="card-body">
            <h2 class="card-title">Nigerian Gum!</h2>
          </div>
        </div>
      </div>
    </div>
    <br>
    <Br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
          <img src="/images/Birria.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              --Gum--
            </h5>
            <hr>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <a href="Order.html" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
          <img src="/images/Birria.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              --Gum--
            </h5>
            <hr>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <a href="Order.html" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
          <img src="/images/Birria.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              --Gum--
            </h5>
            <hr>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <a href="Order.html" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="parallax-section">
    <div class="parallax">
      <!-- end of the parallax -->


      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,32L48,32C96,32,192,32,288,64C384,96,480,160,576,170.7C672,181,768,139,864,117.3C960,96,1056,96,1152,106.7C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
      </svg>
      <div class="container-fluid text-center">
        <div class="row">
          <div class="col-sm-3 mx-auto">
            <div class="card card-parallax-gum">
              <div class="card-body">
                <h2 class="card-title">Sudanese Gum!</h2>
              </div>
            </div>
          </div>
        </div>
        <br>
        <Br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                  additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                  additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-gums text-center h-100 mx-4 px-4 py-2">
              <img src="/images/Birria.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  --Gum--
                </h5>
                <hr>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                  additional
                  content. This content is a little bit longer.</p>
                <a href="Order.html" class="btn btn-inner-clr inner-clr">
                  Add To Cart!
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#abdaf4" fill-opacity="1"
          d="M0,32L48,32C96,32,192,32,288,64C384,96,480,160,576,170.7C672,181,768,139,864,117.3C960,96,1056,96,1152,106.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>
  </section>

  <!--Back to Top button-->


  <a href="#" class="b2t mx-auto"><i class="fas fa-chevron-up"></i></a>


  <!--End to Top button-->


  <!--CSS Waves-->

  <div class="header">
    <div>


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
    </div>
  </div>

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




  <!--Back to Top button-->


  <a href="#" class="b2t mx-auto"><i class="fas fa-chevron-up"></i></a>


  <!--End to Top button-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>