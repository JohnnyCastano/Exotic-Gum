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
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>About Us!</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">

    </script>
</head>

<!--Beginning of site nav bar-->

<section>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm fixed-top">
            <a class="navbar-brand ms-auto" href="index.php">
                <img src="http://localhost/ExoticGum/images/newlogo.png" class="logonav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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

<!--Ending of site nav bar-->

<br>
<br>
<br>
<br>
<section class="About-intro">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-2 mx-auto">
                <div class="text-center">
                    <h1>Our Story...</h1>
                </div>
            </div>
            <div class="col-md-2 mx-auto">
                <div class="text-center">
                    <h5>Jake, Maria, and Alex loved unique flavors and decided to create a website called "Exotic Gum".
                        They
                        spent months developing the perfect recipes for each flavor. They scoured the globe for the most
                        unusual and exciting flavors, from spicy cinnamon to fruity lychee. They sourced high-quality
                        ingredients and experimented with different recipes until they had created the perfect formulas
                        for
                        each flavor. They launched their website, and used social
                        media to build buzz. Soon, major retailers started stocking their gum, and their business grew.
                        As
                        their business continued to grow, the trio remained dedicated to their mission of bringing
                        unique
                        and exciting flavors to the world of gum. They
                        expanded their product line and became successful entrepreneurs, proud of their unique and
                        exciting
                        flavors.</h5>
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
</section>

<!--End of intro-->

<br>
<br>

<!--Beginning of About content-->

<section class="About-content">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-6 mx-auto">
                <h2>Why we do it</h2>
                <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </h5>
            </div>
            <div class="col-md-6 mx-auto">
                <h2>How we do it</h2>
                <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </h5>
            </div>
        </div>
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-6 mx-auto">
                <h2>Why we do it</h2>
                <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </h5>
            </div>
            <div class="col-md-6 mx-auto">
                <img src="/images/Seahouse.png" alt="">
            </div>
        </div>
    </div>
</section>

<!--End of About content-->


<!--CSS Waves-->

<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"
    preserveAspectRatio="none" shape-rendering="auto">
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
                        <img src="http://localhost/ExoticGum/images/Facebook_Logo.png" height="50px">
                    </a>
                    <a href="https://instagram.com/exotic_gum?igshid=YmMyMTA2M2Y=">
                        <img src="http://localhost/ExoticGum/images/Instagram_logo.png" height="50px">
                    </a>
                </div>
                <div class="col-md-4">
                    <br>
                    <a href="#top">
                        <img src="http://localhost/ExoticGum/images/newlogo.png " height="150px">
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