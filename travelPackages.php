<!DOCTYPE html>
<html lang="en">
<?php
include("include/head.inc.php")
  ?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
  }


</style>

<body id="top">

  <!-- 
    - #HEADER
  -->
  <?php
  include("include/header.inc.php");
  ?>

  <main>
    <article>



      <!-- 
        - #HERO
      -->

      <section class="section hero has-padding" id="home" aria-label="home">

        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <!-- 
        - #PACKAGE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">Travel and Tour Packages</p>

          <h2 class="h2 section-title">Our Popular Travel and Tour Packages</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/package_1.jpg" width="370" height="220" loading="lazy"
                    alt="Our Affordable Tour Packages" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">ends in 2 Weeks</span>
                </div>

                <div class="card-content">

                  <!-- <span class="badge">Beginner</span> -->

                  <h3 class="h3">
                    <a href="#" class="card-title">
                    Visit Baguio on a Weekend with a Day Tour or 2 Days & 1 Night Package
                    </a>
                  </h3>

                  <div class="wrapper">

    

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">₱2099</data>

                 
          <a href="bookNow1.php" class="btn has-before">
            <span class="span">Read more</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

                </div>
                

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/package_2.jpg" width="370" height="220" loading="lazy"
                    alt="Our Affordable Tour Packages" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">ends in 2 Weeks</span>
                </div>

                <div class="card-content">

                  <!-- <span class="badge">Beginner</span> -->

                  <h3 class="h3">
                    <a href="#" class="card-title">
                    Explore La Union on a Weekend with a Day Tour or 2 Days & 1 Night Package
                    </a>
                  </h3>

                  <div class="wrapper">

    

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">₱3099</data>

                 
          <a href="bookNow2.php" class="btn has-before">
            <span class="span">Read more</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

                </div>
                

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/package_3.jpg" width="370" height="220" loading="lazy"
                    alt="Our Affordable Tour Packages" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">ends in 2 Weeks</span>
                </div>

                <div class="card-content">

                  <!-- <span class="badge">Beginner</span> -->

                  <h3 class="h3">
                    <a href="#" class="card-title">
                    4 Days & 3 Nights Boracay Trip with Round-Trip Airfare, Hotel & More </a>
                  </h3>

                  <div class="wrapper">

    

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">₱11,899</data>

                 
          <a href="bookNow3.php" class="btn has-before">
            <span class="span">Read more</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

                </div>
                

              </div>
            </li>

            
                  </ul>

                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn has-before">
            <span class="span">Browse more packages</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>

    </article>
  </main>
  
  <!-- Button trigger modal -->
  <!-- Modal -->
  <?php 
    include("components/jobPostModal.inc.php");
  ?>
  <!-- 
    - #FOOTER
  -->
  <?php
  include("include/footer.inc.php");
  ?>
</body>

</html>