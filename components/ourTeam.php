<section class="section " aria-label="our-team">
    <div class="container">

        <p class="section-subtitle">OUR TEAM</p>

        <h2 class="h2 section-title category-title">
            Meet Our Awesome Team
        </h2>

        <ul class="grid-list" id="team-content">

        </ul>

    </div>
</section>

<script>

    $(document).ready(function () {

        $.ajax({
            type: 'get',
            url: "crud-teamContent-list.php",
            success: function (data) {
                let response = JSON.parse(data);
                for (let i = 0; i < response.length; i++) {
                    let id = response[i].id;
                    let image_content = response[i].image_content;
                    let name_content = response[i].name_content;
                    let position_content = response[i].position_content;
                    createBlogCard(id, image_content, name_content, position_content);
                }

            }
        });

        function createBlogCard(id, image_content, name_content, position_content) {

            let listItem =`
                <li>
                    <div class="category-card our-team">

                        <div class="img-fluid team-image">
                            <img src="./uploads/${image_content}" class="img-cover" alt="Team Image">
                        </div>

                        <h3 class="h3">
                            <p class="card-title">${name_content}</p>
                        </h3>

                        <p class="card-text teamTitle">${position_content}</p>

                    </div>
                </li>`;

            $('#team-content').append(listItem);

        }


    });
</script>