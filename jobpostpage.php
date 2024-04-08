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

  #jobImage_container {
    width: 400px;
    height: 400px;
  }
</style>

<body id="top" class="job-post-body">

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

      <section class="section blog has-bg-image job-post" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Our Latest Promos</p>

          <h2 class="h2 section-title">Ongoing Promos 
</h2>

          <?php include("jobPostPageContent.php"); ?>

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