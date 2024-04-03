

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap");

:root {
  --primary-color: #3d66cb;
  --tertiary-color: #fff;
  --third-color: #000;
}


.tc-btn {
  text-align: center;
}

.tc-btn button {
  background-color: var(--primary-color);
  color: var(--tertiary-color);
}

.tc-btn button:hover {
  background-color: var(--third-color);
  color: var(--tertiary-color);
}

.terms-modal .terms-dialog .terms-content .close {
  align-self: end;
  margin-top: -50px;
  width: 3%;
  height: 6%;
  border: 2px black solid;
  border-radius: 50%;
  box-sizing: border-box;
}

.terms-modal .terms-dialog .terms-content {
  max-width: 1440px;
  width: 200%;
  height: 100%;
  padding: 60px 30px;
}
.terms-dialog .terms-content .terms-header {
  align-self: center;
}

.terms-modal .terms-dialog .terms-content .terms-header h1 {
  font-family: "Poppins", sans-serif;
  font-size: 50px;
  font-weight: 700;
}

.terms-modal .terms-dialog .terms-content .terms-body {
  padding: 20px 50px;
}

.terms-modal .terms-dialog .terms-content .terms-body .condition {
  padding: 25px 20px;
}

.terms-modal .terms-dialog .terms-content .terms-body .condition h6 {
  font-family: "Inter", sans-serif;
  font-weight: 700;
  font-size: 16px;
}

.terms-modal .terms-dialog .terms-content .terms-body .condition p {
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 14px;
}

.terms-modal .terms-dialog .terms-content .terms-footer {
  align-self: center;
}

.terms-modal .terms-dialog .terms-content .terms-footer button {
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



/*Tablet View*/

@media only screen and (max-width: 990px) {
  .terms-modal {
    padding: 50px;
  }

  .terms-modal .terms-dialog .terms-content {
    width: 130%;
    height: 100%;
    padding: 30px 15px;
  }

  .terms-modal .terms-dialog .terms-content .terms-header h1 {
    font-size: 35px;
  }

  .terms-modal .modal-content2 .thankyou_modal h1 {
    font-size: 35px;
  }

  .terms-modal .terms-dialog .terms-content .close {
    margin-top: -20px;
    width: 6%;
    height: 5%;
  }
}

/*Mobile View*/

@media only screen and (max-width: 600px) {
  .terms-modal {
    padding: 10px;
  }
  .terms-modal .terms-dialog .terms-content {
    width: 100%;
    height: 100%;
    padding: 15px 7px;
  }

  .terms-modal .terms-dialog .terms-content .terms-body {
    padding: 0;
  }

  .terms-modal .terms-dialog .terms-content .terms-header h1 {
    font-size: 35px;
    text-align: center;
  }

  .terms-modal .terms-dialog .terms-content {
    padding: 50px 15px;
  }

  .terms-modal .thankyou_modal p br {
    display: none;
  }

  .terms-modal .terms-dialog .terms-content .close {
    margin-top: -40px;
    width: 8%;
    height: 5%;
  }
}

</style>
<!-- Modal -->
<div class="modal fade terms-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog terms-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content terms-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-header terms-header">
                <h1 class="modal-title" id="exampleModalLabel">Terms and Conditions</h1>
            </div>
            <div class="modal-body terms-body">
                <div class="condition">
                    <p>Read these Terms and Conditions carefully before making a reservation with SEE AND EXPLORE TRAVEL AND TOURS. This forms a binding contract between our company and the client, effective from the date of booking. The individual who makes the reservation agrees to these terms on behalf of everyone in the group and is in charge of making any necessary payments. Purchasing any travel services results in a commercial agreement between our organization and the customer, which the client acknowledges and accepts as binding.</p>
                </div>
                <div class="condition">
                    <h6>BOOKING CONDITIONS</h6>
                    <p>After payment is received, all trip plans will be reserved. Clients will get a confirmation and pro-forma invoice for their booking via email upon request after confirming and submitting their booking and personal travel details. Note that there are NO REFUNDS for any reservations made. If you make a reservation less than one (1) month in advance of your planned trip, FULL PAYMENT is needed.</p>
                    <p>After the full payment has been received, the client will get an email with the travel voucher. The travel documents-e-tickets, vouchers, and itinerary-will be sent to the client via email. Please print them out, since the client will need to present them for all services while visiting the desired location. If you CANCEL YOUR RESERVATION while it is still being processed, SEE AND EXPLORE TRAVEL AND TOURS has the right to charge you PHP 5,000 as a damage fee. Anyone who agrees to comply with this agreement and has the authorization, capacity, and right to do business may make reservations with our company. This agreement is subject to the laws of the Philippines and is published in accordance with its regulations.
                      FOR INSTALLMENT: The company we represent provides clients with an installation program that is valid for three months in advance of the intended departure date. We simply need to pay PHP 3,000 for reservations. 60% Sixty percent of the down payment will be paid one month after the reservation fee is paid, and the remaining 40% forty percent will be paid one month prior to the departure date.</p>

                  </div>
                <div class="condition">
                    <h6>TERMS OF PAYMENT</h6>
                    <p>Full payment is needed if the reservation is made less than two months in advance of the client's arrival date. We only take Gcash and bank transfers from Security Bank and BPI. Unless stated otherwise, all listed prices are per person and are calculated in Philippine Pesos (PHP). We are not responsible for any changes in currency conversion rates that may occur after the time of booking.</p>
                </div>
                <div class="condition">
                    <h6>CANCELLATION TERMS/REFUNDS</h6>
                    <p>The tour package and reservation fees are non-refundable once the booking is verified and completed. Tours, transportation, and accommodation unused amounts are not refundable. However, clients may be eligible for a refund in the event of force majeure, natural disasters, or required government cancellations, according to the terms and conditions set out by the supplier. SEE AND EXPLORE TRAVEL AND TOURS is not liable for any airline-related cancellations, delays, or rescheduling that occurs. It just serves as an agent for the airlines.
                    LIABILITY</p>
                    <p>Booking a reservation with SEE AND EXPLORE TRAVEL AND TOURS binds the client to the following terms and conditions: Our company acts as an agent and intermediary for suppliers and service providers and operates in good faith when it comes to air and sea carriage, hotel accommodations, ground transportation, tours, meals, cruises, and other services. As such, it is not liable for breach of contract or any deliberate or negligent actions or omissions on the part of suppliers, which may result in any loss, damage, delay, injury, sickness, or accident sustained by the client and his travel companions while using the indicated services. Additionally, this agency will not be held liable for any losses, injuries, or damages that a traveler may suffer as a result of terrorist activities, labor or social unrest, technical issues, illnesses, local laws, weather-related delays, changes in plans brought on by weather-related delays, strikes, unusual circumstances, or any other irregularities, actions, omissions, or circumstances that are beyond the reasonable control of the travel agent. Travelers freely undertake all dangers associated with this kind of travel, whether anticipated or not.
                  
                    </p>

                    <p>During the tour, the owner is responsible for any baggage. We retain the right to modify these general booking conditions at any time and without prior notice. All passengers must show consideration for the tour leader and the duration of the scheduled trip, including stopping for pictures, breaks, hiking, strolling, or visiting interesting sites. Please be aware that, if appropriate, overtime costs may be charged. Any passenger who disrupts another person in the car, including the tour guide or driver, or who constitutes a risk to the safety and smooth operation of the journey, may be asked to leave at any time. The company we represent does not take responsibility for airline flight cancellations or delays since they are beyond its reasonable control. The airline company is accountable for taking the appropriate corrective measures to resolve any delays or suspensions and the ensuing fallout. Regardless, we will provide the support required to allay guest fears and ensure their well-being; however, the final say on such requests will rest with the airline company.
                  
                  </p>

                  <p>It is the client's obligation to make sure they have the appropriate exit and reentry paperwork, as well as a valid passport and visa for the nation or countries they want to visit. Timetables, routings, programs, and (tour) costs are subject to change; therefore, please confirm the details before proceeding. It is stated in the trip agreement that whether or not you take the day excursions, you will still be responsible for payment for any unused tour services. Since all confirmed reservations are already regarded as guaranteed reservations, they cannot be refunded. Customers agree to all of the above and to transmit the same to their travel companions or assignees if they keep their tickets, bookings, tour/hotel vouchers, and other travel papers after they are issued.
                  
                  </p>
                </div>
                <div class="condition">
                    <h6>PLEASE TAKE NOTE:</h6>
                    <p>•Tickets and packages are NOT TRANSFERABLE AND REFUNDABLE.</p>
                    <p>•Note that we notified you of the circumstances previously and throughout the booking procedure; therefore, in the event of a problem, we are not responsible for any delays or offloads associated with immigration.</p>
                    <p>•In order to support our tours, shuttle services, and travel packages, SEE AND EXPLORE TRAVEL AND TOURS maintains the right to use independent tour guides, drivers, subcontractors, and/or contractors.</p>
                    <p>•We will make every effort to use other routes to get to each place, site, and destination in the event that weather or traffic circumstances prevent us from facilitating your trip, but we cannot be held accountable for any unanticipated events. There won't be any refunds granted.</p>
                    <p>•There won't be a replacement or reimbursement for any portion of the tour that isn't used. Every sale is final.</p>
                    <p>•If you miss any or all of the tour, there won't be any reimbursements.</p>
                    <p>•Unless specified differently on your tour ticket or email confirmation, the rates shown on your trip do not include any additional incidentals.</p>
                    <p>•We have the right to reject service to any individual or company that might not follow our safety regulations, our tour schedule, or anybody who might endanger our guests, our drivers, or our tour guides.</p>
                </div>
            </div>
            <div class="modal-footer terms-footer">
                <button type="button" class="btn-agree" data-dismiss="modal">I
                    Understand</button>
            </div>
        </div>
    </div>
</div>







