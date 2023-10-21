<?php
include 'includes/navbar.html'
?>
<!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5" id="carousel-template">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/ar-street.jpeg" style="height: 105vh" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark"></strong></p>
                                    <h1 class="display-1 text-white mb-4 animated zoomIn">ARÔMES</h1>
                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated zoomIn">Juice & Bakery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/ar-cabane.jpg"  style="height: 105vh"  alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark"></strong></p>
                                    <h1 class="display-1 text-white mb-4 animated zoomIn">ARÔMES</h1>
                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated zoomIn">Juice & Bakery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Responsive Header -->
    <div class="header-container-phone">
        <img class="picture-header-phone" src="../img/arome-collage.png" alt="">
    </div>
    <!-- End Responsive Header -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" id="picture-about-container-display">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="img/ar-cabane.jpg" alt="cabane arômes à talmont">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="img/ar-drink.jpg" alt="jus de fruis frais à talmont">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="img/ar-game.jpg" alt="jeux chez arômes">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="img/ar-hand.jpg" alt="jus de fruis frais à talmont">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-warning">Nos Valeurs</p>
                        <h2 class="display-6">Des jus organiques, un circuit court et des produits de qualités</h2>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/ar-herbs.jpg" alt="photo du jardin arômes">
                        </div>
                        <div class="col-sm-8">
                            <h5 style="color: var(--primary)">Notre bar à jus embrasse le concept du circuit court</h5>
                            <p class="mb-0" style="color:rgb(32, 79, 52)">Nous nous sommes engagés à établir des partenariats avec des producteurs locaux ce qui nous permet de vous offrir des jus frais, savoureux et bon pour la planète !</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5 style="color: var(--primary)">Nos jus regorgent de nutriments bénéfiques pour votre santé</h5>
                            <p class="mb-0" style="color:rgb(32, 79, 52)">À chaque verre, vous prenez une décision consciente en faveur de votre bien-être, en embrassant une philosophie de vie saine et équilibrée</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="img/ar-ter.jpg" alt="photo de la cour à arômes ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Products Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-secondary">Nos Produits</p>
                <h2 class="display-6">Des jus de fruits et de légumes, des milkshakes et des patisseries artisanales</h2>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <a href="" class="d-block product-item rounded">
                    <img src="img/canneles.jpeg" alt="Photo d'une patisserie maison arômes">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Pâtisseries</h4>
                        <span class="text-body">Préparées avec soin chaque jour, elles sont le complément parfait à nos jus frais pour une expérience gourmande et équilibrée.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="img/juice-jar.jpeg" alt="Photo des jus de fruits frais arômess">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Jus frais</h4>
                        <span class="text-body">Explorez la fraîcheur à chaque gorgée avec nos jus préparés à l'extracteur et secoués avec passion, offrant une expérience gustative inégalée.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="img/capuccino.jpeg" alt="Photo d'une boissance chaude arômes">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Boissons Chaudes</h4>
                        <span class="text-body">Découvrez l'essence d'une boisson chaude parfaite avec notre café de qualité supérieure, soigneusement sélectionné auprès des meilleurs torréfacteurs.</span>
                    </div>
                </a>
                <a href="" class="d-block product-item rounded">
                    <img src="img/ar-smooth.jpeg" alt="Photo d'un smoothie arômes">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary">Smoothies</h4>
                        <span class="text-body">Savourez nos smoothies frais et vibrants, concoctés avec talent pour une expérience rafraîchissante et délicieusement décontractée.</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/ar-home.jpg" alt="photo d'une partie de la cour">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-secondary">Le Shop</p>
                        <h2 class="display-6">de Carpe Diem à Arômes...</h2>
                    </div>
                    <p class="mb-4">Avant de devenir l'oasis de fraîcheur qu'il est aujourd'hui, cet endroit portait le nom de "Carpe Diem".
                        <br>La maman du maître des lieux, passionnée et passionnante, tenez cette délicieuse boutique, lieu de rencontre
                        pour les amoureux de la littérature. Un endroit où les pages des livres invitaient les lecteurs à un voyage imaginaire...</p>

                    <p class="mb-4">Tout en honorant l'héritage de "Carpe Diem", Niels a choisi de créer "Arômes",
                        un shop de jus de fruits qui incarne la fraîcheur, la vitalité et la convivialité de la région.</p>
                    <a href="store.html" class="btn btn-primary rounded-pill py-3 px-5" title="voir l'histoire d'arômes">Voir le Shop</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->

    <!-- Store Start -->
<!--    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-secondary">Nos Jus</p>
                <h1 class="display-6">Découvrir nos cocktails de fruits</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-1.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-2.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Green tea tulsi</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="img/store-product-3.jpg" alt="">
                        <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="product.html" class="btn btn-primary rounded-pill py-3 px-5">Voir Tous Nos Jus</a>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Store End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="display-6 text-white">Les avis de nos clients</h3>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4" style="color:rgb(32, 79, 52)">Très belle découverte. L'endroit est zen, reposant et tout mignon. Nous avons pris 2 smoothies différents. Un ananas coco et l'autre fraise orange. Excellent !!! Parfait pour une petite pause fraîcheur.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5 class="text-warning">Margaux</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4" style="color:rgb(32, 79, 52)">Deuxième année où nous venons. Toujours aussi bon, saveurs au rendez-vous, avec comme nouveautés des petits jeux sur les tables pour passer un moment sympathique avec ses amis. Accueil avec le sourire et très chaleureux, Merci !</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5 class="text-warning">Michaël</h5>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4" style="color:rgb(32, 79, 52)">Cet endroit est une oasis de saveurs exquises et d'ambiance chaleureuse. L'atmosphère reggae qui y règne ajoute une touche de détente parfaite pour déguster des boissons fruitées délicieuses et vraiment rafraîchissantes !</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5 class="text-warning">Océane</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-warning">Contact</p>
                <h1 class="display-6">Nous Contacter</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">Vous avez des questions ou des curiosités ? Nous sommes là pour vous éclairer ! N'hésitez pas à nous contacter pour obtenir toutes les réponses dont vous avez besoin. Notre équipe est prête à vous aider à tout moment. Votre satisfaction est notre priorité !</p>
                    <div style="display: flex; align-items: center; justify-content: center">
                    <a href="contact.html" class="btn btn-primary rounded-pill py-3 px-5 mb-5" title="contacter-arômes">Nous Contacter</a>
                    </div>
                    <div class="row g-5">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->
<?php
include 'includes/footer.html'
?>