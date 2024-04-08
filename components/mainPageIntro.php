<style>
    .hero-content .sub-heading {
        text-align: center;
    }
</style>

<section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-main-img.png')">
    
    <div class="container">

        <div class="hero-content">
        <p class="sub-heading" id="main_subheading">Embark on Unforgettable Journeys Tailored Just for You</p>
        <h1 class="h1 section-title" id="main_heading">
            We always make sure you travel safe, fun and easy.
                <!-- <span class="span">Opportunity</span> -->
            </h1>

            <p class="hero-text" id="main_text">
            Welcome to See and Explore  Travel & Tours, where the world becomes your playground and every journey is a story waiting to be told. </p>

            <a href="contact-us.php" class="btn has-before">
                <span class="span">Contact Us</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

        </div>

        <figure class="hero-banner">
            <div class="img-holder one" style="--width: 100%; --height: 100%;">
                <img src="./assets/images/hero-banner-1.png" width="100%" height="100%" alt="hero banner"
                    class="img-cover" id="main_image">
            </div>
        </figure>

    </div>
</section>

<script>
    $(document).ready(function () {
        jobPostList();
        function jobPostList() {
            $.ajax({
                type: 'get',
                url: "./crud-mainPageIntroContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    console.log("Hello!");
                    console.log(response);

                    if (response.length > 0) {
                        let id = response[0].id;
                        let main_subheading = response[0].main_subheading;
                        console.log(main_subheading);
                        let main_heading = response[0].main_heading;
                        let main_text = response[0].main_text;
                        let main_img = response[0].main_image;

                        $("#main_subheading").text(main_subheading);
                        $("#main_heading").text(main_heading);
                        $("#main_text").text(main_text);
                        $('#main_image').attr('src', `./uploads/${main_img}`);

                    }
                }
            });
        }
    }); 
</script>