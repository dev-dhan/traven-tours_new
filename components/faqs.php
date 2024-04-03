

<style>
    /* Frequently Ask Question Style */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.modal-dialogCSS {
    display: flex;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    width: 100vw;
}

.modal-contentCSS {
    height: 926px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
    padding: 60px;
    gap: 40px;
    font-family: "Inter";
}

.faq-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.faq-header>h1 {
    font-size: 50px;
    font-weight: bold;
    font-family: "Poppins";
}

.faq-wrapper {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
    padding: 10px 20px;
    overflow: auto;
    gap: 30px;
}

.faq-wrapper::-webkit-scrollbar {
    width: 6px;
}

.faq-wrapper::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.faq-wrapper::-webkit-scrollbar-thumb {
    background: #9e9d9d;

}

.faq-button {
    width: 100%;
    background-color: rgba(61, 102, 203, 0.7);
    color: white;
    border: none;
    outline: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
    font-size: 16px;
    padding: 20px 25px;
    border-radius: 18px;
}

.faq-button.active {
    border-radius: 18px 18px 0 0;
    padding: 20px 25px 0px 25px;
}

.faq-button.active img {
    transform: rotate(180deg);
}

.faq-button img {
    width: 50px;
    height: 50px;
}

.faq-button:hover {
    background-color: rgba(61, 102, 203, 0.7);
}

.faq {
    background-color: none;
    border-radius: 0 0 18px 18px;
}

.faq.active {
    border: none;
    background-color: rgba(0, 0, 0, 0);

}

.pannel {
    overflow: hidden;
    background-color: rgba(61, 102, 203, 0.7);
    display: none;
    border-radius: 0 0 18px 18px;
    padding: 0px 25px;
}

.pannel p {
    color: white;
    font-size: 14px;
    font: normal;
    text-align: justify;
}

.modal-button {
    background-color: #3D66CB;
    color: white;
    max-width: 303px;
    width: 100%;
    height: 52px;
    border-radius: 10px;
    border: none;
    font: bold 16px "Inter";
}

.modal-button:hover {
    opacity: 70%;

}

.modal-button-container {
    width: 100%;
    display: flex;
    justify-content: center;
}



.modal-sectionCSS .modal-dialogCSS {
    max-width: 100% !important;
    max-height: 100% !important;
}


.terms-footer button {
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 14px;
  width: 303px;
  height: 52px;
  border-radius: 10px;
  background-color: #26b7d8;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
}








/* Large Screen */
@media (min-width: 992px) {

    .modal-contentCSS {
        width: 853px;
    }

    .faq-button {
        font-size: 16px;
    }
}

/* Medium Screen */
@media (min-width: 768px) and (max-width: 991px) {
    .faq-button {
        font-size: 16px;
    }

    .modal-sectionCSS {
        padding: 50px !important;
        max-width: 100% !important;
        max-height: 100vh !important;
    }

    .modal-contentCSS {
        border-radius: 18px;
        padding: 50px 10px;
        gap: 10px;
        margin-top: -26px;
        max-height: 100%;
        height: auto;
    }


    .faq-button img {
        width: 30px;
        height: 30px;
    }

    .faq-header>h1 {
        font-size: 35px;
        font-weight: bold;
    }

    .faq-header>p {
        font-size: 14px;
    }
}

/* Small Screen */
@media (max-width: 767px) {
    .modal-contentCSS {
        border-radius: 18px;
        padding: 50px 10px;
        gap: 10px;
        height: 100%;
        max-height: 90vh;
    }

    .modal-sectionCSS {
        padding: 50px 15px !important;
        max-width: 100% !important;
        max-height: 100% !important;
    }

    .faq-button img {
        width: 25px;
        height: 25px;
    }

    .faq-button {
        font-size: 14px;
    }

    .faq-header>h1 {
        font-size: 30px;
    }

    .faq-header>p {
        font-size: 14px;
    }
}
</style>


<!-- Modal -->
 <div class="modal fade modal-sectionCSS " id="exampleModal2" tabindex="-1" role="dialog"
 aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-xl modal-dialogCSS" role="document">
     <div class="modal-content modal-contentCSS ">
         <div class="faq-header">
             <h1>Frequently Ask Question</h1>
             <p>Subtitle: Find Answers to Your Queries Below</p>
         </div>
         <div class="faq-wrapper">
             <div class="faq">
                 <button class="faq-button">
                 DO YOU ACCEPT SOLO TRAVELER? 
                     <img src="assets/images/arrowdown.png" alt="">
                 </button>
                 <div class="pannel">
                     <p>
                     Yes, we accept solo and first time travelers.
                     </p>
                 </div>
             </div>

             <div class="faq">
                 <button class="faq-button">
                 WHAT ARE THE REQUIREMENTS NEEDED?                      
                 <img src="assets/images/arrowdown.png" alt="">
                 </button>
                 <div class="pannel">
                     <p>
                     -If employed (COE, Leave of absence, 6months payslip, ID, bank statement, passport, itinerary/voucher, roundtrip ticket).
                     </p>
                     <p>
                     - If business owner (Business permits DTI, BIR cert, bank statement, passport, itinerary/vpucher, roundtrip ticket)                     
                    </p>
                    <p>
                    - If Freelancers (Proof of income/contracts, BIR, DTI if needed, bank statement, passport, itinerary/vpucher, roundtrip ticket).                    
                     </p>
                    <p>
                    - If sponsored (AOS from sponsor with notarized, proof of relation, bank statement of sponsor, passport, itinerary/voucher, roundtrip ticket).                    
                </p>

                 </div>
             </div>
             <div class="faq">
                 <button class="faq-button">
                 DO YOU PROVIDE ORIENTATION?                     
                 <img src="assets/images/arrowdown.png" alt="">
                 </button>
                 <div class="pannel">
                     <p>
                     Yes, we provide orientation sessions for first-time or solo travelers for iwas offload experience. After the payment, we will contact you for the scheduled orientation.

                     </p>
                 </div>
             </div>

             <div class="faq">
                 <button class="faq-button">
            WHAT MODE OF PAYMENT DO YOU ACCEPT?                     
            <img src="assets/images/arrowdown.png" alt="">
                 </button>
                 <div class="pannel">
                     <p>
                     We only accept bank transfers or cash (BPI, BDO, Security bank, and Gcash)

                     </p>
                 </div>
             </div>

             <div class="faq">
                 <button class="faq-button">
                    WHERE IS YOUR OFFICE?                     
            <img src="assets/images/arrowdown.png" alt="">
                 </button>
                 <div class="pannel">
                     <p>
                     Our office is located in Calauan, Laguna. You can check our location bar to view. 
                     </p>
                 </div>
             </div>


         </div>
         <div class="modal-button-container">
         <div class="modal-footer terms-footer">
                <button type="button" class="btn-agree" data-dismiss="modal">I
                    Understand</button>
            </div>
     </div>
 </div>
</div>

<script>
    
var acc = document.getElementsByClassName("faq-button");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        this.parentElement.classList.toggle("active");

        var pannel = this.nextElementSibling;

        if (pannel.style.display === "block") {
            pannel.style.display = "none";
        } else {
            pannel.style.display = "block";
        }
    });
}

</script>
