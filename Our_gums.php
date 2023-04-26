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
    <link rel="shortcut icon" href="//images//images/newlogo.png">
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
                    <img src="/images/newlogo.png" class="logonav">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
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



    <section>
        <div class="text-center">
            <h1>Our Gums...</h1>
            <hr>
        </div>
    </section>

    <!--Modals-->

    <div class="modal fade " id="AcaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Acai Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/acai.png" class="card-img-top" alt="Acai Gum">
                    <p>
                        Acai flavored gum is a delicious and refreshing chewing gum that offers a sweet and tangy taste
                        of acai
                        berries. The gum is made with natural flavors and ingredients and is designed to freshen breath
                        and promote
                        oral health. Acai is a superfood known for its high antioxidant content and is a popular flavor
                        in many
                        health-conscious products. Acai flavored gum is a great option for those looking for a tasty and
                        convenient
                        way to enjoy the benefits of this superfood.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="AntModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ant Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/ant.png" class="card-img-top" alt="Ant Gum">
                    <p>
                        Ant flavored gum is a highly unconventional and exotic product that may be considered a novelty
                        by some. The
                        gum is likely to have a unique and pungent taste, with hints of acidity and bitterness that are
                        characteristic of ants. The texture of the gum may be crunchy or chewy, depending on how the
                        ants are
                        incorporated into the recipe. While the idea of eating ants may be unsettling to some, it is
                        worth noting
                        that ants are a common food source in many cultures around the world and are considered a
                        delicacy in some
                        places.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="AseedaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Aseeda Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/aseeda.png" class="card-img-top" alt="Aseeda Gum">
                    <p>
                        Aseeda flavored gum is a unique and exotic blend of traditional North African ingredients. This
                        gum features the rich, creamy taste of aseeda, a popular dish made from cooked wheat flour and
                        served with butter and honey. The gum also incorporates fragrant hints of cardamom and cinnamon,
                        adding a warm and spicy kick to the overall flavor profile. Aseeda flavored gum offers a
                        one-of-a-kind taste experience that will transport your taste buds to the bustling markets of
                        North Africa.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BasbousaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Basbousa Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/basbousa.png" class="card-img-top" alt="Basbousa Gum">
                    <p>
                        Basbousa flavored gum is a sweet and aromatic gum that has the taste and aroma of basbousa, a
                        traditional
                        Middle Eastern dessert made with semolina, sugar, and coconut. It has a delicious flavor profile
                        that
                        combines the sweetness of sugar with the nutty richness of coconut and the unique texture of
                        semolina. The
                        gum is perfect for those who love the taste of basbousa and want to have it on-the-go or
                        whenever they want
                        to freshen up their mouth. It's a great way to enjoy the flavors of the Middle East in a
                        convenient and
                        delicious way.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Beans_On_ToastModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Beans On Toast Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/beans_on_toast.png" class="card-img-top"
                        alt="Beans On Toast Gum">
                    <p>
                        Beans on toast flavored gum is a unique and quirky product that may appeal to those who enjoy
                        unconventional
                        food combinations. The gum is likely to have a savory taste with notes of baked beans and
                        toasted bread. The
                        texture of the gum may be soft and chewy, mimicking the texture of baked beans. While this
                        flavor
                        combination may seem odd, beans on toast is a popular breakfast dish in some parts of the world,
                        particularly in the United Kingdom.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BirriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Birria Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/birria.png" class="card-img-top" alt="Birria Gum">
                    <p>
                        Birria flavored gum is a unique and interesting combination of sweet and savory flavors. It has
                        a distinct
                        taste of slow-cooked meat and spices, with a hint of sweetness that rounds out the flavor
                        profile. The gum
                        has a chewy texture that provides a satisfying mouthfeel, and the flavor lasts for a
                        surprisingly long time.
                        It might not be for everyone, but for those who enjoy the taste of birria, it's a fun and
                        unusual treat
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BratwurstModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bratwurst Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/bratwurst.png" class="card-img-top" alt="Bratwurst Gum">
                    <p>
                        Bratwurst flavored gum is a unique and unconventional gum flavor that captures the savory and
                        slightly spicy
                        taste of bratwurst sausage. It is designed to provide a burst of flavor that is both satisfying
                        and unusual.
                        The gum's texture is chewy and long-lasting, allowing for a prolonged flavor experience. While
                        it may not be
                        everyone's cup of tea, bratwurst flavored gum is perfect for those who enjoy trying new and
                        unexpected
                        things.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BreadfruitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Breadfruit Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/breadfruit.png" class="card-img-top"
                        alt="Breadfruit Gum">
                    <p>
                        Breadfruit flavored gum is a unique and tropical taste experience. It captures the essence of
                        the
                        breadfruit, a starchy and versatile fruit commonly found in the Caribbean and Pacific Islands.
                        The gum is
                        soft and chewy, with a mild and slightly sweet flavor that is reminiscent of freshly baked
                        bread. It's a
                        perfect choice for those who want to try something new and exciting, or for those who want to
                        indulge in a
                        taste of the tropics.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChamoyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chamoy Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/chamoy.png" class="card-img-top" alt="Chamoy Gum">
                    <p>
                        Chamoy flavored gum is a type of chewing gum that has a sweet, tangy, and slightly spicy flavor
                        similar to
                        chamoy sauce, a popular condiment in Mexican cuisine. Chamoy flavored gum typically has a bright
                        red color
                        and is infused with a combination of fruity and savory flavors such as apricot, lime, and chili
                        powder. The
                        gum's chewy texture and bold taste make it a popular treat among those who enjoy the unique and
                        complex
                        flavors of chamoy sauce.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChechebsaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chechebsa Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/chechebsa.png" class="card-img-top" alt="Chechebsa Gum">
                    <p>
                        Chechebsa gum is a unique and delightful gum flavor that captures the warm and aromatic taste of
                        chechebsa,
                        a traditional Ethiopian dish made from shredded and lightly toasted flatbread mixed with spices
                        and herbs.
                        The gum's flavor is infused with a blend of spices that include berbere, fenugreek, and nigella
                        seeds, along
                        with a hint of garlic and ginger. This gum flavor is designed to provide a burst of savory, warm
                        flavor that
                        is both satisfying and refreshing. The gum's texture is chewy and long-lasting, allowing for a
                        prolonged
                        flavor experience. Chechebsa flavored gum is perfect for those who enjoy trying new and exotic
                        flavors.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Cheese_RollModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cheese Roll Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/cheese_roll.png" class="card-img-top"
                        alt="Cheese Roll Gum">
                    <p>
                        Cheese roll flavored gum is a type of chewing gum that is designed to replicate the taste of
                        cheese rolls, a
                        popular snack made from dough rolled with cheese and baked until crispy. This gum typically has
                        a savory and
                        cheesy flavor, with hints of garlic and herbs commonly used in cheese rolls. Some varieties of
                        cheese roll
                        gum may also contain flavors such as onion or bacon. Cheese roll flavored gum may appeal to
                        those who enjoy
                        the taste of cheese rolls but want a low-calorie or portable alternative. It provides a unique
                        and enjoyable
                        chewing experience that can satisfy cravings for a savory and delicious snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Chicken_HeartModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chicken Heart Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/chicken_heart.png" class="card-img-top"
                        alt="Chicken Heart Gum">
                    <p>
                        Chicken heart flavored gum is a unique and daring creation that appeals to those who enjoy bold
                        and
                        unconventional tastes. Its flavor is intense and savory, with a slight gamey taste that captures
                        the essence
                        of this organ meat. While it may not be for everyone, those who appreciate its distinctive
                        flavor will find
                        it to be a true delight. Its chewy texture and long-lasting flavor make it a satisfying and
                        memorable gum
                        experience.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChickpeaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Chickpea Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/chickpea.png" class="card-img-top" alt="Chickpea Gum">
                    <p>
                        Chickpea flavored gum is a unique and savory gum flavor that captures the nutty and slightly
                        sweet taste of
                        chickpeas, also known as garbanzo beans. The gum's flavor is infused with a blend of spices that
                        include
                        cumin, coriander, and paprika, along with a hint of lemon and garlic. This gum flavor is
                        designed to provide
                        a burst of nutty, earthy flavor that is both satisfying and refreshing. The gum's texture is
                        chewy and
                        long-lasting, allowing for a prolong
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CrepeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crepe Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/crepe.png" class="card-img-top" alt="Crepe Gum">
                    <p>
                        Crepe flavored gum is a type of chewing gum that is designed to replicate the taste of crepes, a
                        popular
                        French dish made of thin pancakes filled with sweet or savory ingredients. This gum typically
                        has a light
                        and airy flavor, with hints of vanilla, cinnamon, and powdered sugar. Some varieties of crepe
                        gum may also
                        have fruity or chocolatey undertones, depending on the specific flavor profile. Crepe flavored
                        gum is a
                        great way to enjoy the taste of crepes without the mess or calories associated with eating the
                        actual dish.
                        It provides a fun and unique chewing experience that can satisfy cravings for a sweet and
                        delicious snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CriadillaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criadilla Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/criadilla.png" class="card-img-top" alt="Criadilla Gum">
                    <p>
                        Criadilla flavored gum is a unique and unusual type of gum that is made to taste like
                        criadillas, a
                        traditional Spanish dish that consists of bull testicles. The gum has a savory and meaty flavor
                        with a
                        slight hint of spices and herbs. Some people may find the taste quite challenging and acquired,
                        but for
                        those who enjoy adventurous flavors, criadilla flavored gum can be a delightful and memorable
                        experience.
                        While this flavor of gum may not be for everyone, it is a testament to the creativity and
                        innovation of the
                        gum industry.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CrocodileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crocodile Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/crocodile.png" class="card-img-top" alt="Crocodile Gum">
                    <p>
                        Crocodile flavored gum is a unique and exotic gum that boasts the distinct taste of crocodile
                        meat. With its
                        savory and slightly gamey flavor, this gum is perfect for adventurous foodies looking to try
                        something new.
                        The flavor profile of this gum is similar to that of other game meats, but with a hint of
                        fishiness that is
                        reminiscent of the crocodile's aquatic habitat. This gum is sure to leave a lasting impression
                        on your taste
                        buds, making it a must-try for those looking for a truly one-of-a-kind gum experience.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CroissantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Croissant Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/croissant.png" class="card-img-top" alt="Croissant Gum">
                    <p>
                        Croissant flavored gum is a type of chewing gum that is designed to replicate the taste of
                        croissants, a
                        popular pastry originating from France. This gum is typically made with a combination of buttery
                        and sweet
                        flavors, such as vanilla, almond, and caramel. Some varieties of croissant gum may also contain
                        hints of
                        cinnamon or nutmeg to enhance the pastry-like flavor. Croissant flavored gum is a popular choice
                        for those
                        who enjoy the taste of croissants but want a low-calorie or portable alternative. It provides a
                        unique and
                        enjoyable chewing experience that can satisfy cravings for a sweet and buttery pastry.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CurryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Curry Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/curry.png" class="card-img-top" alt="Curry Gum">
                    <p>
                        Curry flavored gum is a type of chewing gum that is designed to replicate the taste of curry, a
                        popular
                        spice blend used in Indian, Southeast Asian, and other cuisines. This gum typically has a spicy
                        and savory
                        flavor, with hints of cumin, coriander, turmeric, and chili powder. Some varieties of curry gum
                        may also
                        contain flavors such as garlic or ginger. Curry flavored gum may appeal to those who enjoy the
                        taste of
                        curry but want a low-calorie or portable alternative. It provides a unique and enjoyable chewing
                        experience
                        that can satisfy cravings for a spicy and flavorful snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Deep_Fried_OreosModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deep Fried Oreo Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/deep_fried_oreos.png" class="card-img-top"
                        alt="Deep Fried Oreo Gum">
                    <p>
                        Oreo flavored gum is a type of chewing gum that has a taste similar to Oreo cookies, a popular
                        sandwich
                        cookie with a creamy filling between two chocolate wafers. Oreo flavored gum typically has a
                        sweet and
                        chocolaty taste, with a creamy and slightly crunchy texture that mimics the cookie's filling.
                        The gum's
                        flavor and texture make it a popular treat among those who enjoy the taste of Oreo cookies but
                        prefer a
                        lighter and more portable snack. Oreo flavored gum is a good option for satisfying a sweet tooth
                        on the go
                        without the mess and calories of traditional cookies.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Dill_PickleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Dill Pickle Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/dill_pickle.png" class="card-img-top"
                        alt="Dill Pickle Gum">
                    <p>
                        Dill pickle flavored gum is a zesty and unique flavor of chewing gum that is inspired by the
                        tangy and salty
                        taste of dill pickles. This gum captures the essence of the pickle flavor perfectly, with its
                        bold and
                        refreshing taste that is sure to awaken your senses. With each chew, the gum releases a burst of
                        sour and
                        salty flavor that is reminiscent of biting into a crisp dill pickle. It's a fun and tasty way to
                        satisfy
                        your craving for pickles without actually having to eat one. Dill pickle flavored gum is perfect
                        for those
                        who love the taste of pickles but want a low-calorie and portable option that they can enjoy
                        anytime,
                        anywhere. Whether you're looking for a unique and refreshing gum flavor or just love pickles,
                        dill pickle
                        flavored gum is a must-try.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="DuckModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Duck Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/duck.png" class="card-img-top" alt="Duck Gum">
                    <p>
                        This gum is definitely not for the faint of heart, as it has a rich, gamey flavor that will make
                        your taste
                        buds quack with delight. The savory notes of duck are perfectly captured in this unique gum,
                        providing a
                        one-of-a-kind chewing experience that you won't find anywhere else. Some people may find this
                        flavor odd or
                        unappealing, but for those who enjoy bold and unconventional tastes, duck-flavored gum is a
                        must-try. Just
                        be prepared for some strange looks if you start quacking while chewing it in public.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="DumplingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Dumpling Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/dumpling.png" class="card-img-top" alt="Dumpling Gum">
                    <p>
                        Dumpling flavored gum is a type of chewing gum that is designed to replicate the taste of
                        dumplings, a
                        popular dish in many cultures consisting of pieces of dough filled with meat, vegetables, or
                        sweet fillings.
                        This gum typically has a savory and slightly salty flavor, with hints of garlic, ginger, and soy
                        sauce. Some
                        varieties of dumpling gum may also contain flavors such as pork, chicken, or shrimp. Dumpling
                        flavored gum
                        may appeal to those who enjoy the taste of dumplings but want a low-calorie or portable
                        alternative. It
                        provides a unique and enjoyable chewing experience that can satisfy cravings for a savory and
                        satisfying
                        snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="EmpanadaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Empanada Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/empanada.png" class="card-img-top" alt="Empanada Gum">
                    <p>
                        Empanada flavored gum is a unique type of chewing gum that is designed to mimic the taste of
                        empanadas, a
                        popular pastry in many Latin American and Spanish cultures. This gum is usually made with a
                        combination of
                        spices and herbs commonly found in empanada recipes, such as cumin, paprika, and chili powder.
                        Some empanada
                        flavored gum may also include sweet or savory fillings, such as cheese or fruit. While it may
                        seem like an
                        unusual flavor for gum, empanada flavored gum can be a fun and flavorful way to enjoy the taste
                        of this
                        beloved pastry without the calories or mess.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Fish_And_ChipsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fish and Chips Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/fish_and_chips.png" class="card-img-top"
                        alt="Fish and Chips Gum">
                    <p>
                        Fish and chips flavored gum is a unique and unconventional product that may appeal to those who
                        enjoy trying
                        new and unusual flavors. The gum is likely to have a savory taste with notes of fried fish and
                        crispy chips.
                        The texture of the gum may be crunchy or chewy, depending on how the flavor of the chips is
                        incorporated
                        into the recipe. Fish and chips is a classic British dish that is enjoyed by many, and this
                        flavor of gum
                        may be a fun and nostalgic treat for those who grew up with this dish or have a particular
                        fondness for it.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Fried_ChickenModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fried Chicken Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/fried_chicken.png" class="card-img-top"
                        alt="Fried Chicken Gum">
                    <p>
                        Fried chicken flavored gum is a unique and unconventional flavor of chewing gum that has gained
                        popularity
                        in recent years. This gum is designed to taste like the savory and crispy goodness of fried
                        chicken,
                        complete with all the herbs and spices that make this dish so delicious. With each chew, the gum
                        releases a
                        burst of luflavor that is reminiscent of biting into a juicy piece of fried chicken, without any
                        of the
                        calories or mess. This gum is perfect for those who love the taste of fried chicken but want a
                        low-calorie,
                        portable option that they can enjoy on the go. It's a fun and tasty way to satisfy your craving
                        for this
                        comfort food favorite!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="FrogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Frog Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/frog.png" class="card-img-top" alt="Frog Gum">
                    <p>
                        Frog flavored gum is a unique and unconventional gum flavor that may not be to everyone's taste.
                        It is a
                        green-colored gum that is designed to taste like the meat of a frog. The gum has a slightly sour
                        and earthy
                        flavor, with a hint of saltiness. Some people may find it reminiscent of the taste of cooked
                        frog legs,
                        while others may simply find it strange and unappetizing. Overall, frog flavored gum is an
                        interesting
                        novelty item that can offer a unique and unusual taste experience.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="FufuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fufu Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/fufu.png" class="card-img-top" alt="Fufu Gum">
                    <p>
                        Fufu flavored gum is a unique and innovative product that combines the taste and texture of
                        traditional West
                        African fufu with the convenience and portability of chewing gum. The gum is made with cassava
                        flour, water,
                        and other ingredients commonly used to make fufu, resulting in a starchy and slightly sweet
                        flavor. Some
                        variations of fufu flavored gum may also include hints of other West African spices and
                        seasonings to
                        enhance the overall taste experience. While it may not be a flavor that everyone is familiar
                        with, fufu
                        flavored gum offers a fun and exotic alternative to more traditional gum flavors.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Hamburger_HelperModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hamburger Helper Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/hamburger_helper.png" class="card-img-top"
                        alt="Hamburger Helper Gum">
                    <p>
                        Hamburger flavored gum is a unique and unusual concept in the world of chewing gum. It is
                        designed to taste
                        like a hamburger, with a combination of meaty, savory, and slightly sweet flavors. While it may
                        sound
                        strange, it could be appealing to people who love the taste of hamburgers and want to experience
                        it in a new
                        way.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="JalapenoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Jalapeno Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/jalapeno.png" class="card-img-top" alt="Jalapeno Gum">
                    <p>
                        Jalapeno flavored gum is a spicy and refreshing treat that packs a punch of flavor. The gum has
                        a distinct
                        jalapeno taste that is both tangy and spicy, with a hint of sweetness that balances out the
                        flavor. The gum
                        has a chewy texture that provides a satisfying mouthfeel, and the spiciness gives a unique
                        sensation that is
                        both invigorating and refreshing. It might not be for everyone, but for those who enjoy the
                        taste of
                        jalapenos, it's a fun and unusual way to experience the flavor without the heat.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="JollofModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Jollof Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/jollof.png" class="card-img-top" alt="Jollof Gum">
                    <p>
                        ollof flavored gum is a unique and delightful gum flavor that captures the aromatic and spicy
                        taste of
                        jollof rice, a popular West African dish. The gum’s flavor is infused with a blend of aromatic
                        spices,
                        including cumin, thyme, and curry, along with a hint of tomato and onion. This gum flavor is
                        designed to
                        provide a burst of spicy, savory flavor that is both satisfying and refreshing. The gum's
                        texture is chewy
                        and long-lasting, allowing for a prolonged flavor experience. Jollof flavored gum is perfect for
                        those who
                        enjoy trying new and exotic flavors.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Kangaroo_TailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Kangaroo Tail Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/kangaroo_tail.png" class="card-img-top"
                        alt="Kangaroo Tail Gum">
                    <p>
                        Our kangaroo tail flavored gum would have a smoky, savory taste with a hint of gamey flavor,
                        reminiscent of
                        a slow-cooked meat dish. The texture would likely be chewy, similar to a beef jerky or taffy. It
                        might not
                        be for everyone, but I can see how some people might enjoy the novelty of trying a gum with such
                        a
                        distinctive flavor.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="KebabModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Kebab Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/kebab.png" class="card-img-top" alt="Kebab Gum">
                    <p>
                        Kebab flavored gum is a type of chewing gum that has a taste similar to kebab, a popular Middle
                        Eastern dish
                        made of grilled meat, vegetables, and spices. Kebab flavored gum typically has a savory and
                        slightly spicy
                        taste, with hints of herbs and garlic that mimic the flavors of a traditional kebab. The gum's
                        chewy texture
                        and bold taste make it a popular treat among those who enjoy the unique and complex flavors of
                        kebab. While
                        the idea of a savory gum may seem unusual, kebab flavored gum is a popular product in some
                        regions and a
                        unique option for satisfying a craving for the taste of kebab on the go.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Kiwi_BurgerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Kiwiburger Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/kiwi_burger.png" class="card-img-top"
                        alt="Kiwiburger Gum">
                    <p>
                        Kiwiburger flavored gum is a bold and innovative new product that combines the unique taste of
                        kiwifruit
                        with the savory flavor of a traditional New Zealand-style burger. This gum captures the essence
                        of a
                        Kiwiburger, with its juicy beef patty, tangy tomato sauce, crisp lettuce, and melted cheese. The
                        gum is
                        bursting with flavor and provides a unique and unforgettable chewing experience. Kiwiburger
                        flavored gum is
                        sure to be a hit with adventurous eaters looking for something new and exciting.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="LechonaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lechona Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/lechona.png" class="card-img-top" alt="Lechona Gum">
                    <p>
                        Lechona flavored gum is a unique and flavorful gum that captures the essence of the traditional
                        Colombian
                        dish. It has a savory taste with notes of roasted pork, garlic, onions, and other spices used in
                        lechona.
                        The gum is chewy in texture and may have a slightly tangy taste similar to the lime wedges often
                        served with
                        the dish.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Maple_SyrupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Maple Syrup Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/maple_syrup.png" class="card-img-top"
                        alt="Maple Syrup Gum">
                    <p>
                        Maple syrup flavored gum is a sweet and satisfying flavor of chewing gum that is inspired by the
                        rich and
                        delicious taste of maple syrup. With each chew, the gum releases a burst of sweet and sticky
                        flavor that is
                        reminiscent of pouring fresh maple syrup over a stack of pancakes on a lazy Sunday morning. This
                        gum
                        captures the essence of maple syrup perfectly, with its warm and comforting flavor that is sure
                        to satisfy
                        your sweet tooth. It's a great alternative for those who love the taste of maple syrup but want
                        a
                        low-calorie, portable option that they can enjoy anytime, anywhere. Whether you're looking for a
                        sweet treat
                        after a meal or just need a quick pick-me-up during the day, maple syrup flavored gum is the
                        perfect choice.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="MumuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mumu Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/mumu.png" class="card-img-top" alt="Mumu Gum">
                    <p>
                        Mumu gum is a truly unique flavor experience. Inspired by the traditional dish from Papua New
                        Guinea, it's a
                        blend of slow-cooked meat and vegetables that are infused with smoky and earthy notes. As you
                        chew, you'll
                        taste the rich and complex flavors that have been passed down through generations. Mumu gum is
                        perfect for
                        those who crave an exotic taste adventure and want to explore the rich culinary traditions of
                        Papua New
                        Guinea.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="NaanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Naan Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/naan.png" class="card-img-top" alt="Naan Gum">
                    <p>
                        Naan flavored gum is a type of chewing gum that is designed to replicate the taste of naan, a
                        popular Indian
                        flatbread. This gum typically has a savory flavor with hints of garlic, coriander, and cumin,
                        which are
                        commonly used in naan bread. Some varieties of naan gum may also contain flavors such as butter
                        or yogurt.
                        Naan flavored gum may appeal to those who enjoy the taste of naan but want a low-calorie or
                        portable
                        alternative. It provides a unique and enjoyable chewing experience that can satisfy cravings for
                        a savory
                        and aromatic snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="PeaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pea Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/pea.png" class="card-img-top" alt="Pea Gum">
                    <p>
                        Pea flavored gum is a unique and potentially polarizing product that may not appeal to everyone.
                        The gum is
                        likely to have a subtle and slightly sweet taste, with hints of fresh peas. The texture of the
                        gum may be
                        soft and chewy, similar to the texture of peas. While peas are a common and nutritious food, the
                        idea of a
                        pea flavored gum may be unusual to some, and the flavor may be an acquired taste. However, for
                        those who
                        enjoy pea-based dishes and flavors, pea flavored gum may be a fun and interesting treat to try.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="PufferfishModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pufferfish Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/pufferfish.png" class="card-img-top"
                        alt="Pufferfish Gum">
                    <p>
                        Pufferfish flavored gum is a unique and daring flavor that is not for the faint of heart. The
                        gum offers a
                        slightly salty and fishy taste, as if you were actually chewing on a pufferfish. This flavor may
                        not appeal
                        to everyone, but for those who are adventurous and love bold and unconventional flavors, it
                        definitely
                        offers an exciting and memorable experience.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="RamenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ramen Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/ramen.png" class="card-img-top" alt="Ramen Gum">
                    <p>
                        Ramen flavored gum is a type of chewing gum that is designed to replicate the taste of ramen, a
                        popular
                        Japanese dish consisting of noodles in a savory broth with various toppings. This gum typically
                        has a salty
                        and savory flavor, with hints of soy sauce, garlic, and onion. Some varieties of ramen gum may
                        also contain
                        flavors such as pork or chicken broth, or toppings such as green onions or seaweed. Ramen
                        flavored gum may
                        appeal to those who enjoy the taste of ramen but want a low-calorie or portable alternative. It
                        provides a
                        unique and enjoyable chewing experience that can satisfy cravings for a savory and flavorful
                        snack.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SambusaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sambusa Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/sambusa.png" class="card-img-top" alt="Sambusa Gum">
                    <p>
                        Sambusa flavored gum is a unique and delicious gum flavor that captures the savory and aromatic
                        taste of
                        sambusa, a popular snack in many Middle Eastern and African countries. The gum's flavor is
                        infused with a
                        blend of spices that include cumin, coriander, and turmeric, along with a hint of garlic and
                        onion. This gum
                        flavor is designed to provide a burst of savory, spicy flavor that is both satisfying and
                        refreshing. The
                        gum's texture is chewy and long-lasting, allowing for a prolonged flavor experience. Sambusa
                        flavored gum is
                        perfect for those who enjoy trying new and exotic flavors.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Sea_UrchinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sea Urchin Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/sea_urchin.png" class="card-img-top"
                        alt="Sea Urchin Gum">
                    <p>
                        Sea urchin flavored gum is an exciting and innovative new product that captures the essence of
                        the ocean in
                        every chew. The gum is infused with the intense and complex flavor of sea urchin, which is
                        prized for its
                        rich and savory taste. The unique blend of salty, briny, and umami flavors creates a truly
                        unforgettable
                        taste sensation that is sure to tantalize your taste buds. With sea urchin flavored gum, you can
                        indulge in
                        the flavors of the sea anytime, anywhere.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SharkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Shark Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/shark.png" class="card-img-top" alt="Shark Gum">
                    <p>
                        Shark-flavored gum is a unique and daring flavor that is sure to satisfy those who crave
                        something out of
                        the ordinary. The taste of the gum is designed to mimic the essence of the ocean, with a salty
                        and slightly
                        fishy flavor that may be an acquired taste. While not for everyone, shark-flavored gum is
                        perfect for those
                        who enjoy trying new and unconventional things.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SheepModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sheep Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/sheep.png" class="card-img-top" alt="Sheep Gum">
                    <p>
                        Sheep flavored gum is a unique and unconventional flavor that would certainly appeal to
                        adventurous taste
                        buds! While it may not be the most popular gum flavor, it could serve as a conversation starter
                        and a
                        memorable experience for those brave enough to try it. However, it's important to note that
                        sheep should not
                        actually be used as an ingredient in gum due to health reasons. So, don't go looking for it at
                        your local
                        store!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SnailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Snail Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/snail.png" class="card-img-top" alt="Snail Gum">
                    <p>
                        Snail flavored gum is a unique and unusual gum that offers a taste unlike any other. It is
                        designed to mimic
                        the flavor of snails, which can be described as slightly earthy and briny. The gum has a chewy
                        texture that
                        can be satisfying for those who enjoy snails or are adventurous with their food choices. Snail
                        flavored gum
                        may not be for everyone, but for those willing to try something new, it can be a surprisingly
                        enjoyable
                        experience.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SurstrommingModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Surstromming Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/surstromming.png" class="card-img-top"
                        alt="Surstromming Gum">
                    <p>
                        Surströmming is a Swedish delicacy that consists of fermented Baltic herring. Surströmming
                        flavored gum
                        would have a pungent and strong odor, reminiscent of the fishy, salty aroma of the traditional
                        dish. The
                        flavor would be intensely savory, with a sour and acidic undertone due to the fermentation
                        process. The gum
                        would offer a unique and challenging taste experience, with a distinctive aftertaste that
                        lingers long after
                        the gum has been chewed. It would not be for the faint of heart, but for those who are
                        adventurous and
                        willing to try new and bold flavors.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SushiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sushi Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/sushi.png" class="card-img-top" alt="Sushi Gum">
                    <p>
                        Sushi flavored gum is a type of chewing gum that is designed to mimic the taste of sushi, a
                        popular Japanese
                        dish consisting of vinegared rice topped with various ingredients, such as seafood, vegetables,
                        and sauces.
                        This gum typically has a savory and umami flavor, with hints of soy sauce, wasabi, and seaweed.
                        Some
                        varieties of sushi gum may also contain flavors such as ginger or pickled vegetables. Sushi
                        flavored gum may
                        appeal to those who enjoy the taste of sushi but want a low-calorie or portable alternative. It
                        provides a
                        unique and enjoyable chewing experience that can satisfy cravings for a sushi-like flavor.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Sweet_PotatoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sweet Potato Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/sweet_potato.png" class="card-img-top"
                        alt="Sweet Potato Gum">
                    <p>
                        Sweet potato flavored gum is a unique and delicious option for gum enthusiasts looking to try
                        something new. The gum would offer a subtle, sweet taste of roasted or baked sweet potatoes,
                        which could be a popular flavor among fans of the vegetable. The texture of the gum might also
                        imitate the soft and chewy consistency of sweet potatoes, adding to the experience. This gum
                        could be a great choice for vegan and health-conscious consumers looking for something natural,
                        plant-based, and free of additives. Whether on the go or sitting down to a meal, sweet potato
                        flavored gum could be a delightful treat anytime.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TacacaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tacaca Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/tacaca.png" class="card-img-top" alt="Tacaca Gum">
                    <p>
                        Tacaca flavored gum is a unique and exotic chewing gum that offers the delicious and spicy taste
                        of Tacaca, a traditional Brazilian soup. Tacaca is made with a broth of tucupi, a yellow sauce
                        made from cassava, garlic, and herbs, and is typically served with shredded chicken, tapioca
                        pearls, and chili pepper. Tacaca flavored gum is made with natural ingredients and offers a
                        spicy and refreshing taste that is perfect for those who enjoy bold and unconventional flavors.
                        It is a great option for those looking to try something new and exciting in the world of gum.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TofuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tofu Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/tofu.png" class="card-img-top" alt="Tofu Gum">
                    <p>
                        Tofu flavored gum would be a unique and unusual flavor for gum enthusiasts looking for something
                        different. It would offer a subtle, savory taste of soybean, similar to the taste of tofu. The
                        texture of the gum might also imitate that of tofu, with a soft and chewy consistency. This
                        vegetarian and vegan-friendly gum could appeal to health-conscious consumers looking for
                        plant-based alternatives. While it may not suit everyone's palate, the tofu flavored gum would
                        be an interesting option for those willing to take a chance on a unique taste.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TourtiereModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tourtiere Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/tourtiere.png" class="card-img-top" alt="Tourtiere Gum">
                    <p>
                        Tourtiere flavored gum is a unique and savory flavor of chewing gum that is inspired by the
                        traditional Canadian meat pie, tourtiere. This gum captures the essence of the delicious
                        tourtiere filling, which is made up of seasoned ground meat, onions, and spices, in a portable
                        and convenient form. With each chew, the gum releases a burst of savory flavor that is
                        reminiscent of biting into a slice of tourtiere. It's a fun and tasty way to satisfy your
                        craving for this classic Canadian dish without having to make a whole pie. If you're a fan of
                        tourtiere or just looking for a unique and savory gum flavor, tourtiere flavored gum is
                        definitely worth a try.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TripeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tripe Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/tripe.png" class="card-img-top" alt="Tripe Gum">
                    <p>
                        Tripe flavored gum is a highly unusual and niche product that may not appeal to everyone. The
                        gum is likely to have a meaty and slightly earthy taste, with a texture that is chewy and
                        slightly rubbery. Tripe, which is the stomach lining of animals like cows and sheep, is a
                        polarizing ingredient that is enjoyed by some but not by others. Therefore, tripe flavored gum
                        may be an acquired taste that is best suited for those with a particular fondness for this
                        ingredient.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="VegemiteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Vegemite Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/vegemite.png" class="card-img-top" alt="Vegemite Gum">
                    <p>
                        Vegemite flavored gum is the next big thing! It's a bold and unique flavor that is sure to be a
                        hit with adventurous snackers. Imagine the tangy, umami taste of vegemite combined with the
                        chewy texture of gum. It's the perfect combination of savory and sweet. Don't knock it till you
                        try it!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ViscachaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Viscacha Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/viscacha.png" class="card-img-top" alt="Viscacha Gum">
                    <p>
                        Viscacha flavored gum is a type of chewing gum that is designed to mimic the taste of viscacha,
                        a type of rodent found in South America. This gum is typically made with a blend of spices and
                        herbs that are commonly used in traditional Andean cuisine, such as cumin, oregano, and chili
                        powder. Viscacha gum is not a common flavor and may appeal to those who enjoy unique and exotic
                        flavors. It should be noted that viscacha is not a commonly consumed food in many cultures, and
                        some individuals may find the idea of a viscacha flavored gum unappetizing.
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="HamburgerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hamburger Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/hamburger.png" class="card-img-top" alt="Hamburger Gum">
                    <p>
                        Introducing the newest flavor sensation, hamburger flavored gum! With a savory blend of beef,
                        lettuce, tomato, and pickles, this gum will satisfy your cravings without any of the calories.
                        Perfect for anyone who loves burgers but wants to avoid the guilt of indulging. Just pop a piece
                        in your mouth and enjoy the delicious taste of a burger in every chew. Give it a try and see why
                        hamburger flavored gum is the talk of the town!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="MysteryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mystery Gum</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/images/mystery.png" class="card-img-top" alt="Mystery Gum">
                    <p>
                        [REDACTED]
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="AcaiGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Acai Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="AntGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Ant Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="AseedaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Aseeda Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BasbousaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Basbousa Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Beans_On_ToastGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Beans On Toast Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BirriaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Birria Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BratwurstGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Bratwurst Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="BreadfruitGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Breadfruit Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChamoyGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Chamoy Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChechebsaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Chechebsa Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Cheese_RollGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Cheese Roll Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Chicken_HeartGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Chicken Heart Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ChickpeaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Chickpea Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CrepeGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Crepe Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CriadillaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Criadilla Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CrocodileGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Crocodile Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CroissantGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Croissant Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="CurryGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Curry Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Deep_Fried_OreoGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Deep Fried Oreo Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Dill_PickleGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Dill Pickle Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="DuckGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Duck Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="DumplingGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Dumpling Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="EmpanadaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Empanada Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Fish_And_ChipsGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Fish and Chips Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Fried_ChickenGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Fried Chicken Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="FrogGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Frog Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="FufuGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog"> 
      <div class="modal-content"> 
        <div class="modal-header"> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
        </div> 
        <div class="modal-body"> 
          <p> 
  Added Fufu to Cart!
          </p> 
        </div>
      </div> 
    </div> 
  </div> 
    <div class = "modal" id="Hamburger_HelperGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Hamburger Helper Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="JalapenoGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Jalapeno Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Kangaroo_TailGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Kangaroo Tail Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="KebabGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Kebab Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="KiwiburgerGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Kiwiburger Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="LechonaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Lechona Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Maple_SyrupGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Maple Syrup Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="MumuGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Mumu Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="NaanGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Naan Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="PeaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Pea Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="PufferfishGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Pufferfish Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="RamenGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Ramen Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SambusaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Sambusa Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Sea_UrchinGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Sea Urchin Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SharkGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Shark Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SheepGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Sheep Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SnailGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Snail Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SurstrommingGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Surstromming Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="SushiGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Sushi Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="Sweet_PotatoGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Sweet Potato Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TacacaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Tacaca Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TofuGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Tofu Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TourtiereGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Tourtiere Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="TripeGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Tripe Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="VegemiteGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Vegemite Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="ViscachaGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Viscacha Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="HamburgerGumModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Hamburger Gum to Cart!
                     </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "modal" id="MysteryGumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Added Mystery Gum to Cart!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--End Modals-->


    <!--Offcanvas-->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body offcanvas-cls">
            <p id="myId" class="offcanvas-cls"></p>
        </div>
    </div>


    <!--End Offcanvas-->



    <!--Items added to cart-->

    <script>
        var a = ['<div class = "col-sm-12 offcnvs-cls"><hr></div><br>'];
        document.getElementById("myId").innerHTML = a;

        function pushAcai() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Acai Gum</div><img src = "/images/acai.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushAnt() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Ant Gum</div><img src = "/images/ant.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushAseeda() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Aseeda Gum</div><img src = "/images/aseeda.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushBasbousa() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Basbousa Gum</div><img src = "/images/basbousa.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushBeans_On_Toast() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Beans On Toast Gum</div><img src = "/images/beans_on_toast.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushBirria() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Birria Gum</div><img src = "/images/birria.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushBratwurst() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Bratwurst Gum</div><img src = "/images/bratwurst.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushBreadfruit() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Breadfruit Gum</div><img src = "/images/breadfruit.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushChamoy() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Chamoy Gum</div><img src = "/images/chamoy.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushChechebsa() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Chechebsa Gum</div><img src = "/images/chechebesa.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCheese_Roll() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Cheese Roll Gum</div><img src = "/images/cheese_roll.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushChicken_Heart() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Chicken Heart Gum</div><img src = "/images/chicken_heart.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushChickpea() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Chickpea Gum</div><img src = "/images/chickpea.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCrepe() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Crepe Gum</div><img src = "/images/crepe.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCriadilla() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Criadilla Gum</div><img src = "/images/criadilla.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCrocodile() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Crocodile Gum</div><img src = "/images/crocodile.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCroissant() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Croissant Gum</div><img src = "/images/croissant.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushCurry() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Curry Gum</div><img src = "/images/curry.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushDeep_Fried_Oreo() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Deep Fried Oreo Gum</div><img src = "/images/deep_fried_oreo.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushDill_Pickle() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Dill Pickle Gum</div><img src = "/images/dill_pickle.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushDuck() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Duck Gum</div><img src = "/images/duck.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushDumpling() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Dumpling Gum</div><img src = "/images/dumpling.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushEmpanada() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Empanada Gum</div><img src = "/images/empanada.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushFish_And_Chips() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Fish and Chips Gum</div><img src = "/images/fish_and_chips.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushFried_Chicken() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Fried Chicken Gum</div><img src = "/images/fried_chicken.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }

        function pushFrog() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Frog Gum</div><img src = "/images/frog.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushFufu() {
        a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Fufu Gum</div><img src = "/images/fufu.png" class = "offcnvs-cls" height = 75px>');
        document.getElementById("myId").innerHTML = a;
    }

        function pushHamburger_Helper() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Hamburger Helper Gum</div><img src = "/images/hamburger_helper.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushJalapeno() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Jalapeno Gum</div><img src = "/images/jalapeno.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushJollof() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Jollof Gum</div><img src = "/images/jollof.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushKangaroo_Tail() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Kangaroo Tail Gum</div><img src = "/images/kangaroo_tail.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushKebab() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Kebab Gum</div><img src = "/images/kebab.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushKiwiburger() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Kiwiburger Gum</div><img src = "/images/kiwiburger.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushLechona() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Lechona Gum</div><img src = "/images/lechona.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushMaple_Syrup() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Maple Syrup Gum</div><img src = "/images/maple_syrup.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushMumu() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Mumu Gum</div><img src = "/images/.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushNaan() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Naan Gum</div><img src = "/images/naan.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushPea() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Pea Gum</div><img src = "/images/pea.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushPufferfish() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Pufferfish Gum</div><img src = "/images/pufferfish.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushRamen() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Ramen Gum</div><img src = "/images/ramen.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSambusa() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Sambusa Gum</div><img src = "/images/sambusa.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSea_Urchin() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Sea Urchin Gum</div><img src = "/images/sea_urchin.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushShark() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Shark Gum</div><img src = "/images/shark.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSheep() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Sheep Gum</div><img src = "/images/sheep.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSnail() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Snail Gum</div><img src = "/images/snail.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSurstromming() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Surstromming Gum</div><img src = "/images/surstromming.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSushi() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Sushi Gum</div><img src = "/images/sushi.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushSweet_Potato() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Sweet Potato Gum</div><img src = "/images/sweet_potato.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushTacaca() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Tacaca Gum</div><img src = "/images/tacaca.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushTofu() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Tofu Gum</div><img src = "/images/tofu.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushTourtiere() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Tourtiere Gum</div><img src = "/images/tourtiere.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushTripe() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Tripe Gum</div><img src = "/images/tripe.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushVegemite() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Vegemite Gum</div><img src = "/images/vegemite.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushViscacha() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Viscacha Gum</div><img src = "/images/viscacha.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushHamburger() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Hamburger Gum</div><img src = "/images/hamburger.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        function pushMystery() {
            a.push('<div class = "col-sm-12 offset-sm-1 cart-txt offcnvs-cls">$4.99  Mystery Gum</div><img src = "/images/mystery.png" class = "offcnvs-cls" height = 75px>');
            document.getElementById("myId").innerHTML = a;
        }
        length(a);
        
    </script>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#AcaiModal">
                        <img src="/images/acai.png" class="card-img-top" alt="Acai Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#AcaiModal">
                            <h5 class="card-title">
                                Acai Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushAcai()" data-bs-toggle="modal" data-bs-target="#AcaiGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Acai Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#AntModal">
                        <img src="/images/ant.png" class="card-img-top" alt="Ant Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#AntModal">
                            <h5 class="card-title">
                                Ant Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushAnt()" data-bs-toggle="modal" data-bs-target="#AntGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Ant Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#AseedaModal">
                        <img src="/images/aseeda.png" class="card-img-top" alt="Aseeda Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#AseedaModal">
                            <h5 class="card-title">
                                Aseeda Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushAseeda()" data-bs-toggle="modal" data-bs-target="#AseedaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Aseeda Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#BasbousaModal">
                        <img src="/images/basbousa.png" class="card-img-top"
                            alt="Basbousa Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#BasbousaModal">
                            <h5 class="card-title">
                                Basbousa Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushBasbousa()" data-bs-toggle="modal" data-bs-target="#BasbousaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Basbousa Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Beans_On_ToastModal">
                        <img src="/images/beans_on_toast.png" class="card-img-top"
                            alt="Beans On Toast Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Beans_On_ToastModal">
                            <h5 class="card-title">
                                Beans On Toast Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushBeans_On_Toast()" data-bs-toggle="modal"
                            data-bs-target="#Beans_On_ToastGumModal" class="btn btn-inner-clr inner-clr">
                            Add Beans On Toast Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#BirriaModal">
                        <img src="/images/birria.png" class="card-img-top" alt="Birria Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#BirriaModal">
                            <h5 class="card-title">
                                Birria Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushBirria()" data-bs-toggle="modal" data-bs-target="#BirriaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Birria Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#BratwurstModal">
                        <img src="/images/bratwurst.png" class="card-img-top"
                            alt="Bratwurst Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#BratwurstModal">
                            <h5 class="card-title">
                                Bratwurst Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushBratwurst()" data-bs-toggle="modal" data-bs-target="#BratwurstGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Bratwurst Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#BreadfruitModal">
                        <img src="/images/breadfruit.png" class="card-img-top"
                            alt="Breadfruit Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#BreadfruitModal">
                            <h5 class="card-title">
                                Breadfruit Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushBreadfruit()" data-bs-toggle="modal" data-bs-target="#BreadfruitGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Breadfruit Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#ChamoyModal">
                        <img src="/images/chamoy.png" class="card-img-top" alt="Chamoy Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#ChamoyModal">
                            <h5 class="card-title">
                                Chamoy Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushChamoy()" data-bs-toggle="modal" data-bs-target="#ChamoyGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Chamoy Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#ChechebsaModal">
                        <img src="/images/chechebsa.png" class="card-img-top"
                            alt="Chechebsa Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#ChechebsaModal">
                            <h5 class="card-title">
                                Chechebsa Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushChechebsa()" data-bs-toggle="modal" data-bs-target="#ChechebsaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Chechebsa Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Cheese_RollModal">
                        <img src="/images/cheese_roll.png" class="card-img-top"
                            alt="Cheese Roll Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Cheese_RollModal">
                            <h5 class="card-title">
                                Cheese Roll Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCheese_Roll()" data-bs-toggle="modal" data-bs-target="#Cheese_RollGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Cheese Roll Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Chicken_HeartModal">
                        <img src="/images/chicken_heart.png" class="card-img-top"
                            alt="Chicken Heart Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Chicken_HeartModal">
                            <h5 class="card-title">
                                Chicken Heart Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushChicken_Heart()" data-bs-toggle="modal"
                            data-bs-target="#Chicken_HeartGumModal" class="btn btn-inner-clr inner-clr">
                            Add Chicken Heart Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#ChickpeaModal">
                        <img src="/images/chickpea.png" class="card-img-top"
                            alt="Chickpea Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#ChickpeaModal">
                            <h5 class="card-title">
                                Chickpea Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushChickpea()" data-bs-toggle="modal" data-bs-target="#ChickpeaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Chickpea Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#CrepeModal">
                        <img src="/images/crepe.png" class="card-img-top" alt="Crepe Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#CrepeModal">
                            <h5 class="card-title">
                                Crepe Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCrepe()" data-bs-toggle="modal" data-bs-target="#CrepeGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Crepe Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#CriadillaModal">
                        <img src="/images/criadilla.png" class="card-img-top"
                            alt="Criadilla Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#CriadillaModal">
                            <h5 class="card-title">
                                Criadilla Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCriadilla()" data-bs-toggle="modal" data-bs-target="#CriadillaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Criadilla Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#CrocodileModal">
                        <img src="/images/crocodile.png" class="card-img-top"
                            alt="Crocodile Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#CrocodileModal">
                            <h5 class="card-title">
                                Crocodile Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCrocodile()" data-bs-toggle="modal" data-bs-target="#CrocodileGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Crocodile Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#CroissantModal">
                        <img src="/images/croissant.png" class="card-img-top"
                            alt="Croissant Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#CroissantModal">
                            <h5 class="card-title">
                                Croissant Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCroissant()" data-bs-toggle="modal" data-bs-target="#CroissantGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Croissant Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#CurryModal">
                        <img src="/images/curry.png" class="card-img-top" alt="Curry Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#CurryModal">
                            <h5 class="card-title">
                                Curry Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushCurry()" data-bs-toggle="modal" data-bs-target="#CurryGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Curry Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Deep_Fried_OreosModal">
                        <img src="/images/deep_fried_oreos.png" class="card-img-top"
                            alt="Deep Fried Oreo Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Deep_Fried_OreosModal">
                            <h5 class="card-title">
                                Deep Fried Oreo Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushDeep_Fried_Oreo()" data-bs-toggle="modal"
                            data-bs-target="#Deep_Fried_OreoGumModal" class="btn btn-inner-clr inner-clr">
                            Add Deep Fried Oreo Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Dill_PickleModal">
                        <img src="/images/dill_pickle.png" class="card-img-top"
                            alt="Dill Pickle Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Dill_PickleModal">
                            <h5 class="card-title">
                                Dill Pickle Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushDill_Pickle()" data-bs-toggle="modal" data-bs-target="#Dill_PickleGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Dill Pickle Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#DuckModal">
                        <img src="/images/duck.png" class="card-img-top" alt="Duck Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#DuckModal">
                            <h5 class="card-title">
                                Duck Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushDuck()" data-bs-toggle="modal" data-bs-target="#DuckGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Duck Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#DumplingModal">
                        <img src="/images/dumpling.png" class="card-img-top"
                            alt="Dumpling Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#DumplingModal">
                            <h5 class="card-title">
                                Dumpling Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushDumpling()" data-bs-toggle="modal" data-bs-target="#DumplingGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Dumpling Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#EmpanadaModal">
                        <img src="/images/empanada.png" class="card-img-top"
                            alt="Empanada Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#EmpanadaModal">
                            <h5 class="card-title">
                                Empanada Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushEmpanada()" data-bs-toggle="modal" data-bs-target="#EmpanadaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Empanada Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Fish_And_ChipsModal">
                        <img src="/images/fish_and_chips.png" class="card-img-top"
                            alt="Fish and Chips Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Fish_And_ChipsModal">
                            <h5 class="card-title">
                                Fish and Chips Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushFish_And_Chips()" data-bs-toggle="modal"
                            data-bs-target="#Fish_And_ChipsGumModal" class="btn btn-inner-clr inner-clr">
                            Add Fish and Chips Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Fried_ChickenModal">
                        <img src="/images/fried_chicken.png" class="card-img-top"
                            alt="Fried Chicken Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Fried_ChickenModal">
                            <h5 class="card-title">
                                Fried Chicken Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushFried_Chicken()" data-bs-toggle="modal"
                            data-bs-target="#Fried_ChickenGumModal" class="btn btn-inner-clr inner-clr">
                            Add Fried Chicken Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#FrogModal">
                        <img src="/images/frog.png" class="card-img-top" alt="Frog Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#FrogModal">
                            <h5 class="card-title">
                                Frog Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushFrog()" data-bs-toggle="modal" data-bs-target="#FrogGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Frog Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#FufuModal">
                        <img src="/images/fufu.png" class="card-img-top" alt="Fufu Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#FufuModal">
                            <h5 class="card-title">
                                Fufu Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushFufu()" data-bs-toggle="modal" data-bs-target="#FufuGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Fufu Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Hamburger_HelperModal">
                        <img src="/images/hamburger_helper.png" class="card-img-top"
                            alt="Hamburger Helper Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Hamburger_HelperModal">
                            <h5 class="card-title">
                                Hamburger Helper Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushHamburger_Helper()" data-bs-toggle="modal"
                            data-bs-target="#Hamburger_HelperGumModal" class="btn btn-inner-clr inner-clr">
                            Add Hamburger Helper Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#JalapenoModal">
                        <img src="/images/jalapeno.png" class="card-img-top"
                            alt="Jalapeno Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#JalapenoModal">
                            <h5 class="card-title">
                                Jalapeno Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushJalapeno()" data-bs-toggle="modal" data-bs-target="#JalapenoGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Jalapeno Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#JollofModal">
                        <img src="/images/jollof.png" class="card-img-top" alt="Jollof Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#JollofModal">
                            <h5 class="card-title">
                                Jollof Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushJollof()" data-bs-toggle="modal" data-bs-target="#JollofGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Jollof Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Kangaroo_TailModal">
                        <img src="/images/kangaroo_tail.png" class="card-img-top"
                            alt="Kangaroo Tail Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Kangaroo_TailModal">
                            <h5 class="card-title">
                                Kangaroo Tail Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushKangaroo_Tail()" data-bs-toggle="modal"
                            data-bs-target="#Kangaroo_TailGumModal" class="btn btn-inner-clr inner-clr">
                            Add Kangaroo Tail Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#KebabModal">
                        <img src="/images/kebab.png" class="card-img-top" alt="Kebab Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#KebabModal">
                            <h5 class="card-title">
                                Kebab Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushKebab()" data-bs-toggle="modal" data-bs-target="#KebabGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Kebab Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Kiwi_BurgerModal">
                        <img src="/images/kiwi_burger.png" class="card-img-top"
                            alt="Kiwiburger Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Kiwi_BurgerModal">
                            <h5 class="card-title">
                                Kiwiburger Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushKiwiburger()" data-bs-toggle="modal" data-bs-target="#KiwiburgerGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Kiwiburger Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#LechonaModal">
                        <img src="/images/lechona.png" class="card-img-top" alt="Lechona Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#LechonaModal">
                            <h5 class="card-title">
                                Lechona Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushLechona()" data-bs-toggle="modal" data-bs-target="#LechonaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Lechona Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Maple_SyrupModal">
                        <img src="/images/maple_syrup.png" class="card-img-top"
                            alt="Maple Syrup Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Maple_SyrupModal">
                            <h5 class="card-title">
                                Maple Syrup Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushMaple_Syrup()" data-bs-toggle="modal" data-bs-target="#Maple_SyrupGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Maple Syrup Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#MumuModal">
                        <img src="/images/mumu.png" class="card-img-top" alt="Mumu Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#MumuModal">
                            <h5 class="card-title">
                                Mumu Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushMumu()" data-bs-toggle="modal" data-bs-target="#MumuGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Mumu Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#NaanModal">
                        <img src="/images/naan.png" class="card-img-top" alt="Naan Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#NaanModal">
                            <h5 class="card-title">
                                Naan Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushNaan()" data-bs-toggle="modal" data-bs-target="#NaanGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Naan Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#PeaModal">
                        <img src="/images/pea.png" class="card-img-top" alt="Pea Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#PeaModal">
                            <h5 class="card-title">
                                Pea Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushPea()" data-bs-toggle="modal" data-bs-target="#PeaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Pea Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#PufferfishModal">
                        <img src="/images/pufferfish.png" class="card-img-top"
                            alt="Pufferfish Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#PufferfishModal">
                            <h5 class="card-title">
                                Pufferfish Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushPufferfish()" data-bs-toggle="modal" data-bs-target="#PufferfishGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Pufferfish Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#RamenModal">
                        <img src="/images/ramen.png" class="card-img-top" alt="Ramen Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#RamenModal">
                            <h5 class="card-title">
                                Ramen Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushRamen()" data-bs-toggle="modal" data-bs-target="#RamenGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Ramen Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SambusaModal">
                        <img src="/images/sambusa.png" class="card-img-top" alt="Sambusa Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SambusaModal">
                            <h5 class="card-title">
                                Sambusa Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSambusa()" data-bs-toggle="modal" data-bs-target="#SambusaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Sambusa Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Sea_UrchinModal">
                        <img src="/images/sea_urchin.png" class="card-img-top"
                            alt="Sea Urchin Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Sea_UrchinModal">
                            <h5 class="card-title">
                                Sea Urchin Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSea_Urchin()" data-bs-toggle="modal" data-bs-target="#Sea_UrchinGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Sea Urchin Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SharkModal">
                        <img src="/images/shark.png" class="card-img-top" alt="Shark Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SharkModal">
                            <h5 class="card-title">
                                Shark Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushShark()" data-bs-toggle="modal" data-bs-target="#SharkGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Shark Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SheepModal">
                        <img src="/images/sheep.png" class="card-img-top" alt="Sheep Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SheepModal">
                            <h5 class="card-title">
                                Sheep Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSheep()" data-bs-toggle="modal" data-bs-target="#SheepGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Sheep Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SnailModal">
                        <img src="/images/snail.png" class="card-img-top" alt="Snail Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SnailModal">
                            <h5 class="card-title">
                                Snail Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSnail()" data-bs-toggle="modal" data-bs-target="#SnailGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Snail Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SurstrommingModal">
                        <img src="/images/surstromming.png" class="card-img-top"
                            alt="Surstromming Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SurstrommingModal">
                            <h5 class="card-title">
                                Surstromming Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSurstromming()" data-bs-toggle="modal"
                            data-bs-target="#SurstrommingGumModal" class="btn btn-inner-clr inner-clr">
                            Add Surstromming Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#SushiModal">
                        <img src="/images/sushi.png" class="card-img-top" alt="Sushi Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#SushiModal">
                            <h5 class="card-title">
                                Sushi Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSushi()" data-bs-toggle="modal" data-bs-target="#SushiGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Sushi Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#Sweet_PotatoModal">
                        <img src="/images/sweet_potato.png" class="card-img-top"
                            alt="Sweet Potato Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#Sweet_PotatoModal">
                            <h5 class="card-title">
                                Sweet Potato Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushSweet_Potato()" data-bs-toggle="modal"
                            data-bs-target="#Sweet_PotatoGumModal" class="btn btn-inner-clr inner-clr">
                            Add Sweet Potato Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#TacacaModal">
                        <img src="/images/tacaca.png" class="card-img-top" alt="Tacaca Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#TacacaModal">
                            <h5 class="card-title">
                                Tacaca Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushTacaca()" data-bs-toggle="modal" data-bs-target="#TacacaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Tacaca Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#TofuModal">
                        <img src="/images/tofu.png" class="card-img-top" alt="Tofu Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#TofuModal">
                            <h5 class="card-title">
                                Tofu Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushTofu()" data-bs-toggle="modal" data-bs-target="#TofuGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Tofu Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#TourtiereModal">
                        <img src="/images/tourtiere.png" class="card-img-top"
                            alt="Tourtiere Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#TourtiereModal">
                            <h5 class="card-title">
                                Tourtiere Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushTourtiere()" data-bs-toggle="modal" data-bs-target="#TourtiereGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Tourtiere Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#TripeModal">
                        <img src="/images/tripe.png" class="card-img-top" alt="Tripe Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#TripeModal">
                            <h5 class="card-title">
                                Tripe Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushTripe()" data-bs-toggle="modal" data-bs-target="#TripeGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Tripe Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#VegemiteModal">
                        <img src="/images/vegemite.png" class="card-img-top"
                            alt="Vegemite Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#VegemiteModal">
                            <h5 class="card-title">
                                Vegemite Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushVegemite()" data-bs-toggle="modal" data-bs-target="#VegemiteGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Vegemite Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#ViscachaModal">
                        <img src="/images/viscacha.png" class="card-img-top"
                            alt="Viscacha Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#ViscachaModal">
                            <h5 class="card-title">
                                Viscacha Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushViscacha()" data-bs-toggle="modal" data-bs-target="#ViscachaGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Viscacha Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#HamburgerModal">
                        <img src="/images/hamburger.png" class="card-img-top"
                            alt="Hamburger Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#HamburgerModal">
                            <h5 class="card-title">
                                Hamburger Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushHamburger()" data-bs-toggle="modal" data-bs-target="#HamburgerGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Hamburger Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
                    <a data-bs-toggle="modal" data-bs-target="#MysteryModal">
                        <img src="/images/mystery.png" class="card-img-top" alt="Mystery Gum">
                    </a>
                    <div class="card-body">
                        <a data-bs-toggle="modal" data-bs-target="#MysteryModal">
                            <h5 class="card-title">
                                Mystery Gum
                            </h5>
                        </a>
                        <hr>
                        <button onclick="pushMystery()" data-bs-toggle="modal" data-bs-target="#MysteryGumModal"
                            class="btn btn-inner-clr inner-clr">
                            Add Mystery Gum to Cart!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-bottom">
        <button class="btn btn-inner-clr inner-clr mx-4 my-4" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <img src="/images/cart.svg" height=100px>
            <br>
        </button>

    </div>



    <!--CSS Waves-->
    <div class="header">
        <div>


            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
</body>

</html>