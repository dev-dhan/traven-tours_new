<!DOCTYPE html>
<html lang="en">

<?php
include("include/head.inc.php");
?>
<style>
  #jobImage_container {
    width: 400px;
    height: 400px;
  }
</style>

<body id="top">

  <!-- Header -->
  <?php
  include("include/header.inc.php")
    ?>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <?php 
        include("components/mainPageIntro.php");
      ?>
      <!-- <section class="section hero has-bg-image job-post-hero" id="home" aria-label="home">
        <div class="container">

          <div class="hero-content">
            <p class="sub-heading">Your Partner in Career Success</p>
            <h1 class="h1 section-title">
              Connecting Talent with <span class="span">Opportunity</span>
            </h1>

            <p class="hero-text">
              Welcome to Talent Us Inc., where we make the perfect match
              between exceptional talent and the companies that need them. </p>

            <a href="#" class="btn has-before">
              <span class="span">Contact Us</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">
            <div class="img-holder one" style="--width: 100%; --height: 100%;">
              <img src="./assets/images/hero-banner-1.png" width="100%" height="100%" alt="hero banner"
                class="img-cover">
            </div>
          </figure>

        </div>
      </section> -->



      <!-- 
        - #Service
      -->
      <?php 
        include("components/service.php");
      ?>

      <!-- 
        - #ABOUT
      -->
      <?php 
        include("components/aboutUs.php");
      ?>


    <!-- 
        - #PROMO
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Our Latest Promos</p>

          <h2 class="h2 section-title">Ongoing Promos</h2>

          <?php
          include("recent-job.php");
          ?>

          <!-- <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape"> -->

        </div>
        <a href="jobpostpage.php" class="btn has-before btn-news">
          <span class="span">View More</span>

          <i class="fa-solid fa-angles-right"></i>
        </a>
      </section>


 

      <!-- 
        - #PARTNERSHIP
      -->
      <?php 
        include("components/partnership.php");
      ?>

      <!-- 
        - #VIDEO
      -->
      <!-- <section class="video-section">
        <div class="video-container">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1jd9QJFFR1E?si=xI-LwsC_BIXa94E0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </section> -->


      <!-- 
        - #TESTIMONIAL
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

      <!-- Testimonial -->
      <?php 
        include("components/testimonial.php");
      ?>
      

    </article>
  </main>

  


  <section class="banner">

      <div class="banner-container">
        <div class="banner-content-con">
            <h1 class="banner-heading">Got A Question? We Would Be Happy To Help!</h1>
            <div class="banner-btn-con">
          <a href="jobpost.php" class="btn has-before btn-banner" data-toggle="modal" data-target="#exampleModal">
              <span class="span">Terms And Condition</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

            <a href="jobpost.php" class="btn has-before btn-banner" data-toggle="modal" data-target="#exampleModal2">
              <span class="span">FAQS</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </div>
        </div>

        <figure class="hero-banner">
            <div class="img-holder one" style="--width: 100%; --height: 100%;">
                <img src="./assets/images/hero-banner-1.png" width="100%" height="100%" alt="hero banner"
                    class="img-cover" id="main_image">
            </div>
        </figure>
        
      </div>

      <!-- Terms And Condition Modal -->
      <?php 
        include("components/termsAndCondition.php");
      ?>

      <!-- FAQS -->
      <?php 
        include("components/faqs.php");
      ?>
    

  </section> 

  

  <!-- Button trigger modal -->
  <!-- Modal -->
  <?php 
  include("components/jobPostModal.inc.php");
  ?>
  <!-- footer -->
  <?php
  include("include/footer.inc.php");
  ?>
</body>

</html>