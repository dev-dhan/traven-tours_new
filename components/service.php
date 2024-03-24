<style>
    .img-content {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    .category-card #card-icon {
        width: auto;
    }
</style>
<section class="section category" aria-label="category">
    <div class="container">

        <p class="section-subtitle">Our Services</p>

        <h2 class="h2 section-title category-title">
            What We Offer
        </h2>

        <ul class="grid-list" id="service-content">
            <!-- <li>
                <div class="category-card" style="--color: 229, 75%, 58%">

                    <div class="card-icon">
                        <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                            alt="Off-Campus Programs" class="img">
                    </div>

                    <h3 class="h3">
                        <a href="#" class="card-title">Services</a>
                    </h3>

                    <p class="card-text">
                        Welcome to Talent Us Inc., where we make the perfect match
                        between exceptional talent and the companies that need them.
                    </p>

                </div>
            </li> -->
        </ul>
    </div>
</section>
<script>



    $(document).ready(function () {

        $.ajax({
            type: 'get',
            url: "crud-serviceContent-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let image_content = response[i].image_content;
                    let title_content = response[i].title_content;
                    let description_content = response[i].description_content;
                    createBlogCard(id, image_content, title_content, description_content);
                }

            }
        });

        function createBlogCard(id, image_content, title_content, description_content) {
            var listItem = $('<li></li>');
            var categoryCard = $('<div class="category-card"></div>');
            categoryCard.css('background-color', '#eceffc'); // Apply color here
            var cardIcon = $('<div class="card-icon" id="card-icon"></div>');
            var imageSrc = `./uploads/${image_content}`; // Variable for image source
            var cardImage = $('<img>').attr({
                src: imageSrc,
                loading: 'lazy',
                alt: 'Off-Campus Programs',
                class: 'img-content'
            });
            var title = $('<h3 class="h3"></h3>').append(`<p class="card-title">${title_content}</p>`);
            var cardText = $('<p class="card-text"></p>').text(`${description_content}`);

            cardIcon.append(cardImage);
            categoryCard.append(cardIcon, title, cardText);
            listItem.append(categoryCard);
            $('#service-content').append(listItem);

        }


    });
</script>