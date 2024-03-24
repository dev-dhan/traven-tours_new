<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tag
    -->
    <title>See and Explore</title>


    <!-- *******  Font Awesome Icons Link  ******* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- *******  Owl Carousel Links  ******* -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- 
    - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/travel-logo.png">

    <!-- 
    - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <ul id="blog-list" class="grid-list"></ul>
    <script>

        $.ajax({
            type: 'get',
            url: "recent-job-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let jobImage = response[i].job_image;
                    let jobDateCreated = response[i].date_created;
                    let jobRole = response[i].job_role;
                    let jobDescription = response[i].job_description;
                    let jobType = response[i].job_type;
                    let jobQualification = response[i].qualification;
                    console.log(jobQualification);
                    createBlogCard(id, jobImage, jobDateCreated, jobRole, jobDescription, jobType, jobQualification);
                }

            }
        });


        // Function to create and append the blog card
        function createBlogCard(id, jobImage, jobDateCreated, jobRole, jobDescription, jobType, jobQualification) {
            console.log(id);
            // Create li element
            var liElement = $("<li>");

            // Create div with class 'blog-card'
            var blogCardDiv = $("<div>").addClass("blog-card");

            // Create figure element with class 'card-banner img-holder has-after'
            var figureElement = $("<figure>").addClass("card-banner img-holder has-after").css("--width", "370").css("--height", "370");

            // Create img element
            var imgElement = $("<img>").attr("src", "./assets/images/blog-2.jpg").attr("width", "370").attr("height", "370").attr("loading", "lazy").addClass("img-cover").attr("alt", "See and Explore Promos");
            imgElement = $("<img>").attr("src", `./uploads/${jobImage}`).attr("width", "370").attr("height", "370").attr("loading", "lazy").addClass("img-cover").attr("alt", "See and Explore Promos");

            // Append img to figure
            figureElement.append(imgElement);

            // Append figure to blog card div
            blogCardDiv.append(figureElement);

            // Create div with class 'card-content'
            var cardContentDiv = $("<div>").addClass("card-content");

            // Create a element with class 'card-btn'
            // var cardBtn = $("<a>").attr("href", "#").addClass("card-btn").attr("aria-label", "read more");

            // Create ion-icon element
            var ionIcon = $("<ion-icon>").attr("name", "arrow-forward-outline").attr("aria-hidden", "true");

            // Create the <a> element
            var cardBtn = $("<a>", {
                "href": "#",
                "class": "card-btn",
                "data-toggle": "modal",
                "data-target": "#staticBackdrop",
                "aria-label": "read more"
            });

            cardBtn.on('click', function (event) {
                // alert(`Hello World! ${id}`);
                $("#jobPost_jobRole").text(jobRole);
                $("#jobPost_jobImage").attr("src", `./uploads/${jobImage}`);
                $("#jobPost_jobType").text(jobType);
                $("#jobPost_jobDateCreated").text(jobDateCreated);
                $("#jobPost_jobDescription").text(jobDescription);
                $("#jobPost_jobQualification").text(jobQualification);
                $("#jobPost_id").val(id);
            });

            // Append ion-icon to card-btn
            cardBtn.append(ionIcon);

            // Append card-btn to card-content
            cardContentDiv.append(cardBtn);

            // Create ul element with class 'card-meta-list'
            var cardMetaList = $("<ul>").addClass("card-meta-list");

            // Create li element with class 'card-meta-item'
            var cardMetaItem = $("<li>").addClass("card-meta-item");

            // Create ion-icon element for calendar
            var calendarIcon = $("<ion-icon>").attr("name", "calendar-outline").attr("aria-hidden", "true");

            // Create span element with class 'span'
            var dateSpan = $("<span>").addClass("span").text(jobDateCreated);

            // Append calendar icon and date span to card-meta-item
            cardMetaItem.append(calendarIcon, dateSpan);

            // Append card-meta-item to card-meta-list
            cardMetaList.append(cardMetaItem);

            // Append card-meta-list to card-content
            cardContentDiv.append(cardMetaList);

            // Create h3 element with class 'h3'
            var titleH3 = $("<h3>").addClass("h3");

            // Create a element with class 'card-title'
            var titleLink = $("<p>").addClass("card-title").text(`${jobRole} Hiring!`);

            // Append title link to h3
            titleH3.append(titleLink);

            // Append h3 to card-content
            cardContentDiv.append(titleH3);

            // Create p element with class 'card-text'
            var originalText = jobDescription;
            var maxLength = 50;
            var truncatedText = originalText.length > maxLength ? originalText.substring(0, maxLength) + " ..." : originalText;
            var textP = $("<p>").addClass("card-text").text(truncatedText);

            // Append text to card-content
            cardContentDiv.append(textP);

            // Append card-content to blog card div
            blogCardDiv.append(cardContentDiv);

            // Append blog card div to li
            liElement.append(blogCardDiv);

            // Append li to the blog list
            $("#blog-list").append(liElement);
        }
    </script>
</body>

</html>