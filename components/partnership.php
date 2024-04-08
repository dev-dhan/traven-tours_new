<section class="partnership" aria-label="partnership">

<h2 class="h2 section-title">Our Partnership
</h2>
    <div class="our-clients">
        <ul id="partnership-content">
        </ul>
    </div>
</section>

<script>



    $(document).ready(function () {

        $.ajax({
            type: 'get',
            url: "crud-partnershipContent-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let image_content = response[i].image_content;
                    let title_content = response[i].title_content;
                    createBlogCard(id, image_content, title_content);
                }

            }
        });

        function createBlogCard(id, image_content, title_content) {
            var listItem = $('<li></li>');
            var imageSrc1 = `./uploads/${image_content}`; // Variable for image source
            var imageSrc2 = `./uploads/${image_content}`; // Variable for image source
            var cardImage1 = $('<img>').attr({
                src: imageSrc1,
                loading: 'lazy',
            });
            var cardImage2 = $('<img>').attr({
                src: imageSrc2,
                loading: 'lazy',
            });

            listItem.append(cardImage1, cardImage2);
            $('#partnership-content').append(listItem);
        }
    });
</script>