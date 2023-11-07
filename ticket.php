<?php
    include("header/header.php");
?>


        <section class="ticket-section section-padding">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10 mx-auto">
                        <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                            <h2 class="text-center mb-4">Get started here</h2>

                            <div class="ticket-form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="member_form_name" id="ticket-form-name"
                                            class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="member_form_email" id="ticket-form-email"
                                            pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                            required>
                                    </div>
                                </div>

                                <input type="tel" class="form-control" name="member_form_phone"
                                    placeholder="Ph 085-456-7890" pattern="^[6-9]\d{9}$" required="">

                                <h6>Choose Purchase Type</h6>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="memberform"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Standard $120
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="memberform"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Premium $240
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <textarea name="member_form_message" rows="3" class="form-control"
                                    id="ticket-form-message" placeholder="Additional Request"></textarea>

                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                    <button type="submit" name="ticket_page_btn" class="form-control">Buy</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </main>


<?php
    include("footer/footer.php");
?>