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

<!-- 
  Ant = caps 
  ant = lower
-->

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
  <br>


  <br>
  <br>
  <br>
  <br>
  <br>

  <!--Modals-->

  <div class="modal fade " id="AcaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Acai Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/acai.png" class="card-img-top" alt="Acai Gum">
          <p>
            Acai flavored gum is a delicious and refreshing chewing gum that offers a sweet and tangy taste of acai
            berries. The gum is made with natural flavors and ingredients and is designed to freshen breath and promote
            oral health. Acai is a superfood known for its high antioxidant content and is a popular flavor in many
            health-conscious products. Acai flavored gum is a great option for those looking for a tasty and convenient
            way to enjoy the benefits of this superfood.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inner-clr inner-clr" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="AntModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ant Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/ant.png" class="card-img-top" alt="Ant Gum">
          <p>
            Ant flavored gum is a highly unconventional and exotic product that may be considered a novelty by some. The
            gum is likely to have a unique and pungent taste, with hints of acidity and bitterness that are
            characteristic of ants. The texture of the gum may be crunchy or chewy, depending on how the ants are
            incorporated into the recipe. While the idea of eating ants may be unsettling to some, it is worth noting
            that ants are a common food source in many cultures around the world and are considered a delicacy in some
            places.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inner-clr inner-clr" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="AseedaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Aseeda Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/aseeda.png" class="card-img-top" alt="Aseeda Gum">
          <p>
            Asseeda is a traditional African dish made from boiled flour and is often enjoyed with stews and soups.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inner-clr inner-clr" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="BasbousaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Basbousa Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/basbousa.png" class="card-img-top" alt="Basbousa Gum">
          <p>
            Basbousa flavored gum is a sweet and aromatic gum that has the taste and aroma of basbousa, a traditional
            Middle Eastern dessert made with semolina, sugar, and coconut. It has a delicious flavor profile that
            combines the sweetness of sugar with the nutty richness of coconut and the unique texture of semolina. The
            gum is perfect for those who love the taste of basbousa and want to have it on-the-go or whenever they want
            to freshen up their mouth. It's a great way to enjoy the flavors of the Middle East in a convenient and
            delicious way.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-inner-clr inner-clr" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--End Modals-->

  <div class="container-fluid text-center">
    <div class="row row-cols-1 row-cols-sm-4 g-4 my-2">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#AcaiModal">
            <img src="http://localhost/ExoticGum/images/acai.png" class="card-img-top" alt="Acai Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#AcaiModal">
              <h5 class="card-title">
                Acai Gum
              </h5>
            </a>
            <hr>
            <a href="Order.php" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#AntModal">
            <img src="http://localhost/ExoticGum/images/ant.png" class="card-img-top" alt="Ant Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#AntModal">
              <h5 class="card-title">
                Ant Gum
              </h5>
            </a>
            <hr>
            <a href="Order.php" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#AseedaModal">
            <img src="http://localhost/ExoticGum/images/aseeda.png" class="card-img-top" alt="Aseeda Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#AseedaModal">
              <h5 class="card-title">
                Aseeda Gum
              </h5>
            </a>
            <hr>
            <a href="Order.php" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#BasbousaModal">
            <img src="http://localhost/ExoticGum/images/basbousa.png" class="card-img-top" alt="Basbousa Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#BasbousaModal">
              <h5 class="card-title">
                Basbousa Gum
              </h5>
            </a>
            <hr>
            <a href="Order.php" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>





    </div>
  </div>
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