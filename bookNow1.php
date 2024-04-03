<!DOCTYPE html>
<html lang="en">

<?php
include("include/head.inc.php");
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/**/
body {
    font-family: "Poppins";
}

h1 {
    font-weight: bold;
    font-size: 22px;
    text-align: center;
    color: #4A3E3E;
    margin: 0;

}

h2 {
    font-weight: bold;
    font-size: 12px;
    margin: 0;
}

h3 {
    font-weight: normal;
    font-size: 12px;
    text-align: justify;
    margin: 0;
}

main {
    max-width: 940px;
    height: 100%;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 44px 0px;
    gap: 60px;
    overflow: auto;
}

.bookContainer {
    max-width: 882px;
    width: 100%;
    height: 370px;
    display: flex;
    align-items: start;
    gap: 25px;

}

.bookContainer img {
    max-width: 554px;
    width: 100%;
}

.bookDetails {
    display: flex;
    justify-content: start;
    flex-direction: column;
    height: 235px;
    gap: 16px;
    width: 100%;
}

.bookPriceContainer {
    display: flex;
    gap: 10px;
    align-items: center;
    height: 53px;

}

.bookPrice {
    font-size: 35px;
}

.bookDiscountContainer {
    display: flex;
    flex-direction: column;
    gap: 5px;
    height: 53px;
}

.bookDiscount {
    background-color: #26B7D8;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 2px 5px;
}

.discountDuration {
    height: 24px;
    width: 165px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 5px;


}

.discountDuration p {
    font-size: 12px;
}

.duration {
    font-size: 16px;
    font-weight: bold;
    color: #EEEEEE;
}

.bookContactWrapper {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.bookContactNo,
.bookLocation {
    display: flex;
    width: max-content;
    gap: 5px;
    align-items: center;
    height: 21px;
}

.bookLocation img {
    width: 15px;
    height: 20px;
}

.bookContactNo img {
    width: 15px;
    height: 15px;
}

.bookContactNo p,
.bookLocation p {
    padding: 5px 2px;
    font-size: 14px;
}

.bookButton {
    font-size: 16px;
    font-weight: bold;
    font-family: "Inter";
    color: white;
    background-color: #3D66CB;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    height: 52px;
    width: 100%;
    border: none;
    cursor: pointer;
}

.bookButton:hover {
    filter: brightness(90%)
}

.bookDescriptionContainer {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 868px;
    width: 100%;
}

.column1,
.column2 {
    display: flex;
    flex-direction: column;
    gap: 30px;
    width: 100%;
}

.column1 div,
.column2 div {
    display: flex;
    flex-direction: column;
    gap: 14px;
    width: 316px;
}


/* Large Screen */
@media (min-width: 992px) {}

/* Medium Screen */
@media (min-width: 768px) and (max-width: 991px) {
    .bookContainer {
        height: max-content;
        flex-direction: column;
        width: 100%;
        align-items: center;
    }

    .bookDetails {
        justify-content: start;
        flex-direction: column;
        height: 235px;
        gap: 16px;
        max-width: 554px;
    }

    .bookContactWrapper {
        flex-direction: row;
    }

    .column1,
    .column2 {
        align-items: center;
    }

    .column1 div,
    .column2 div {
        width: 290px;
    }

    main {
        padding: 50px;
    }
}

/* Small Screen */
@media (max-width: 767px) {
    .bookContainer {
        height: max-content;
        flex-direction: column;
        width: 100%;
    }

    .bookContactWrapper {
        flex-direction: row;
    }

    main {
        padding: 50px 15px;

    }

    h1 {
        font-size: 16px;
    }

    .bookDescriptionContainer {
        grid-template-columns: 1fr;
    }

    .column1,
    .column2 {
        align-items: center;
    }

    .column1 div,
    .column2 div {
        width: 100%;
    }
}
</style>



<body>
<?php
  include("include/header.inc.php")
    ?>

    <main>
        <h1>4-Day Beaches & Waterfalls Budget Adventure Package to El Nido Palawan with Happiness Hostel</h1>
        <section class="bookContainer">
            <img src="./assets/images/package_1.jpg" alt="">
            <div class="bookDetails">
                <div class="bookPriceContainer">
                    <p class="bookPrice">₱3,200</p>
                    <div class="bookDiscountContainer">
                        <div class="bookDiscount">SAVE 40%</div>
                        <div>₱2099</div>
                    </div>
                </div>
                <div class="discountDuration">
                    <p>Time left to buy</p>
                    <span class="duration">1:00:00</span>
                </div>
                <div class="bookContactWrapper">
                    <div class="bookLocation">
                        <img src="./assets/images/locationIcon.png" alt="">
                        <p>Quezon City</p>
                    </div>
                    <div class="bookContactNo">
                        <img src="./assets/images/phoneIcon.png" alt="">
                        <p>0907888888</p>
                    </div>
                </div>
  
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScN1s_EssPS6nZD2QVGtvkiAdTZhDNYBkfa4Iw8lHBK1_l8yg/viewform" target="_blank">
                <button class="bookButton">BOOK NOW</button>

                </a>
            </div>

        </section>

        <section class="bookDescriptionContainer">
            <div class="column1">
                <div>
                    <h2>Reason to visit Boracay?</h2>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type</h3>
                </div>
                <div>
                    <h2>Inclusion</h2>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type</h3>
                </div>
                <div>
                    <h2>Itinerary for day tour package:</h2>
                    <h3>DAY 1:<br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type</h3>
                </div>
            </div>
            <div class="column2">
                <div>
                    <h3>DAY 2:<br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </h3>
                </div>
                <div>
                    <h2>Itinerary for 2 days & 1 night package:</h2>
                </div>
                <div>
                    <h3>DAY 1:<br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </h3>
                </div>
                <div>
                    <h3>DAY 2:<br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </h3>
                </div>




            </div>
        </section>
        <section class="bookDescriptionContainer">
            <div class="column1">
                <div>
                    <h2>Advance reservation is required</h2>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </h3>
                </div>
            </div>
            <div class="column2">
                <div>
                    <h2>Contact details:</h2>
                </div>
                <div>
                    <h3>DAY 1:<br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                    </h3>
                </div>





            </div>
        </section>
    </main>
</body>

</html>