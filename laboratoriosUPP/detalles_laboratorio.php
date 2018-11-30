<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
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
            <div class="alert alert-info text-center m-1 animated zoomInDown mb-4" role="alert">
                Laboratorio de Biblioteca
            </div>

            <!-- Pills info -->
            <div class="bd-example bd-example-tabs">
                <div class="row">
                <div class="col-3">
                    <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <a aria-controls="v-pills-objetivo" aria-selected="true" class="nav-link active obj" data-toggle="pill" href="#v-pills-objetivo" id="v-pills-objetivo-tab" role="tab">
                    <i class="fas fa-clock"></i>
                                    Horarios
                                </a>
                    <a aria-controls="v-pills-ingreso" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-ingreso" id="v-pills-ingreso-tab" role="tab">
                    <i class="fas fa-user"></i>
                                    Encargado 
                                </a>
                    <a aria-controls="v-pills-egreso" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-egreso" id="v-pills-egreso-tab" role="tab">
                                    <i class="fab fa-leanpub"></i>
                                    Reglamento
                                </a>
                    <a aria-controls="v-pills-estudios" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-estudios" id="v-pills-estudios-tab" role="tab">
                                    <i class="fas fa-book"></i>
                                    Carreras
                                </a>
                    <a aria-controls="v-pills-academico" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-academico" id="v-pills-academico-tab" role="tab">
                    <i class="fas fa-server"></i>
                                    Equipo de laboratorio
                                </a>

                    <a aria-controls="v-pills-alumno" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-alumno" id="v-pills-alumno-tab" role="tab">
                                    <i class="fas fa-graduation-cap"></i>
                                    Alumnos
                                </a>
                    <a aria-controls="v-pills-productividad" aria-selected="false" class="nav-link obj" data-toggle="pill" href="#v-pills-productividad" id="v-pills-productividad-tab" role="tab">
                                    <i class="fas fa-address-book"></i>
                                    Productividad
                                </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-objetivo" role="tabpanel" aria-labelledby="v-pills-objetivo-tab">
                    <iframe id="blockrandom" name="iframe" src="http://upp.edu.mx/posgrado/images/Maestria/Mecatronica/Documentos/M_MEC_MAPA_PLAN_ESTUDIOS.pdf" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
                    </div>


                    <div class="tab-pane fade" id="v-pills-ingreso" role="tabpanel" aria-labelledby="v-pills-ingreso-tab">
                        <p class="text-muted text-justify">
                            <ul class="text-muted text-justify">
                                <li>Nombre: Lorem ipsum dolor</li>
                                <li>Descripcion: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste ipsam rerum.</li>
                            </ul>
                        </p>
                        <div class="col-md-7 offset-md-2">
                            <img src="./images/upp-pz.jpg" alt="" class="rounded wow bounceInUp">
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-egreso" role="tabpanel" aria-labelledby="v-pills-egreso-tab">
                       
                        <p class="text-muted text-justify">
                        Normas y Reglas de todos los laboratorios
                            <ul class="text-muted text-justify">
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam magnam, voluptatibus quae unde asperiores impedit, suscipit vero minus nobis nemo magni neque totam non ea iure dolor deleniti vitae.</li>
                                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum recusandae id corporis, voluptas excepturi eum aperiam pariatur optio totam, hic quidem numquam, aut eligendi culpa labore ipsam facere adipisci voluptates.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas debitis praesentium exercitationem laboriosam, a cum delectus possimus dignissimos beatae mollitia repellendus temporibus illo numquam, dolores, dicta consequatur inventore. Blanditiis, ab?</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus dicta labore impedit dignissimos fugiat debitis! Explicabo molestiae, natus, veritatis facilis, deleniti fuga sit odit ratione officia excepturi cum soluta mollitia.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam optio autem enim, illo nobis sint eligendi, eaque maxime neque repellendus, explicabo tenetur quam. Iste, ducimus adipisci nihil quasi numquam eaque!</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ut doloremque eaque culpa ipsam sit facilis asperiores illum unde temporibus dolore nihil sunt impedit voluptate, in commodi quaerat laudantium eos!</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt illum, ex inventore quod dolore dolores repudiandae autem officia cum porro laudantium architecto dignissimos quo similique officiis consequuntur facere impedit nostrum?</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ex eveniet facere ratione harum, cupiditate tempore commodi? Porro laboriosam est delectus obcaecati! Odit expedita fuga repellat velit tenetur ullam. Voluptate.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur placeat, quo iste quae hic porro repellat, asperiores aut, perspiciatis alias sed est adipisci dignissimos nemo blanditiis vero totam odio? Ut.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt veritatis explicabo minima dolorum accusamus saepe! Tempora quas, explicabo asperiores amet sit cumque quo maxime neque, blanditiis minima, reiciendis tenetur! Voluptatibus!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus eius at recusandae ipsam facilis odit culpa. Libero quibusdam nobis corrupti modi eveniet beatae ab quod laboriosam accusantium! Cumque, quo?</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ex odit consectetur eos obcaecati nam cum sunt doloribus, provident, molestias fuga corporis. Corporis iure quidem vitae eaque eius provident atque?</li>
                            </ul>
                        </p>
                    </div>


                    <div class="tab-pane fade" id="v-pills-estudios" role="tabpanel" aria-labelledby="v-pills-estudios-tab">
                        <p class="text-muted text-justify">Laboratorios para la carrera:</p>
                        <div class="card col-md-8">
                            <img class="card-img-top" src="./images/M_MEC_IMAGEN_INGRESO.jpg" alt="">
                            <div class="card-body">
                            <h5 class="card-title">Ingenieria en Software y Telematica</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero earum numquam eius, placeat expedita ducimus esse? Distinctio alias, dolore excepturi dolores quidem ipsum soluta adipisci, error rerum impedit corrupti deserunt.</p>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-academico" role="tabpanel" aria-labelledby="v-pills-academico-tab">academico</div>


                    <div class="tab-pane fade" id="v-pills-alumno" role="tabpanel" aria-labelledby="v-pills-alumno-tab">alumno</div>


                    <div class="tab-pane fade" id="v-pills-productividad" role="tabpanel" aria-labelledby="v-pills-productividad-tab">productividad</div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Fin pills info -->
            
            
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