<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--css-->
    <title>Thank you</title>
</head>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap");

:root {
  --primary-color: #3d66cb;
  --tertiary-color: #fff;
  --third-color: #000;
}

body,
html {
  margin: 0;
  padding: 0;
}

.tc-btn {
  text-align: center;
}

.tc-btn button {
  background-color: var(--primary-color);
  color: var(--tertiary-color);
  width: 150px;
  height: 40px;
  border-radius: 15px;
}

.tc-btn button:hover {
  background-color: var(--third-color);
  color: var(--tertiary-color);
}

.thankyou-modal .thankyou-content2 {
  background-color: var(--tertiary-color);
  max-width: 1440px;
  width: 75%;
  height: 100%;
  margin: 0 auto;
}

.thankyou-modal .thankyou-content2 .thankyou_modal {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-family: "Poppins", sans-serif;
  padding: 20px;
}

.thankyou-modal .thankyou-content2 .thankyou_modal img {
  background-color: var(--primary-color);
  border-radius: 50%;
  padding: 15px;
}

.thankyou-modal .thankyou-content2 .thankyou_modal h1 {
  font-size: 35px;
  font-weight: 400;
}

.thankyou-modal .thankyou-content2 .thankyou_modal h4 {
  font-size: 16px;
  font-weight: 500;
}

.thankyou-modal .thankyou-content2 .thankyou_modal h5 {
  color: red;
  font-weight: 400;
  font-size: 14px;
}

.thankyou-modal .thankyou-content2 .thankyou_modal p {
  font-weight: 300px;
  font-size: 12px;
  margin: 4px;
}

.thankyou-modal .thankyou-content2 .thankyou_modal button {
  width: 75%;
  height: 52px;
  border: none;
  background-color: var(--primary-color);
  color: var(--tertiary-color);
  border-radius: 10px;
  font-size: 16px;
  font-weight: 600;
  margin-top: 50px;
}

.thankyou-modal .thankyou-content2 .thankyou_modal button:hover {
  background-color: var(--third-color);
  color: var(--tertiary-color);
}

/*Tablet View*/

@media only screen and (max-width: 990px) {
  .thankyou-modal .thankyou-content2 .thankyou_modal h1 {
    font-size: 35px;
  }
}

/*Mobile View*/

@media only screen and (max-width: 600px) {
  .thankyou_modal p br {
    display: none;
  }

  .thankyou-modal .thankyou-content2 .thankyou_modal button {
    font-size: 14px;
  }
}

</style>

<body>
    <!-- <div class="tc-btn">
        <button type="button" class="btn-agree" data-toggle="modal" data-target="#exampleModal2">Thank you modal
        </button>
    </div> -->

    <div class="modal fade thankyou-modal" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog thankyou-dialog modal-dialog-centered">
            <div class="modal-content2 thankyou-content2">
                <div class="modal-body2 thankyou-body2">
                    <div class="thankyou_modal" tabindex="-1">
                        <img src="images/airplane.png" alt="">
                        <h3>Thank You!</h3>
                        <h4>We received your booking <br>successfully.</h4>
                        <br>
                        <h5>Reminder</h5>
                        <p>If you haven't received your booking ticket within 30<br> mins, call us at 09xxxxxxxx.</p>
                        <p>If you haven't received your booking ticket within 30 <br>usmins, call us at 09xxxxxxxx.</p>
                        <button type="button" class="btn-understand">I Understand</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>    
        document.querySelector(".btn-agree").addEventListener("click", function() {
          document.querySelector(".thankyou_modal").style.display = "block";
          document.querySelector(".modal").style.display = "none";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>