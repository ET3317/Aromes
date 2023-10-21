<?php
include 'includes/navbar.html'
?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
        <div class="container-xxl contact py-5">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-medium fst-italic text-warning">Contact</p>
                    <h1 class="display-6">Vous avez une question ? N'hésitez pas à nous contacter</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-envelope fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">arome.jus@gmail.com</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">07 61 67 79 66</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">Rue du Médoc</p>
                        <p class="mb-0">Talmont-sur-Gironde, FR</p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-4" style="color:rgb(32, 79, 52)">Contact</h3>
                        <div id="alertMessage"></div>
                    <div class="contact-form" style="display: flex; flex-direction: row; justify-content: space-around">
                        <form id="contactForm" novalidate="novalidate" style="width:auto">
                            <div class="row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control py-2" id="name" placeholder="Votre Nom" required="required" data-validation-required-message="Veuillez renseigner votre nom" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control py-2" id="email" placeholder="Votre Email" required="required" data-validation-required-message="Veuillez renseigner votre email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control py-2" id="subject" placeholder="Objet" required="required" data-validation-required-message="Veuillez entre un objet" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-12 control-group">
                                    <textarea class="form-control" rows="4" id="message" placeholder="Message" required="required" data-validation-required-message="Veuillez entrer votre message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill py-3 px-5 mx-auto" type="submit" id="sendMessageButton">
                                        <span>Envoyer Message</span>
                                        <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <iframe class="w-100 rounded"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=rue%20du%20medoc,%20talmont%20sur%20gironde+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                    frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
<?php
include 'includes/footer.html'
?>