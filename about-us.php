<!DOCTYPE html>
<html lang="en">

<?php
include("include/head.inc.php");
?>
<style>
  #jobImage_container {
    width: 400px;
    height: 200px;
  }

  .about {
    padding-top: 170px;
  }

  .team-image img {
    min-height: 300px;
    max-height: 300px;
    width: 100%;
    height: 100%;
    padding: 0;
    margin-bottom: 20px;
    object-fit: cover;
  }

  .our-team {
    padding: 0;
  }

  .teamTitle {
    margin-top: -8px !important;
  }

  .grid-list {
    grid-template-columns:
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
        - #ABOUT
      -->

      <?php 
        include("components/aboutUs.php");
      ?>


      <!-- 
        - #service
      -->

      <?php 
        include("components/service.php");
      ?>

      <!-- 
        - #OURTEAM
      -->
      <?php 
        include("components/ourTeam.php");
      ?>



      <!-- 
        - #TESTIMONIAL
      -->
      
        //include("components/testimonial.php");
    
      <!-- 
        - #FOOTER
      -->
      <?php
      include("include/footer.inc.php");
      ?>
</body>

</html>