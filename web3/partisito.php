<?php
    function getHeaderLogin($intestazione){
    ?>
        <!DOCTYPE html>
        <html lang="it">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title><?php echo $intestazione;?></title>
            <!--Bootstrap's CSS-->
            <!--
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            -->
            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Font Awesome icons-->
            <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
                type="text/css" />
            <!-- Core theme CSS-->
            <link href="css/styles.css" rel="stylesheet" />
        </head>

        <body id="page-top">
    <?php
    }



    function getHeader($intestazione){
        // SESSIONE
        // session_start();
        // if(!isset($_SESSION['user'])){
        //     header("location: login.php");
        // }
    ?>
        <!DOCTYPE html>
        <html lang="it">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title><?php echo $intestazione;?></title>
            <!--Bootstrap's CSS-->
            <!--
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            -->
            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <!-- Font Awesome icons-->
            <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
                type="text/css" />
            <!-- Core theme CSS-->
            <link href="css/styles.css" rel="stylesheet" />
        </head>

        <body id="page-top">
    <?php
    }

    function getNavbar(){
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <img id="logoapiamoci" src="assets/img/BeeOnlyLogo.png" width="80px" height="90px">
            <a id="nome" class="navbar-brand" href="#page-top">APIAMOCI</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#testo">Il
                            progetto</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#about">Immagini</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#partner">Partner</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#contact">Contatti</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#####"><i class="bi bi-person-circle"></i> Area Personale</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    }

       
   
function getFooter(){
?>
<footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4">
                    <h4 id="titoloposizione" class="text-uppercase mb-4">Contattaci</h4>
                    <p id="contatti" class="lead mb-0">
                        <i aria-hidden="true" class="fa fa-phone"></i> Tel:
                        <a href="Tel: 073641674">073641674</a><br>
                        <i aria-hidden="true" class="fa fa-envelope"></i> Email:
                        <a href="mailto:apis01100a@istruzione.it">apis01100a@istruzione.it</a><br>
                        <i aria-hidden="true" class="fa fa-mail-bulk"></i> PEC: <a
                            href="mailto:apis01100a@pec.istruzione.it">apis01100a@pec.istruzione.it</a><br>
                        <i aria-hidden="true" class="fa fa-address-card"></i> CF: 92057710441
                    </p>
                </div>

                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Dove puoi trovarci</h4>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://it-it.facebook.com/pages/category/High-School/Istituto-Istruzione-Superiore-Enrico-Fermi-Ascoli-Piceno-1692604844285122/"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://www.iisfermisacconiceciap.edu.it/"><i class="fa-solid fa-globe"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" target="_blank"
                        href="https://www.youtube.com/channel/UCW-JRbCWRG_Wx5IWYyDspjg"><i
                            class="fab fa-fw fa-youtube"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4"><i class="fa-solid fa-map-location-dot"></i> Posizione</h4>
                    <a target="_blank" href="https://goo.gl/maps/TH1Qqbfqm6Rm2YDz6">
                        <p class="lead mb-0">
                            Via della Repubblica 31/a,
                            <br />
                            63100, Ascoli Piceno (AP)
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy IIS FERMI SACCONI CECI AP  - <a href="https://www.fermi-sacconi-ceci.it/orientamento/privacy-policy/">Privacy Policy</a></a></small></div>
    </div>
    </body>

</html>
<?php
}
?>s