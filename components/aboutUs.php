<section class="section about" id="about" aria-label="about">
    <div class="container">

        <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
                <img src="./assets/images/about-banner.png" width="520" height="370" loading="lazy" alt="about banner"
                    class="img-cover" id="about_image" >
            </div>

        </figure>

        <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h1 class="h1 section-title" id="about_heading" >
                Connecting Talent with Opportunity
            </h1>

            <p class="section-text" id="about_text" >
                At Talent Us Inc., we are more than just a recruitment agency – we are your dedicated partners in
                success.
                Our mission is to empower job seekers and employers by providing exceptional, personalized, and
                innovative
                recruitment solutions. Here's what sets us apart:
            </p>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
                class="shape about-shape-4">

        </div>

    </div>
</section>

<script>
    $(document).ready(function () {
        jobPostList();
        function jobPostList() {
            $.ajax({
                type: 'get',
                url: "./crud-aboutUsContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    console.log("Hello!");
                    console.log(response);

                    if (response.length > 0) {
                        let id = response[0].id;
                        let about_heading = response[0].about_heading;
                        let about_text = response[0].about_text;
                        let about_image = response[0].about_image;

                        $("#about_heading").text(about_heading);
                        $("#about_text").text(about_text);
                        $('#about_image').attr('src', `./uploads/${about_image}`);

                    }
                }
            });
        }
    }); 
</script>