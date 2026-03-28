
<?php
    include("partisito.php");
    getHeader("Apiamoci - progetto di biomonitoraggio - IIS Fermi-Sacconi-Ceci - Ascoli Piceno");
    getNavbar();
?>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div id="container-video">
            <img id="logosopravideo" src="assets/img/logoapiamoci.png">
            <video playsinline autoplay muted loop poster="cake.jpg">
                <source src="assets/img/bono.mp4" type="video/webm">
                Il tuo browser non supporta il tag video.
            </video>
        </div>
    </header>
    <!-- Sezione parametri-->
    <section class="page-section portfolio" id="portfolio">
        <div id="testo">
            <h1>IL PROGETTO</h1>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-brain"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <p>
                <!--Testo iniziale-->
                Il progetto si propone di realizzare una stazione di monitoraggio dell'aria integrata, usando sonde
                elettroniche e api.<br>Vi sono innumerevoli studi che testimoniano l'importanza delle api come
                indicatore ambientale e il loro uso per la valutazione dei livelli di contaminazione dovuti a diversi
                inquinanti.<br>La stazione di monitoraggio è costituita da un'arnia, messa a dimora nelle pertinenze
                esterne dell'IIS Fermi Sacconi Ceci.
            </p>
            <br><br>
        </div>
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">I parametri che possiamo
                misurare</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-wifi"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/Temperatura.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/Luminosita.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/Umidita.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/AnidrideCarbonica.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/Peso.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/Rumore.png" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Images Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div id="carosello" class="container">
            <!-- About Section Heading-->
            <h2 id="bohrigadatoglie" class="page-section-heading text-center text-uppercase text-white">Galleria
                immagini</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-images"></i></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Immagini dimostrative galleria-->
            <div id="rigacarosello" class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine1" src="assets/img/carosello1.jpg">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine2" src="assets/img/carosello2.jpg">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine3" src="assets/img/carosello3.jpg">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine1" src="assets/img/carosello1.jpg">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine2" src="assets/img/carosello2.jpg">
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img id="immagine3" src="assets/img/carosello3.jpg">
                </div>
            </div>


        </div>
    </section>
    <!--Partner section-->
    <section class="page-section" id="partner">
        <div id="rigapartner">
            <h1>I NOSTRI PARTNER</h1>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div id="rigapartner2">
                <img id="logoarpam" src="assets/img/logoarpam.png">
                <img id="logomarche" src="assets/img/logoregionemarche.png">
                <img id="logoapif" src="assets/img/logoapif.png">

                <br><br><br><br><br><br>
            </div>
        </div>
    </section>

    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contattaci</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-address-book"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text"
                                placeholder="Inserisci il tuo nome e cognome..." data-sb-validations="required" />
                            <label for="name">Nome e cognome</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Il nome e cognome sono
                                richiesti.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="Inserisci la tua email..."
                                data-sb-validations="required,email" />
                            <label for="email">Indirizzo email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">L'email è richiesta.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">L'email non è valida.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel"
                                placeholder="Inserisci il tuo numero di cellulare..." data-sb-validations="required" />
                            <label for="phone">Numero di cellulare</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Il numero di cellulare è
                                richiesto.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                placeholder="Inserisci il tuo messaggio..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Il tuo messaggio</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Il messaggio è richiesto.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Grazie, ti ricontatteremo al piu' presto.</div>
                                <br />
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">C'e' stato un problema ad inviare il tuo
                                messaggio.</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Temperatura</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-temperature-full"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Temperatura.png"
                                    alt="..." />
                                <!-- Temperatura-->
                                <p class="mb-4">I sensori di temperatura ci permettono di misurare in gradi centigradi il
                                    microclima interno dell’arnia e le sue variazioni, operando un confronto con la temperatura
                                    esterna.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Luminosita'</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-lightbulb"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Luminosita.png"
                                    alt="..." />
                                <!-- Luminosità-->
                                <p class="mb-4">I sensori di luminosità ci permettono di rilevare la luminosità interna
                                    dell'arnia che, idealmente, dovrebbe essere
                                    inesistente per i primi periodi di vita.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Umidita'</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-droplet"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Umidita.png" alt="..." />
                                <!-- Umidità-->
                                <p class="mb-4">I sensori per rilevare l'umidità ci permettono di tenere sotto controllo
                                    quest'ultima e il benessere globale del nido.
                                    Un tasso di umidità inferiore al 50% nelle celle non permette la schiusura delle
                                    uova.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Anidride Carbonica
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-cloud"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/AnidrideCarbonica.png"
                                    alt="..." />
                                <!--Inquinamento-->
                                <p class="mb-4">I sensori di gas a semiconduttore ci permettono di rilevare gas
                                    inquinanti, i quali sono estremamente tossici,
                                    come monossido e biossido di carbonio (CO e CO2).
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Peso</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-weight-hanging"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Peso.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Grazie all'analisi delle variazioni di peso dell'arnia, possiamo
                                    determinare la salute generale e
                                    il numero di api della colonia.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Rumore</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fa-solid fa-microphone"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/Rumore.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Grazie all'inserimento di un microfono all'interno dell'arnia saremo in
                                    grado di monitorare l'attività
                                    delle api e la loro presenza al suo interno.
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Torna indietro
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?php
    getFooter();
    ?>