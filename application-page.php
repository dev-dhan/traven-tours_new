<?php
if (isset($_GET['jobPost_id'])) {
  $jobPostId = $_GET['jobPost_id'];
  include("connection/connection.php");
  $sql = "SELECT *  FROM `job_posting`  WHERE  `id` =   $jobPostId";
  $result = mysqli_query($conn, $sql);
  $fetch = mysqli_fetch_assoc($result);
  $job_role = $fetch['job_role'];
  mysqli_close($conn);
} else {
  header('Location: index.php');
  exit();
}
?>
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
  }

  .btn-job:hover {
    background-color: #05274a;
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

  .section-title {
    color: #343a40!important;
    margin-bottom: 30px;
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
    <?php
    if (isset($_GET['jobPost_id'])) {
      $jobPostId = $_GET['jobPost_id'];
    }
    ?>
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
                <div class="col-md-6 mb-">
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
                  <input type="text" class="form-control" id="validationCustom03" name="email" required>
                  <div class="invalid-feedback">
                    Please provide a valid Email Address.
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom03">Contact Number</label>
                  <input type="text" class="form-control" id="validationCustom03" name="email" required>
                  <div class="invalid-feedback">
                    Please provide a valid Contact Number.
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="jobRole">Choosen Promo</label>
                  <?php
                  if (empty($job_role)) {
                    $job_role = "web developer";
                  }
                  echo "<input type='text' id='jobRole' class='form-control' value='$job_role' name='jobRole' readonly>";
                  ?>
                </div>
              </div>


              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationCustom04">Full Address</label>
                  <input type="text" class="form-control" id="validationCustom04" name="address" required>
                  <div class="invalid-feedback">
                    Please provide a valid Address.
                  </div>
                </div>
              </div>

              <!-- <div class="form-row">
                <div class="input-group is-invalid">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Upload your resume</label>
                  </div>
                </div> -->

              <div class="form-row">
                <label>Upload your e-receipt</label>
                <input type="file" id="jobImage_input" class="form-control" accept="file/*" name="resume" required
                  style="height: 100%;">
                <small id="add_imageValidationError" style="color: red;"></small>
              </div>



              <button class="btn btn-primary btn-job" type="submit">Submit form</button>
            </form>

          </div>



        </div>
      </section>

      <!-- 
        - #FOOTER
      -->
      <?php
      include("include/footer.inc.php");
      ?>
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


          $('#jobImage_input').on('change', function () {
            var fileInput = this;
            var maxSize = 2 * 1024 * 1024; // 2MB
            var allowedExtensions = ['pdf', 'docx']; // Add more extensions if needed

            if (fileInput.files.length > 0) {
              var fileName = fileInput.files[0].name;
              var fileSize = fileInput.files[0].size;
              var fileExtension = fileName.split('.').pop().toLowerCase();

              if (fileSize > maxSize) {
                $('#add_imageValidationError').html('Resume size exceeds 2MB. Please choose a smaller file.');
                $(fileInput).val(''); // Clear the selected file
              } else if (!allowedExtensions.includes(fileExtension)) {
                $('#add_imageValidationError').html('Invalid file format. Please choose a valid resume file (pdf, docx).');
                $(fileInput).val(''); // Clear the selected file
              } else {
                $('#add_imageValidationError').html('');
              }
            }
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
            let address = $('#validationCustom04').val().trim();
            let fileInput = $('#jobImage_input')[0];
            let resumeFile = fileInput.files[0];

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
              return; // Do not proceed if email is not valid
            }

            if (!firstname || !lastname || !email || !address || !resumeFile) {
              return; // Do not proceed if any field is empty
            }

            var form = $(this);

            var formData = new FormData(form[0]);

            $.ajax({
              type: 'POST',
              url: 'mail-application.php',
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