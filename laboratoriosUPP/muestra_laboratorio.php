<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/1.0/css/imagehover.min.css">
    </head>
    <body>
        <a id="arriba">
        </a>
        <header>
            <!-- Logos e imagen de hidalgo -->
            <?php include ('../lib18/seph/hf/header.html'); ?>
            <nav>
                <!-- Menu principal superior -->
                <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
            </nav>
        </header>
        <!-- Menu menu-pegajoso DarkDesign -->
        <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>
        <main class="main container">
            <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
                Presentacion de laboratorios de UPPachuca
            </div>
            
            <!-- Presentacion de laboratorios img-efects -->
            <!-- Hielra 1 -->
                <div class="card-deck">
                <div class="card mb-5">
                <figure class="card-img-top imghvr-push-up mb-2">
                    <img src="./images/laboratorio.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Biblioteca</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <a href="./detalles_laboratorio.php" target="_blank"><button class="btn btn-primary btn-lg btn-block">Leer mas</button></a>
                </div>
                <div class="card mb-5">
                <figure class="card-img-top imghvr-zoom-out mb-2">
                    <img src="./images/Laboratorio_de_Computo.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Antenas</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </div>
                <div class="card mb-5">
                <figure class="card-img-top imghvr-shutter-in-out-diag-2 mb-2">
                    <img src="./images/lab_upp.jpeg">
                    <figcaption>
                        <h3 class="ih-fade-up">Rectoria</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </div>
                </div>
                <!-- Fin hilera 1 -->

                <!-- Hielra 2 -->
                <div class="card-deck">
                <div class="card">
                <figure class="card-img-top imghvr-fold-up mb-2">
                    <img src="./images/laboratorio.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Biblioteca</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </div>
                <div class="card">
                <figure class="card-img-top imghvr-fold-right mb-2">
                    <img src="./images/Laboratorio_de_Computo.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Antenas</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </div>
                <div class="card">
                <figure class="card-img-top imghvr-blur mb-2">
                    <img src="./images/lab_upp.jpeg">
                    <figcaption>
                        <h3 class="ih-fade-up">Rectoria</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem aspernatur deleniti facere culpa explicabo earum temporibus.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </div>
                </div>
                <!-- Fin hilera 2 -->
            <!-- Fin de presentacion de laboratorios -->

            <!-- seccion -->
            <div>
                <hr class="featurette-divider">
                    <!-- Menu con todos los sitios y mini sitios de la página -->
                    <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>
                </hr>
            </div>
        </main>
        <footer>
            <!-- footer de gobierno del estado -->
            <?php include ('../lib18/seph/hf/footer.html'); ?>
        </footer>
        <!-- Librerias javascript -->
        <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>
        <!-- Script para dar la animacion al boton flotante que lleva arriba -->
        <a class="back-to-top" href="#">
            Volver arriba
        </a>
        <script src="../lib18/coreFRONTx/10boton-arriba/script.js">
        </script>
        <!-- libreria Animate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
