<!DOCTYPE html>
<html lang="en">

<?php
include ("include/head.inc.php");
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
  include ("include/header.inc.php")
    ?>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <?php
      include ("components/mainPageIntro.php");
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
      include ("components/service.php");
      ?>

      <!-- 
        - #ABOUT
      -->
      <?php
      include ("components/aboutUs.php");
      ?>


      
      <!-- 
        - LATEST PROMOS
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Our Latest Promos</p>

          <h2 class="h2 section-title">Ongoing Promos 
</h2>



          <?php
          include ("recent-job.php");
          ?>

          <!-- <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape"> -->

        </div>
        <a href="jobpostpage.php" class="btn has-before btn-news">
          <span class="span">View More</span>

          <i class="fa-solid fa-angles-right"></i>
        </a>
      </section>
    </article>
  </main>


      <!-- 
        - #PACKAGE PROMO
      -->
      <?php
      include ("components/recent-travelPackage.php");
      ?>

      <!-- 
        - #PARTNERSHIP
      -->
      <?php
      include ("components/partnership.php");
      ?>

      <!-- Testimonial -->

      <section class="section testimonial" id="testimonial" aria-label="Testimonial">
      

          <?php
        include ("components/testimonial.php");
        ?>


      
      </section>


   



  


  <section class="banner">

    <div class="banner-container">

      <div class="banner-message-con">
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
                <img src="./assets/images/question.png" width="100%" height="100%" alt="hero banner"
                    class="img-cover" id="main_image">
            </div>
        </figure>
</div>

<!-- Terms And Condition Modal -->
<?php
include ("components/termsAndCondition.php");
?>

<!-- FAQS -->
<?php
include ("components/faqs.php");
?>
      </div>
     


  </section>





  <!-- Button trigger modal -->
  <!-- Modal -->
  <?php
  include ("components/jobPostModal.inc.php");
  ?>
  <!-- footer -->
  <?php
  include ("include/footer.inc.php");
  ?>
</body>

</html>