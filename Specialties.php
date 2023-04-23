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
    <link rel="shortcut icon" href="/images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Exotic Gum!</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <section>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm fixed-top">
                <a class="navbar-brand ms-auto" href="index.php">
                    <img src="http://localhost/ExoticGum/images/newlogo.png" class="logonav">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

</body>