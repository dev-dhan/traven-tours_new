<!DOCTYPE html>
<html lang="en">

<?php
include("include/head.inc.php");
?>

<style>
  .hero .container {
    align-items: start;
  }

  .form-control {
    font-size: 1.5rem;
    height: 48px;
    border-radius: 18px;

  }

  .btn-job {
    margin-top: 20px;
    border-radius: 30px;
    padding: 10px 50px;
    margin-left: auto !important;
  }

  .btn-job:hover {
    background-color: #05274a;
  }

  .message-us {
    height: 200px !important;
  }

  .fa-solid {
    font-size: 35px;
    margin: 0;
  }

  .location .card-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px !important;

  }

  .location .category-card {
    padding: 30px;
    min-height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .location .card-text {
    margin-top: -8px !important;
  }

  .map {
    padding: 60px;
  }

  .map .container-xl {
    height: 650px;
  }

  @media (max-width: 767.98px) {

    .map .container-xl {
      height: 350px;
    }

    .hero {
      padding: 50px !important;
    }
  }

  @media (max-width: 575.98px) {

    .map {
      padding: 60px 15px;
    }

    .map .container-xl {
      height: 350px;
    }
  }

  #success-message-content {
    justify-content: space-between;
    flex: 1;
    display: flex;
    border-radius: 18px;
    padding: 10px 20px;
  }

  #x-btn {
    cursor: pointer;
  }

  #success-message {
    color: #005d00;
    padding: 10px 15px;
    width: 100%;
    margin: auto;
  }

  .btn-form {
    font-size: 15px;
    
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

      <section class="section hero has-bg-image job-post-hero" id="home" aria-label="home">
        <div class="container">

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 100%; --height: 100%;">
              <img src="./assets/images/hero-banner-1.png" width="100%" height="100%" alt="hero banner"
                class="img-cover">
            </div>

          </figure>
          <!-- FORM STARTS HERE -->
          <div class="hero-content">
            <!-- <p class="sub-heading">Your Partner in Career Success</p> -->
            <h1 class="h1 section-title">
              Get In Touch <span class="span"> With Us</span>
            </h1>

            <form class="needs-validation" novalidate id="myForm">
              <div class="form-row">
                <div id="success-message" style="display:none;">
                  <div class="alert alert-success d-flex" id="success-message-content">
                    <i>Your message was successfully sent!</i>
                    <span id="x-btn">X</span>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" name="firstname" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3-">
                  <label for="validationCustom02">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" name="lastname" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom03">Email Address</label>
                  <input type="email" class="form-control" id="validationCustom03" name="email" required>
                  <div class="invalid-feedback">
                    Please provide a valid email address.
                  </div>

                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom04">Subject</label>
                  <input type="email" class="form-control" id="validationCustom03" name="email" required>
                  <div class="invalid-feedback">
                    Please provide your reason.
                  </div>

                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom04">Purpose</label>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-form" type="button" data-toggle="dropdown" aria-expanded="false">
                      Select Purpose
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Partnership Inquiry</a>
                      <a class="dropdown-item" href="#">Others</a>
                    </div>
                </div>

                </div>
              </div>
              
              <div class="form-row">

                <div class="col-md-12 mb-3">
                  <label for="validationTextarea">Message</label>
                  <textarea class="form-control message-us" id="validationTextarea" name="message" required></textarea>
                  <div class="invalid-feedback">
                    Please enter a message.
                  </div>
                </div>
              </div>

              <button class="btn btn-primary btn-job" id="submitBtn" type="submit">Submit</button>

            </form>


          </div>



        </div>
      </section>

      <!-- 
        - #Location
      -->

      <section class="section location" aria-label="category">
        <div class="container">

          <!-- <p class="section-subtitle">FEATURE</p>

          <h2 class="h2 section-title category-title">
            What We Offer
          </h2> -->

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Email</a>
                </h3>

                <p class="card-text">
                  email@talentus.com
                </p>

                <!-- <span class="card-badge">7 Courses</span> -->

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <i class="fa-solid fa-map-location-dot"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Address</a>
                </h3>

                <p class="card-text">
                  Rockwell Center, 5/F Phinma Plaza, 39 Plaza Dr, Makati, 1200 Metro Manila
                </p>

                <!-- <span class="card-badge">7 Courses</span> -->

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <i class="fa-solid fa-clock"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Working Hours</a>
                </h3>

                <p class="card-text">
                  2:00 am - 5:00 pm
                </p>

                <!-- <span class="card-badge">7 Courses</span> -->

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <i class="fa-solid fa-phone"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Phone</a>
                </h3>

                <p class="card-text">
                  (09) 123-123456
                </p>

                <!-- <span class="card-badge">7 Courses</span> -->

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="map">
        <div class="container-xl">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61788.41571300793!2d120.98327468123257!3d14.554799296913986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a0ed01%3A0x2b066ed57830cace!2sMakati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700838307885!5m2!1sen!2sph"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </section>

      <!-- 
    - #FOOTER
      -->
      <?php
      include("include/footer.inc.php");
      ?>
      <!-- Script for Boostrap form -->

      <script>
        $(document).ready(function () {
          // email validation
          $('#myForm').on('submit', function (event) {
            if (this.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            $(this).addClass('was-validated');

          });



          const form = document.getElementById("myForm");
          const successMessage = document.getElementById("success-message");
          const buttonClose = document.querySelector("#x-btn");

          buttonClose.addEventListener("click", function () {
            successMessage.style.display = "none";
          });

          $('#myForm').submit(function (e) {
            e.preventDefault();
            let firstname = $('#validationCustom01').val().trim();
            let lastname = $('#validationCustom02').val().trim();
            let email = $('#validationCustom03').val().trim();
            let message = $('#validationTextarea').val().trim();

            if (!firstname || !lastname || !email || !message) {
              return; // Do not proceed if any field is empty
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
              return; // Do not proceed if email is not valid
            }
            var form = $(this);

            var formData = new FormData(form[0]);

            $.ajax({
              type: 'POST',
              url: 'mail-contactUs.php',
              data: formData,
              contentType: false,
              processData: false,
              success: function (response) {
                // Display a success message to the user
                form[0].reset();
                successMessage.style.display = "flex"; // Corrected ID from '#successMessage' to 'successMessage'
                $('#submitBtn').prop('disabled', false);
                form.removeClass('was-validated');
              },
              error: function (error) {
                // Display an error message to the user
                alert('An error occurred: ' + error.statusText);
                $('#submitBtn').prop('disabled', false);
              }
            });
          });
        });
      </script>


</body>

</html>