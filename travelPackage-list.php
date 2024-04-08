<section class="section course" id="courses" aria-label="course">
    <div class="container">

        <ul class="grid-list" id="travel-package-list">

        </ul>

    </div>
</section>




<script>
    $(document).ready(function () {

        $.ajax({
            type: 'get',
            url: "crud-travelPackageContent-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                console.log(response);

                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let travel_package_image = response[i].travel_package_image;
                    let travel_package_price = response[i].travel_package_price;
                    let travel_package_description_title = response[i].travel_package_description_title;
                    createBlogCard(id, travel_package_image, travel_package_price, travel_package_description_title);
                }

            }
        });

        function createBlogCard(id, travel_package_image, travel_package_price, travel_package_description_title) {
            var listItem = $(`<li></li>`);
            var courseCard = $(`<div class="course-card"></div>`);
            var figure = $(`<figure class="card-banner img-holder" style="--width: 370; --height: 220;"></figure>`);
            var image = $(`<img src="./uploads/${travel_package_image}" width="370" height="220" loading="lazy" alt="Our Affordable Tour Packages" class="img-cover">`);
            var cardContent = $(`<div class="card-content"></div>`);
            var h3 = $(`<h3 class="h3 card-title">${travel_package_description_title}<h3>`);
            var price = $(`<data class="price" value="29">₱${travel_package_price}</data>`);
            var mainCardBtn = $(`<a href="#" class="btn has-before" id="bookBtn-${id}">
                    <span class="span">Read more</span>
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>`);
            var cardId = $(`<input type="hidden" id="card-number-${id}" value="${id}" class="form-control" required>`);

            figure.append(image);
            courseCard.append(figure);

            courseCard.append(cardContent);
            cardContent.append(h3);
            cardContent.append(price);
            cardContent.append(mainCardBtn);
            cardContent.append(cardId);



            listItem.append(courseCard);
            $('#travel-package-list').append(listItem);

            $(`#bookBtn-${id}`).on('click', function () {
                let cardIdValue = $(`#card-number-${id}`).val();
                let applicationPageUrl = 'bookNow.php?bookPackageNumber=' + encodeURIComponent(cardIdValue);
                window.location.href = applicationPageUrl;
            });
        }
    });



</script>