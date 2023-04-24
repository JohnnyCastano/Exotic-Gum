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
      </div>
    </div>
  </div>

  <div class="modal fade " id="Beans_On_ToastModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Beans On Toast Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/beans_on_toast.png" class="card-img-top" alt="Beans On Toast Gum">
          <p>
            Beans on toast flavored gum is a unique and quirky product that may appeal to those who enjoy unconventional
            food combinations. The gum is likely to have a savory taste with notes of baked beans and toasted bread. The
            texture of the gum may be soft and chewy, mimicking the texture of baked beans. While this flavor
            combination may seem odd, beans on toast is a popular breakfast dish in some parts of the world,
            particularly in the United Kingdom.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="BirriaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Birria Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/birria.png" class="card-img-top" alt="Birria Gum">
          <p>
            Birria flavored gum is a unique and interesting combination of sweet and savory flavors. It has a distinct
            taste of slow-cooked meat and spices, with a hint of sweetness that rounds out the flavor profile. The gum
            has a chewy texture that provides a satisfying mouthfeel, and the flavor lasts for a surprisingly long time.
            It might not be for everyone, but for those who enjoy the taste of birria, it's a fun and unusual treat
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="BratwurstModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Bratwurst Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/bratwurst.png" class="card-img-top" alt="Bratwurst Gum">
          <p>
            Bratwurst flavored gum is a unique and unconventional gum flavor that captures the savory and slightly spicy
            taste of bratwurst sausage. It is designed to provide a burst of flavor that is both satisfying and unusual.
            The gum's texture is chewy and long-lasting, allowing for a prolonged flavor experience. While it may not be
            everyone's cup of tea, bratwurst flavored gum is perfect for those who enjoy trying new and unexpected
            things.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="BreadfruitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Breadfruit Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/breadfruit.png" class="card-img-top" alt="Breadfruit Gum">
          <p>
            Breadfruit flavored gum is a unique and tropical taste experience. It captures the essence of the
            breadfruit, a starchy and versatile fruit commonly found in the Caribbean and Pacific Islands. The gum is
            soft and chewy, with a mild and slightly sweet flavor that is reminiscent of freshly baked bread. It's a
            perfect choice for those who want to try something new and exciting, or for those who want to indulge in a
            taste of the tropics.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="ChamoyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chamoy Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/chamoy.png" class="card-img-top" alt="Chamoy Gum">
          <p>
            Chamoy flavored gum is a type of chewing gum that has a sweet, tangy, and slightly spicy flavor similar to
            chamoy sauce, a popular condiment in Mexican cuisine. Chamoy flavored gum typically has a bright red color
            and is infused with a combination of fruity and savory flavors such as apricot, lime, and chili powder. The
            gum's chewy texture and bold taste make it a popular treat among those who enjoy the unique and complex
            flavors of chamoy sauce.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="ChechebsaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chechebsa Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/chechebsa.png" class="card-img-top" alt="Chechebsa Gum">
          <p>
            Chechebsa gum is a unique and delightful gum flavor that captures the warm and aromatic taste of chechebsa,
            a traditional Ethiopian dish made from shredded and lightly toasted flatbread mixed with spices and herbs.
            The gum's flavor is infused with a blend of spices that include berbere, fenugreek, and nigella seeds, along
            with a hint of garlic and ginger. This gum flavor is designed to provide a burst of savory, warm flavor that
            is both satisfying and refreshing. The gum's texture is chewy and long-lasting, allowing for a prolonged
            flavor experience. Chechebsa flavored gum is perfect for those who enjoy trying new and exotic flavors.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Cheese_RollModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cheese Roll Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/cheese_roll.png" class="card-img-top" alt="Cheese Roll Gum">
          <p>
            Cheese roll flavored gum is a type of chewing gum that is designed to replicate the taste of cheese rolls, a
            popular snack made from dough rolled with cheese and baked until crispy. This gum typically has a savory and
            cheesy flavor, with hints of garlic and herbs commonly used in cheese rolls. Some varieties of cheese roll
            gum may also contain flavors such as onion or bacon. Cheese roll flavored gum may appeal to those who enjoy
            the taste of cheese rolls but want a low-calorie or portable alternative. It provides a unique and enjoyable
            chewing experience that can satisfy cravings for a savory and delicious snack.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="Chicken_HeartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chicken Heart Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/chicken_heart.png" class="card-img-top" alt="Chicken Heart Gum">
          <p>
            Chicken heart flavored gum is a unique and daring creation that appeals to those who enjoy bold and
            unconventional tastes. Its flavor is intense and savory, with a slight gamey taste that captures the essence
            of this organ meat. While it may not be for everyone, those who appreciate its distinctive flavor will find
            it to be a true delight. Its chewy texture and long-lasting flavor make it a satisfying and memorable gum
            experience.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="ChickpeaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chickpea Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/chickpea.png" class="card-img-top" alt="Chickpea Gum">
          <p>
            Chickpea flavored gum is a unique and savory gum flavor that captures the nutty and slightly sweet taste of
            chickpeas, also known as garbanzo beans. The gum's flavor is infused with a blend of spices that include
            cumin, coriander, and paprika, along with a hint of lemon and garlic. This gum flavor is designed to provide
            a burst of nutty, earthy flavor that is both satisfying and refreshing. The gum's texture is chewy and
            long-lasting, allowing for a prolong
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="CrepeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crepe Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/crepe.png" class="card-img-top" alt="Crepe Gum">
          <p>
            Crepe flavored gum is a type of chewing gum that is designed to replicate the taste of crepes, a popular
            French dish made of thin pancakes filled with sweet or savory ingredients. This gum typically has a light
            and airy flavor, with hints of vanilla, cinnamon, and powdered sugar. Some varieties of crepe gum may also
            have fruity or chocolatey undertones, depending on the specific flavor profile. Crepe flavored gum is a
            great way to enjoy the taste of crepes without the mess or calories associated with eating the actual dish.
            It provides a fun and unique chewing experience that can satisfy cravings for a sweet and delicious snack.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="CriadillaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Criadilla Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/criadilla.png" class="card-img-top" alt="Criadilla Gum">
          <p>
            Criadilla flavored gum is a unique and unusual type of gum that is made to taste like criadillas, a
            traditional Spanish dish that consists of bull testicles. The gum has a savory and meaty flavor with a
            slight hint of spices and herbs. Some people may find the taste quite challenging and acquired, but for
            those who enjoy adventurous flavors, criadilla flavored gum can be a delightful and memorable experience.
            While this flavor of gum may not be for everyone, it is a testament to the creativity and innovation of the
            gum industry.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="CrocodileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crocodile Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/crocodile.png" class="card-img-top" alt="Crocodile Gum">
          <p>
            Crocodile flavored gum is a unique and exotic gum that boasts the distinct taste of crocodile meat. With its
            savory and slightly gamey flavor, this gum is perfect for adventurous foodies looking to try something new.
            The flavor profile of this gum is similar to that of other game meats, but with a hint of fishiness that is
            reminiscent of the crocodile's aquatic habitat. This gum is sure to leave a lasting impression on your taste
            buds, making it a must-try for those looking for a truly one-of-a-kind gum experience.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="CrroissantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crroissant Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/croissant.png" class="card-img-top" alt="Crroissant Gum">
          <p>
            Croissant flavored gum is a type of chewing gum that is designed to replicate the taste of croissants, a
            popular pastry originating from France. This gum is typically made with a combination of buttery and sweet
            flavors, such as vanilla, almond, and caramel. Some varieties of croissant gum may also contain hints of
            cinnamon or nutmeg to enhance the pastry-like flavor. Croissant flavored gum is a popular choice for those
            who enjoy the taste of croissants but want a low-calorie or portable alternative. It provides a unique and
            enjoyable chewing experience that can satisfy cravings for a sweet and buttery pastry.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="CurryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Curry Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/curry.png" class="card-img-top" alt="Curry Gum">
          <p>
            Curry flavored gum is a type of chewing gum that is designed to replicate the taste of curry, a popular
            spice blend used in Indian, Southeast Asian, and other cuisines. This gum typically has a spicy and savory
            flavor, with hints of cumin, coriander, turmeric, and chili powder. Some varieties of curry gum may also
            contain flavors such as garlic or ginger. Curry flavored gum may appeal to those who enjoy the taste of
            curry but want a low-calorie or portable alternative. It provides a unique and enjoyable chewing experience
            that can satisfy cravings for a spicy and flavorful snack.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Deep_Fried_OreosModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deep Fried Oreo Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/deep_fried_oreos.png" class="card-img-top"
            alt="Deep Fried Oreo Gum">
          <p>
            Oreo flavored gum is a type of chewing gum that has a taste similar to Oreo cookies, a popular sandwich
            cookie with a creamy filling between two chocolate wafers. Oreo flavored gum typically has a sweet and
            chocolaty taste, with a creamy and slightly crunchy texture that mimics the cookie's filling. The gum's
            flavor and texture make it a popular treat among those who enjoy the taste of Oreo cookies but prefer a
            lighter and more portable snack. Oreo flavored gum is a good option for satisfying a sweet tooth on the go
            without the mess and calories of traditional cookies.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Dill_PickleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Dill Pickle Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/dill_pickle.png" class="card-img-top" alt="Dill Pickle Gum">
          <p>
            Dill pickle flavored gum is a zesty and unique flavor of chewing gum that is inspired by the tangy and salty
            taste of dill pickles. This gum captures the essence of the pickle flavor perfectly, with its bold and
            refreshing taste that is sure to awaken your senses. With each chew, the gum releases a burst of sour and
            salty flavor that is reminiscent of biting into a crisp dill pickle. It's a fun and tasty way to satisfy
            your craving for pickles without actually having to eat one. Dill pickle flavored gum is perfect for those
            who love the taste of pickles but want a low-calorie and portable option that they can enjoy anytime,
            anywhere. Whether you're looking for a unique and refreshing gum flavor or just love pickles, dill pickle
            flavored gum is a must-try.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="DuckModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Duck Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/duck.png" class="card-img-top" alt="Duck Gum">
          <p>
            This gum is definitely not for the faint of heart, as it has a rich, gamey flavor that will make your taste
            buds quack with delight. The savory notes of duck are perfectly captured in this unique gum, providing a
            one-of-a-kind chewing experience that you won't find anywhere else. Some people may find this flavor odd or
            unappealing, but for those who enjoy bold and unconventional tastes, duck-flavored gum is a must-try. Just
            be prepared for some strange looks if you start quacking while chewing it in public.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="DumplingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Dumpling Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/dumpling.png" class="card-img-top" alt="Dumpling Gum">
          <p>
            Dumpling flavored gum is a type of chewing gum that is designed to replicate the taste of dumplings, a
            popular dish in many cultures consisting of pieces of dough filled with meat, vegetables, or sweet fillings.
            This gum typically has a savory and slightly salty flavor, with hints of garlic, ginger, and soy sauce. Some
            varieties of dumpling gum may also contain flavors such as pork, chicken, or shrimp. Dumpling flavored gum
            may appeal to those who enjoy the taste of dumplings but want a low-calorie or portable alternative. It
            provides a unique and enjoyable chewing experience that can satisfy cravings for a savory and satisfying
            snack.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="EmpanadaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Empanada Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/empanada.png" class="card-img-top" alt="Empanada Gum">
          <p>
            Empanada flavored gum is a unique type of chewing gum that is designed to mimic the taste of empanadas, a
            popular pastry in many Latin American and Spanish cultures. This gum is usually made with a combination of
            spices and herbs commonly found in empanada recipes, such as cumin, paprika, and chili powder. Some empanada
            flavored gum may also include sweet or savory fillings, such as cheese or fruit. While it may seem like an
            unusual flavor for gum, empanada flavored gum can be a fun and flavorful way to enjoy the taste of this
            beloved pastry without the calories or mess.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Fish_And_ChipsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fish and Chips Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/fish_and_chips.png" class="card-img-top" alt="Fish and Chips Gum">
          <p>
            Fish and chips flavored gum is a unique and unconventional product that may appeal to those who enjoy trying
            new and unusual flavors. The gum is likely to have a savory taste with notes of fried fish and crispy chips.
            The texture of the gum may be crunchy or chewy, depending on how the flavor of the chips is incorporated
            into the recipe. Fish and chips is a classic British dish that is enjoyed by many, and this flavor of gum
            may be a fun and nostalgic treat for those who grew up with this dish or have a particular fondness for it.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Fried_ChickenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fried Chicken Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/fried_chicken.png" class="card-img-top" alt="Fried Chicken Gum">
          <p>
            Fried chicken flavored gum is a unique and unconventional flavor of chewing gum that has gained popularity
            in recent years. This gum is designed to taste like the savory and crispy goodness of fried chicken,
            complete with all the herbs and spices that make this dish so delicious. With each chew, the gum releases a
            burst of luflavor that is reminiscent of biting into a juicy piece of fried chicken, without any of the
            calories or mess. This gum is perfect for those who love the taste of fried chicken but want a low-calorie,
            portable option that they can enjoy on the go. It's a fun and tasty way to satisfy your craving for this
            comfort food favorite!
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="FrogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Frog Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/frog.png" class="card-img-top" alt="Frog Gum">
          <p>
            Frog flavored gum is a unique and unconventional gum flavor that may not be to everyone's taste. It is a
            green-colored gum that is designed to taste like the meat of a frog. The gum has a slightly sour and earthy
            flavor, with a hint of saltiness. Some people may find it reminiscent of the taste of cooked frog legs,
            while others may simply find it strange and unappetizing. Overall, frog flavored gum is an interesting
            novelty item that can offer a unique and unusual taste experience.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="FufuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fufu Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/fufu.png" class="card-img-top" alt="Fufu Gum">
          <p>
            Fufu flavored gum is a unique and innovative product that combines the taste and texture of traditional West
            African fufu with the convenience and portability of chewing gum. The gum is made with cassava flour, water,
            and other ingredients commonly used to make fufu, resulting in a starchy and slightly sweet flavor. Some
            variations of fufu flavored gum may also include hints of other West African spices and seasonings to
            enhance the overall taste experience. While it may not be a flavor that everyone is familiar with, fufu
            flavored gum offers a fun and exotic alternative to more traditional gum flavors.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Hamburger_HelperModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hamburger Helper Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/hamburger_helper.png" class="card-img-top"
            alt="Hamburger Helper Gum">
          <p>
            Hamburger flavored gum is a unique and unusual concept in the world of chewing gum. It is designed to taste
            like a hamburger, with a combination of meaty, savory, and slightly sweet flavors. While it may sound
            strange, it could be appealing to people who love the taste of hamburgers and want to experience it in a new
            way.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="JalapenoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Jalapeno Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/jalapeno.png" class="card-img-top" alt="Jalapeno Gum">
          <p>
            Jalapeno flavored gum is a spicy and refreshing treat that packs a punch of flavor. The gum has a distinct
            jalapeno taste that is both tangy and spicy, with a hint of sweetness that balances out the flavor. The gum
            has a chewy texture that provides a satisfying mouthfeel, and the spiciness gives a unique sensation that is
            both invigorating and refreshing. It might not be for everyone, but for those who enjoy the taste of
            jalapenos, it's a fun and unusual way to experience the flavor without the heat.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="JollofModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Jollof Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/jollof.png" class="card-img-top" alt="Jollof Gum">
          <p>
            ollof flavored gum is a unique and delightful gum flavor that captures the aromatic and spicy taste of
            jollof rice, a popular West African dish. The gum’s flavor is infused with a blend of aromatic spices,
            including cumin, thyme, and curry, along with a hint of tomato and onion. This gum flavor is designed to
            provide a burst of spicy, savory flavor that is both satisfying and refreshing. The gum's texture is chewy
            and long-lasting, allowing for a prolonged flavor experience. Jollof flavored gum is perfect for those who
            enjoy trying new and exotic flavors.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Kangaroo_TailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Kangaroo Tail Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/kangaroo_tail.png" class="card-img-top" alt="Kangaroo Tail Gum">
          <p>
            Our kangaroo tail flavored gum would have a smoky, savory taste with a hint of gamey flavor, reminiscent of
            a slow-cooked meat dish. The texture would likely be chewy, similar to a beef jerky or taffy. It might not
            be for everyone, but I can see how some people might enjoy the novelty of trying a gum with such a
            distinctive flavor.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="KebabModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Kebab Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/kebab.png" class="card-img-top" alt="Kebab Gum">
          <p>
            Kebab flavored gum is a type of chewing gum that has a taste similar to kebab, a popular Middle Eastern dish
            made of grilled meat, vegetables, and spices. Kebab flavored gum typically has a savory and slightly spicy
            taste, with hints of herbs and garlic that mimic the flavors of a traditional kebab. The gum's chewy texture
            and bold taste make it a popular treat among those who enjoy the unique and complex flavors of kebab. While
            the idea of a savory gum may seem unusual, kebab flavored gum is a popular product in some regions and a
            unique option for satisfying a craving for the taste of kebab on the go.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade " id="Kiwi_BurgerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog-centered modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Kiwiburger Gum</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="http://localhost/ExoticGum/images/kiwi_burger.png" class="card-img-top" alt="Kiwiburger Gum">
          <p>
            Kiwiburger flavored gum is a bold and innovative new product that combines the unique taste of kiwifruit
            with the savory flavor of a traditional New Zealand-style burger. This gum captures the essence of a
            Kiwiburger, with its juicy beef patty, tangy tomato sauce, crisp lettuce, and melted cheese. The gum is
            bursting with flavor and provides a unique and unforgettable chewing experience. Kiwiburger flavored gum is
            sure to be a hit with adventurous eaters looking for something new and exciting.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!--End Modals-->
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#Beans_On_ToastModal">
            <img src="http://localhost/ExoticGum/images/beans_on_toast.png" class="card-img-top"
              alt="Beans On Toast Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Beans_On_ToastModal">
              <h5 class="card-title">
                Beans On Toast Gum
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
          <a data-bs-toggle="modal" data-bs-target="#BirriaModal">
            <img src="http://localhost/ExoticGum/images/birria.png" class="card-img-top" alt="Birria Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#BirriaModal">
              <h5 class="card-title">
                Birria Gum
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
          <a data-bs-toggle="modal" data-bs-target="#BratwurstModal">
            <img src="http://localhost/ExoticGum/images/bratwurst.png" class="card-img-top" alt="Bratwurst Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#BratwurstModal">
              <h5 class="card-title">
                Bratwurst Gum
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
          <a data-bs-toggle="modal" data-bs-target="#BreadfruitModal">
            <img src="http://localhost/ExoticGum/images/breadfruit.png" class="card-img-top" alt="Breadfruit Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#BreadfruitModal">
              <h5 class="card-title">
                Breadfruit Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#ChamoyModal">
            <img src="http://localhost/ExoticGum/images/chamoy.png" class="card-img-top" alt="Chamoy Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#ChamoyModal">
              <h5 class="card-title">
                Chamoy Gum
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
          <a data-bs-toggle="modal" data-bs-target="#ChechebsaModal">
            <img src="http://localhost/ExoticGum/images/chechebsa.png" class="card-img-top" alt="Chechebsa Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#ChechebsaModal">
              <h5 class="card-title">
                Chechebsa Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Cheese_RollModal">
            <img src="http://localhost/ExoticGum/images/cheese_roll.png" class="card-img-top" alt="Cheese Roll Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Cheese_RollModal">
              <h5 class="card-title">
                Cheese Roll Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Chicken_HeartModal">
            <img src="http://localhost/ExoticGum/images/chicken_heart.png" class="card-img-top" alt="Chicken Heart Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Chicken_HeartModal">
              <h5 class="card-title">
                Chicken Heart Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#ChickpeaModal">
            <img src="http://localhost/ExoticGum/images/chickpea.png" class="card-img-top" alt="Chickpea Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#ChickpeaModal">
              <h5 class="card-title">
                Chickpea Gum
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
          <a data-bs-toggle="modal" data-bs-target="#CrepeModal">
            <img src="http://localhost/ExoticGum/images/crepe.png" class="card-img-top" alt="Crepe Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#CrepeModal">
              <h5 class="card-title">
                Crepe Gum
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
          <a data-bs-toggle="modal" data-bs-target="#CriadillaModal">
            <img src="http://localhost/ExoticGum/images/criadilla.png" class="card-img-top" alt="Criadilla Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#CriadillaModal">
              <h5 class="card-title">
                Criadilla Gum
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
          <a data-bs-toggle="modal" data-bs-target="#CrocodileModal">
            <img src="http://localhost/ExoticGum/images/crocodile.png" class="card-img-top" alt="Crocodile Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#CrocodileModal">
              <h5 class="card-title">
                Crocodile Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#CrroissantModal">
            <img src="http://localhost/ExoticGum/images/croissant.png" class="card-img-top" alt="Crroissant Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#CrroissantModal">
              <h5 class="card-title">
                Crroissant Gum
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
          <a data-bs-toggle="modal" data-bs-target="#CurryModal">
            <img src="http://localhost/ExoticGum/images/curry.png" class="card-img-top" alt="Curry Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#CurryModal">
              <h5 class="card-title">
                Curry Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Deep_Fried_OreosModal">
            <img src="http://localhost/ExoticGum/images/deep_fried_oreos.png" class="card-img-top"
              alt="Deep Fried Oreo Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Deep_Fried_OreosModal">
              <h5 class="card-title">
                Deep Fried Oreo Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Dill_PickleModal">
            <img src="http://localhost/ExoticGum/images/dill_pickle.png" class="card-img-top" alt="Dill Pickle Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Dill_PickleModal">
              <h5 class="card-title">
                Dill Pickle Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#DuckModal">
            <img src="http://localhost/ExoticGum/images/duck.png" class="card-img-top" alt="Duck Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#DuckModal">
              <h5 class="card-title">
                Duck Gum
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
          <a data-bs-toggle="modal" data-bs-target="#DumplingModal">
            <img src="http://localhost/ExoticGum/images/dumpling.png" class="card-img-top" alt="Dumpling Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#DumplingModal">
              <h5 class="card-title">
                Dumpling Gum
              </h5>
            </a>
            <hr>
            <a href="Order.php" class="btn btn-inner-clr inner-clr">
              Add To Cart!
            </a>
          </div>
        </div>
      </div>
      <div class="modal fade " id="EmpanadaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Empanada Gum</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="http://localhost/ExoticGum/images/empanada.png" class="card-img-top" alt="Empanada Gum">
              <p>

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#Fish_And_ChipsModal">
            <img src="http://localhost/ExoticGum/images/fish_and_chips.png" class="card-img-top"
              alt="Fish and Chips Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Fish_And_ChipsModal">
              <h5 class="card-title">
                Fish and Chips Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Fried_ChickenModal">
            <img src="http://localhost/ExoticGum/images/fried_chicken.png" class="card-img-top" alt="Fried Chicken Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Fried_ChickenModal">
              <h5 class="card-title">
                Fried Chicken Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#FrogModal">
            <img src="http://localhost/ExoticGum/images/frog.png" class="card-img-top" alt="Frog Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#FrogModal">
              <h5 class="card-title">
                Frog Gum
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
          <a data-bs-toggle="modal" data-bs-target="#FufuModal">
            <img src="http://localhost/ExoticGum/images/fufu.png" class="card-img-top" alt="Fufu Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#FufuModal">
              <h5 class="card-title">
                Fufu Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Hamburger_HelperModal">
            <img src="http://localhost/ExoticGum/images/hamburger_helper.png" class="card-img-top"
              alt="Hamburger Helper Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Hamburger_HelperModal">
              <h5 class="card-title">
                Hamburger Helper Gum
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
          <a data-bs-toggle="modal" data-bs-target="#JalapenoModal">
            <img src="http://localhost/ExoticGum/images/jalapeno.png" class="card-img-top" alt="Jalapeno Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#JalapenoModal">
              <h5 class="card-title">
                Jalapeno Gum
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 my-2 text-center">
      <div class="col">
        <div class="card card-gums text-center h-100 mx-4 px-4 py-2 my-2">
          <a data-bs-toggle="modal" data-bs-target="#JollofModal">
            <img src="http://localhost/ExoticGum/images/jollof.png" class="card-img-top" alt="Jollof Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#JollofModal">
              <h5 class="card-title">
                Jollof Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Kangaroo_TailModal">
            <img src="http://localhost/ExoticGum/images/kangaroo_tail.png" class="card-img-top" alt="Kangaroo Tail Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Kangaroo_TailModal">
              <h5 class="card-title">
                Kangaroo Tail Gum
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
          <a data-bs-toggle="modal" data-bs-target="#KebabModal">
            <img src="http://localhost/ExoticGum/images/kebab.png" class="card-img-top" alt="Kebab Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#KebabModal">
              <h5 class="card-title">
                Kebab Gum
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
          <a data-bs-toggle="modal" data-bs-target="#Kiwi_BurgerModal">
            <img src="http://localhost/ExoticGum/images/kiwi_burger.png" class="card-img-top" alt="Kiwiburger Gum">
          </a>
          <div class="card-body">
            <a data-bs-toggle="modal" data-bs-target="#Kiwi_BurgerModal">
              <h5 class="card-title">
                Kiwiburger Gum
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