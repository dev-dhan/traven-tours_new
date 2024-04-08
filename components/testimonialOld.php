<div class="testimonials-section">

    <!-- Section Header Starts -->
    <header class="section-header">
        <p class="section-subtitle">TESTIMONIAL</p>

        <h2 class="h2 section-title testimonial-title">
            <span class="testimonial-span">What's Our</span> Client Say About Us
        </h2>
        <p class="section-text testimonial-text">
            At Talent Us Inc., we are more than just a recruitment agency – we are your dedicated partners in success.
            Our mission is to empower job seekers and employers by providing exceptional, personalized, and innovative
            recruitment solutions. Here's what sets us apart:
        </p>
    </header>
    <!-- Section Header Ends -->

    <!-- Owl Carousel Slider Starts -->
    <div class="owl-carousel owl-theme testimonials-container" id="testimonial-content">
        <!-- Item1 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>title content</h2>
                </div>
                <p>description_content</p>
            </main>
            <div class="profile">
                <div class="profile-desc">
                    <span>name content</span>
                    <span>job title content</span>
                </div>
            </div>
        </div>
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>title content</h2>
                </div>
                <p>description_content</p>
            </main>
            <div class="profile">
                <div class="profile-desc">
                    <span>name content</span>
                    <span>job title content</span>
                </div>
            </div>
        </div>
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <h2>title content</h2>
                </div>
                <p>description_content</p>
            </main>
            <div class="profile">
                <div class="profile-desc">
                    <span>name content</span>
                    <span>job title content</span>
                </div>
            </div>
        </div>

    </div>
    <!-- Owl Carousel Slider Ends -->

</div>

<script>



    $(document).ready(function () {

        $.ajax({
            type: 'get',
            url: "crud-testimonialContent-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let title_content = response[i].title_content;
                    let description_content = response[i].description_content;
                    let name_content = response[i].name_content;
                    let jobTitle_content = response[i].jobTitle_content;

                    createBlogCard(id, title_content, description_content, name_content, jobTitle_content);
                }

            }
        });

        function createBlogCard(id, title_content, description_content, name_content, jobTitle_content) {

            // Assuming variables title_content, description_content, name_content, and jobTitle_content are defined

            // Create the main div with class "item testimonial-card"
            var testimonialCard = $('<div class="item testimonial-card"></div>');

            // Create the main section with class "test-card-body"
            var testCardBody = $('<main class="test-card-body"></main>');

            // Create the div with class "quote" and its contents
            var quote = $('<div class="quote"><i class="fa fa-quote-left"></i><h2>' + title_content + '</h2></div>');

            // Create the paragraph with description content
            var description = $('<p>' + description_content + '</p>');

            // Append the quote and description to the main section
            testCardBody.append(quote, description);

            // Create the profile div
            var profile = $('<div class="profile"></div>');

            // Create the div with class "profile-desc" and its contents
            var profileDesc = $('<div class="profile-desc"><span>' + name_content + '</span><span>' + jobTitle_content + '</span></div>');

            // Append the profile description to the profile div
            profile.append(profileDesc);

            // Append the main section and profile to the testimonial card
            testimonialCard.append(testCardBody, profile);

            // Append the testimonial card to a container element (assuming you have one with id "container")
            $('#testimonial-content').append(testimonialCard);
        }
    });
</script>