<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Debt Freedom | USA" />
    <meta name="keywords"
        content="blog, business, finanzas, negocios, deudas, consolidación de deudas, consolidación, prestamos, prestamo bancario, negocio, ayuda financiera, asesor financiero" />
    <meta name="author" content="Vission Solutions" />
    <title>Debt Freedom | USA</title>
    <!--favicon-img-->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!--favicon-img-->
    <!--main css file should not be removed -->

    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/index_home.css">
    <!--main css file-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/fontawasome.css') }}">
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <style>
        button {
            -webkit-appearance: none;
            background: transparent;
            border: 0;
            outline: 0;
        }

        .otro2 {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100vw;
            background-size: cover;
            background-position: 50% 50%;
            display: block;
        }

        .paginacion {
            position: relative;
            height: auto;
            min-height: 40px;
            margin-top: 10px;
            margin-bottom: 25px;

        }

        .paginate {
            position: relative;
            margin: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            transform: translate3d(0, 0, 0);
            position: absolute;
            top: 50%;
            margin-top: -20px;
            -webkit-filter: drop-shadow(0 2px 0px rgba(0, 0, 0, 0.2));
        }

        .cv a button {
            background: transparent;
            border: none;
            padding: 15px 30px;
            color: whitesmoke;
            background: #83c140;
            outline: none;
            font-size: 20px;
            font-family: aileron;
            border-radius: 4px;
            font-weight: 400;
            cursor: pointer;
            position: relative;
            transition: all .4s ease;
        }

        .paginate i {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 20px;
            height: 5px;
            border-radius: 2.5px;
            background: #fff;
            transition: all 0.15s ease;
        }

        .paginate.left {
            right: 58%;
        }

        .paginate.left i {
            transform-origin: 0% 50%;
        }

        .paginate.left i:first-child {
            transform: translate(0, -1px) rotate(40deg);
        }

        .paginate.left i:last-child {
            transform: translate(0, 1px) rotate(-40deg);
        }

        .paginate.left:hover i:first-child {
            transform: translate(0, -1px) rotate(30deg);
        }

        .paginate.left:hover i:last-child {
            transform: translate(0, 1px) rotate(-30deg);
        }

        .paginate.left:active i:first-child {
            transform: translate(1px, -1px) rotate(25deg);
        }

        .paginate.left:active i:last-child {
            transform: translate(1px, 1px) rotate(-25deg);
        }

        .paginate.left[data-state="disabled"] i:first-child {
            transform: translate(-5px, 0) rotate(0deg);
        }

        .paginate.left[data-state="disabled"] i:last-child {
            transform: translate(-5px, 0) rotate(0deg);
        }

        .paginate.left[data-state="disabled"]:hover i:first-child {
            transform: translate(-5px, 0) rotate(0deg);
        }

        .paginate.left[data-state="disabled"]:hover i:last-child {
            transform: translate(-5px, 0) rotate(0deg);
        }

        .paginate.right {
            left: 58%;
        }

        .paginate.right i {
            transform-origin: 100% 50%;
        }

        .paginate.right i:first-child {
            transform: translate(0, 1px) rotate(40deg);
        }

        .paginate.right i:last-child {
            transform: translate(0, -1px) rotate(-40deg);
        }

        .paginate.right:hover i:first-child {
            transform: translate(0, 1px) rotate(30deg);
        }

        .paginate.right:hover i:last-child {
            transform: translate(0, -1px) rotate(-30deg);
        }

        .paginate.right:active i:first-child {
            transform: translate(1px, 1px) rotate(25deg);
        }

        .paginate.right:active i:last-child {
            transform: translate(1px, -1px) rotate(-25deg);
        }

        .paginate.right[data-state="disabled"] i:first-child {
            transform: translate(5px, 0) rotate(0deg);
        }

        .paginate.right[data-state="disabled"] i:last-child {
            transform: translate(5px, 0) rotate(0deg);
        }

        .paginate.right[data-state="disabled"]:hover i:first-child {
            transform: translate(5px, 0) rotate(0deg);
        }

        .paginate.right[data-state="disabled"]:hover i:last-child {
            transform: translate(5px, 0) rotate(0deg);
        }

        .paginate[data-state="disabled"] {
            opacity: 0.3;
            cursor: default;
        }

        .counter {
            text-align: center;
            position: absolute;
            width: 100%;
            top: 50%;
            margin-top: -15px;
            font-size: 30px;
            font-family: Helvetica, sans-serif;
            text-shadow: 0px 2px 0px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .feature {
            width: 100%;
            padding-top: 93px;
            padding-bottom: 100px;
        }



        .feature_row {
            margin-top: 72px;
        }

        .feature_content {
            padding-right: 54px;
        }

        .elements_accordions {}

        .accordion_container {
            background: #FFFFFF;
            border-radius: 6px;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 13px;
            padding-bottom: 4px;
        }

        .accordion_container:not(:last-child) {
            margin-bottom: 10px;
        }

        .accordion {
            width: 100%;
            padding-left: 27px;
            cursor: pointer;
            color: #000000;
            font-size: 14px;
            font-weight: 500;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .accordion div {
            max-width: 90%;
            overflow: hidden;
            white-space: nowrap;
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
            font-weight: 700;
            color: #384158;
        }



        .accordion_panel {
            padding-right: 8px;
            padding-left: 30px;
            padding-top: 9px;
            max-height: 0px;
            overflow: hidden;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .accordion.active+.accordion_panel {
            margin-bottom: 20px;
        }

        .accordion_panel p {
            font-size: 14px;
            font-weight: 400;
            color: #76777a;
            line-height: 2;
        }

        .feature_video {
            width: calc(100% + 15px);
            left: -15px;
            height: 363px;
            margin-top: -4px;
        }

        .feature_video_background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            border-radius: 6px;
        }

        .feature_video_button {
            display: block;
            width: 60px;
            height: 60px;
            z-index: 10;
            outline: none;
        }

    </style>
</head>

<body>

    <!--contains all the div-->
    <div id="all">


        <!--mouse  follower-->
        <div class="cursor"></div>
        <!--mouse  follower-->
        <!--loader-->
        <div id="loader">
            <span class="color">DEBT</span>FREEDOM
        </div>
        <!--loader-end-->
        <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
        <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="INICIO" id="home-link">INICIO</a>
                <a href="#" data-text="NOSOTROS" id="about-link">NOSOTROS</a>
                <a href="#" data-text="SERVICIOS" id="portfolio-link">SERVICIOS</a>
                <a href="#" data-text="CONTACTO" id="contact-link">CONTACTO</a>
                <a href="#" data-text="BLOG" id="blog-link">BLOG</a>
            </div>
        </div>

        <!--Navigator-Fullscreen END-->
        <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <div class="nav-new">
                <a href="/">
                    <img src="./images/debtfreedom_logo.png" alt="logo">
                </a>
                <a href="#" class="nav-new-a" id="home-link2">INICIO</a>
                <a href="#" class="nav-new-a" id="about-link2">NOSOTROS</a>
                <a href="#" class="nav-new-a" id="portfolio-link2">SERVICIOS</a>
                <a href="#" class="nav-new-a" id="contact-link2">CONTACTO</a>
                <a href="#" class="nav-new-a" id="blog-link2">BLOG</a>
            </div>
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
        <!--Header-->
        <main id="header">
            <div id="particles"></div>
            <!--Social Media Links-->
            <div class="social-media-links">
                <a href="https://www.instagram.com/debtfreedomusa/" target="_blank"><img src="images/instagram_logo.png"
                        class="social-media" alt="instagram-logo"></a>
                <a href="https://www.facebook.com/debtfreedomofficial" target="_blank"><img
                        src="images/facebook_logo.png" class="social-media" alt="facebook-logo"></a>
            </div>
            <!--Social Media Links end-->

            <div class="header-content">
                <div class="header-content-box">
                    <div class="firstline"><span class="color">DEBT </span>FREEDOM <span class="usa">USA</span></div>
                    <div class="secondline">
                        Te ayudaremos
                        <span class="txt-rotate color" data-period="1200"
                            data-rotate='[ " con tus deudas.", " a crecer.", " a volar." ]'></span>
                        <span class="slash">|</span>
                    </div>
                    <p style="font-size: 20px; margin-top:40px">🡣 Crea tu programa de pagos 🡣</p>
                    <div class="range-slider" style="margin-top: 0px">

                        <input class="range-slider__range" type="range" id="priceSlider" value="1000" min="1000"
                            max="100000" />
                        <span class="range-slider__value"><span>$</span>0</span>

                    </div>
                    <button type="button" id="calcularBtn" class="calcular" value="send">Calcular</button>
                    <div class="contact">
                        <a href="https://wa.me/18008543030"><img src="images/wpme.png" alt="whatsapp-pic"
                                class="contactpic"></a>
                        <a href="Tel:+18008543030"><img src="images/call.png" alt="phone-pic" class="contactpic"></a>
                    </div>
                </div>

            </div>



            <!--header image-->
            <div class="header-image">
                <img src="images/man.jpg" alt="logo">
            </div>
            <!--header image end-->
        </main>
        <!-- Aqui va el contenido -->
        <div id="features">
            <div class="features">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">¿Qué y cómo lo hacemos?</h2>
                                <div class="section_subtitle">
                                    <p>
                                        Nuestros valores: <br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row features_row">
                        <!-- Features Item -->
                        <div data-aos="zoom-in" data-aos-duration="1000" class="col-sm-3 col-12 feature_col">
                            <div class="feature text-center trans_400">
                                <div class="feature_icon">
                                    <i loading="lazy" class="fas fa-globe-americas"
                                        style="font-size: 60px; color: #39b54a"></i>
                                </div>
                                <h3 class="feature_title">Enfoque</h3>
                                <div class="feature_text">
                                    <p>Debt Freedom USA se enfoca en la comunidad hispana de los Estados Unidos.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Features Item -->
                        <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-3 col-12 feature_col">
                            <div class="feature text-center trans_400">
                                <div class="feature_icon">
                                    <i loading="lazy" class="far fa-compass"
                                        style="font-size: 60px; color: #39b54a"></i>
                                </div>
                                <h3 class="feature_title">Visión</h3>
                                <div class="feature_text">
                                    <p>Debt Freedom USA tiene como visión ser la empresa lider en el mercado hispano
                                        para educarte financieramente.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Features Item -->
                        <div data-aos="zoom-in" data-aos-duration="2000" class="col-sm-3 col-12 feature_col">
                            <div class="feature text-center trans_400">
                                <div class="feature_icon">
                                    <i loading="lazy" class="far fa-heart" style="font-size: 60px; color: #39b54a"></i>
                                </div>
                                <h3 class="feature_title">Misión</h3>
                                <div class="feature_text">
                                    <p>Debt Freedom USA trabaja arduamente para eliminar tus deudas de forma efécitva,
                                        satisfactoria y permanente.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Features Item -->
                        <div data-aos="zoom-in" data-aos-duration="2500" class="col-sm-3 col-12 feature_col">
                            <div class="feature text-center trans_400">
                                <div class="feature_icon">
                                    <i loading="lazy" class="fas fa-users" style="font-size: 60px; color: #39b54a"></i>
                                </div>
                                <h3 class="feature_title">Consulta</h3>
                                <div class="feature_text">
                                    <p>Debt Freedom USA siempre estará de la mano contigo, puedes llamarnos o
                                        visitarnos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section_subtitle">
                            <p>
                                <button type="button" class="calcular" value="send">CONSULTA GRATIS</button>
                            </p>
                        </div>


                    </div>
                    <!-- slider -->

                </div>
            </div>

            <div class="slider-container d-md-none d-lg-block hidden-md hidden-sm d-sm-none d-none d-sm-block d-md-block"
                style="position: relative;height:auto">
                <div id="otro" style="height: 500px !important"> </div>
                <div class="slider d-flex justify-content-center align-items-center  mt-5" style="height:auto"
                    id="sliderContainer">
                    <div class="container-all">

                        <input type="radio" id="1" name="image-slide" hidden />
                        <input type="radio" id="2" name="image-slide" hidden />
                        <input type="radio" id="3" name="image-slide" hidden />

                        <div class="slide">




                            <div class="item-slide">
                                <img src="Images/img1.jpg">
                            </div>

                            <div class="item-slide">
                                <img src="Images/img2.jpg">
                            </div>

                            <div class="item-slide">
                                <img src="Images/img3.jpg">
                            </div>

                        </div>

                        <div class="pagination">

                            <label class="pagination-item" for="1">
                                <img src="Images/img1.jpg">
                            </label>

                            <label class="pagination-item" for="2">
                                <img src="Images/img2.jpg">
                            </label>

                            <label class="pagination-item" for="3">
                                <img src="Images/img3.jpg">
                            </label>

                        </div>
                    </div>

                </div>

            </div>
            <!--Contact form-->
            <!-- <div class="contact-form_home">
                    <div class="form-header_home">
                        ¿Dudas?
                    </div>
                    <form id="myForm_home" action="#">
                        <div class="input-line">
                            <input id="name_home" type="text" placeholder="Nombre" class="input-name_home">
                            <input id="email_home" type="email" placeholder="Email" class="input-name">
                        </div>
                        <input type="text" id="subject_home" placeholder="Asunto" class="input-subject_home">
                        <textarea id="body_home" class="input-textarea" placeholder="Mensaje"></textarea>
                        <button type="button" id="submit_home" value="send">Enviar</button>
                    </form>

                </div> -->
            <!--Contact form-->
            <div class="home_end">
                <p>
                    ¿Tienes dudas? No te preocupes puedes consultarnos GRATIS aquí
                </p>
            </div>



        </div>
    </div>
    </div>
    <!--Header End-->
    <!--HomePage End-->
    <!--Main-Section End-->
    <!--about-->
    <div id="about">

        <!--about content-->
        <div id="about-content" style="min-height:92.3vh">
            <div class="about-header">
                Sobre <span class="color">Nosotros</span>
                <span class="header-caption">Team Debt<span class="color">Freedom</span></span>
            </div>
            <div class="about-main mb-5">
                <div class="row">

                    <div class="about-first-paragraph wow col-lg-7 col-12">
                        <!--about description-->
                        {{-- <span class="about-first-line">
                        
                        <span class="color">Con más de 11 años</span> en el mercado hispano, nuestros principales
                        servicios son:
                        <br>
                        <ul style="list-style: none;">
                            <li style="font-size: 60%; color: #83c140; text-decoration: none;">Asesoramiento para la
                                liquidación</li>
                                <li style="font-size: 60%; color: #83c140; text-decoration: none;">Consolidación de
                                deudas</li>
                                <li style="font-size: 60%; color: #83c140; text-decoration: none;">Negociación de deudas
                                </li>
                            </ul>
                        </span> --}}

                        <br>
                        <span class="about-second-line text-justify">Nuestro éxito ayudando a las personas a salir de
                            sus
                            deudas y a
                            reparar su valoración de crédito de forma permanente, lo debemos a nuestra amplia
                            experiencia para identificar de forma rápida y efectiva, las mejores soluciones para las
                            necesidades financieras de nuestros clientes.</span>
                        <br>
                        <span class="about-second-line text-justify">Descubra cómo nuestras soluciones de administración
                            de
                            deuda
                            pueden ayudarlo.
                            Hemos ayudado de forma sostenible y viable a miles de personas a liberarse de sus deudas y
                            mejorar su crédito de forma permanente, sin necesidad de declararse en bancarrota.</span>
                        <div class="cv">
                            <a href="#"><button>CONTÁCTANOS <span class="colors">AHORA</span></button></a>
                        </div>

                    </div>
                    <!--about picture-->
                    <div class="about-img col-12 col-lg-5">
                        <img src="/images/about.jpg" alt="Your Image">
                    </div>
                </div>

            </div>

            <div class="container_aboutus">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">
                                ¿Por qué <span style="color: #14bdee">Atriux</span>?
                            </h2>
                            <div class="section_subtitle">
                                <p>
                                    Nuestras elecciones definen una ruta en nuestra vida. En Atriux te damos la
                                    información que necesitas para tomar la desición de escogernos
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row feature_row">
                    <!-- Feature Content -->
                    <div class="col-lg-6 feature_col col-12">
                        <div class="feature_content">
                            <!-- Accordions -->
                            <div class="accordions">
                                <div class="elements_accordions">
                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>Porque deberias escogernos?</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center active">
                                            <div>Que te ofrecemos?</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>Necesito invertir mucho dinero?</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="accordion_container">
                                        <div class="accordion d-flex flex-row align-items-center">
                                            <div>En cuanto tiempo veré resultados?</div>
                                        </div>
                                        <div class="accordion_panel">
                                            <p>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordions End -->
                        </div>
                    </div>

                    <!-- Feature Video -->
                    <div class="col-lg-6 feature_col col-12">
                        <div class=" d-flex flex-column align-items-center justify-content-center">
                            <img style="width: 620px; heigth: 450px" src="{{ asset('img/brand/about 5.jpg') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--copyright-section You Can Remove After Downloading-->
        <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Vission
                Solutions
            </div>
        </div>
        <!--copyright-section-->
    </div>
    <!--about end-->
    <!--portfolio-->
    <div id="portfolio">

        <div class="portfolio-header"> <span class="color"> </span> Servicios
            <span class="header-caption"> Nuestras formas <span class="color"> de ayudarte</span></span>
        </div>
        <div id="portfolio-content">
            <div id="portfolio-content">
                <div class="services-content">
                    <div class="service-one service wow">
                        <div class="service-img">
                            <img src="images/deudas.png" alt="service-one">
                        </div>
                        <div class="service-description">
                            <h2>Deudas</h2>
                            <p>Hacemos un analisis de tu situación de crédito y creamos un plan personalizado para
                                ayudarte a eliminar tus deudas.
                                <br> ¡Te ayudamos paso a paso!
                            </p>
                        </div>
                    </div>
                    <div class="service-two service wow">
                        <div class="service-img">
                            <img src="images/llamadas_molestas.png" alt="service-two">
                        </div>
                        <div class="service-description">
                            <h2>Eliminación de llamadas de colecciones</h2>
                            <p>¡Detenemos las llamadas molestosas y acosadoras de cobro o collection!</p>
                        </div>
                    </div>
                    <div class="service-three service wow">
                        <div class="service-img">
                            <img src="images/credito.png" alt="service-three">
                        </div>
                        <div class="service-description">
                            <h2>Reparación de crédito</h2>
                            <p>Trabajamos en mejorar tu puntaje de crédito. Educandote financieramente de una forma
                                simple y eficaz. ¡Notarás los cambios rápido y permanentes!.</p>
                        </div>
                    </div>
                    <div class="service-one service wow">
                        <div class="service-img">
                            <img src="images/deuda_consolidada.png" alt="service-one">
                        </div>
                        <div class="service-description">
                            <h2>Consolidación de deudas</h2>
                            <p>Consolidamos tus deudas en un solo pago, con cero por ciento de interés, y te
                                ahorramos tiempo y dinero.</p>
                        </div>
                    </div>
                    <div class="service-two service wow">
                        <div class="service-img">
                            <img src="images/asesoria_financiera.png" alt="service-two">
                        </div>
                        <div class="service-description">
                            <h2>Asesoría financiera</h2>
                            <p>Individual o a pequeños negocios, brindamos asesoría financiera. ¡Somos
                                profesionales!.</p>
                        </div>
                    </div>
                    <div class="service-three service wow">
                        <div class="service-img">
                            <img src="images/pagos_bajos.png" alt="service-three">
                        </div>
                        <div class="service-description">
                            <h2>Pagos mas bajos</h2>
                            <p>Despues de un analisis financiero conseguimos que pagues menos por tus deudas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright-section You Can Remove After Downloading-->
    {{-- <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Vission Solutions
            </div>
        </div> --}}
    <!--copyright-section-->
    </div>
    <!--portfolio end-->
    <!--blog-->
    <div id="blog">
        <div id="particles-js"></div>

        <div class="blog-header"> Blogs</span>
            <span class="header-caption"> Nuestros últimos <span class="color"> artículos</span></span>
        </div>
        <div class="blog-content" id="blog-content">
            @foreach ($posts as $post)
                <div class="blogs">
                    <a href="/blog/{{ $post->id_show }}">
                        <div class="img">
                            <img src="{{ $post->portada }}" alt="{{ $post->titulo }}">
                            <div class="blog-date">{{ $post->created_at->format('d F, Y') }}</div>
                        </div>
                        <div class="blog-text">
                            <h3>{!! $post->titulo !!}</h3>
                            @if (Str::length(strip_tags($post->descripcion)) >= 300)
                                <p>{{ Str::substr(strip_tags($post->descripcion), 0, 300) }}...</p>
                            @else
                                <p>{{ Str::substr(strip_tags($post->descripcion), 0, 300) }}</p>

                            @endif

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="paginacion">
            <div class="counter"></div>
            <button class="paginate left"><i></i><i></i></button>
            <button class="paginate right"><i></i><i></i></button>
        </div>

        <!--copyright-section You Can Remove After Downloading-->
        <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Vission Solutions
            </div>
        </div>
        <!--copyright-section-->
    </div>
    <!--blog end-->
    <!--contact-->
    <div id="contact">
        <div class="contact-header"> Envíanos un<span class="color"> mensaje</span>
            <!-- <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div> -->
            <br>
            <div class="contact-content" style="min-height: 80vh;">
                <!--Contact form-->
                <div class="contact-form">
                    <div class="form-header">
                        Contacta con nosotros
                    </div>
                    <form id="myForm" action="#">
                        <div class="input-line">
                            <input id="name" type="text" placeholder="Nombre" class="input-name">
                            <input id="email" type="email" placeholder="Email" class="input-name">
                        </div>
                        <input type="text" id="subject" placeholder="Asunto" class="input-subject">
                        <textarea id="body" class="input-textarea" placeholder="Mensaje"></textarea>
                        <button type="button" id="submit" value="send">Enviar</button>
                    </form>

                </div>
                <!--Contact form-->
                <!--Contact information-->
                <div class="contact-info">
                    <div class="contact-info-header">
                        Información de Contacto
                    </div>
                    <div class="contact-info-content" style="min-height: 92.3vh">
                        <div class="contect-info-content-line">
                            <img src="./images/icon-name.png" class="icon" alt="name-icon">
                            <div class="contact-info-icon-text">
                                <h6>Empresa</h6>
                                <p>Debt Freedom USA LLC</p>
                            </div>
                        </div>
                        <div class="contect-info-content-line">
                            <img src="./images/icon-location.png" class="icon" alt="location-icon">
                            <div class="contact-info-icon-text">
                                <h6>¿Dónde estamos?</h6>
                                <p>Miami, USA</p>
                            </div>
                        </div>
                        <div class="contect-info-content-line">
                            <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                            <div class="contact-info-icon-text">
                                <h6>Llama directamente</h6>
                                <p>+1-800-854-3030</p>
                            </div>
                        </div>

                        <div class="contect-info-content-line">
                            <img src="./images/icon-email.png" class="icon" alt="email-icon">
                            <div class="contact-info-icon-text">
                                <h6>Email</h6>
                                <p>info@DebtfreedomUSA.com</p>
                            </div>
                        </div>
                    </div>
                    <!--Contact information end-->
                </div>
            </div>
            <!--copyright-section You Can Remove After Downloading-->

            <!--copyright-section-->
        </div>
        <div class="footer" id="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Vission Solutions
            </div>
        </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script>
        $('#calcularBtn').click(function() {


            localStorage.setItem('amount', $('#priceSlider').val());
            location.replace("/calculator")
            // window.open('https://www.google.com/');

        })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <!--particles script-->
    <script src="/js/particulas.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(document).ready(function() {
            var url = '/get/posts?page=' + 1;
            var p = {
                _token: _token
            }
            $.post(url, p, function(result) {
                $('#blog-content').empty();
                let fragment = document.createDocumentFragment();
                for (const post of result.data) {
                    let div1 = document.createElement('div');
                    div1.classList.add('blogs');
                    let a = document.createElement('a');
                    a.setAttribute('href', `/blog/${post.id_show}`);
                    div1.append(a);
                    let div2 = document.createElement('div');
                    div2.classList.add('img');
                    let img = document.createElement('img');
                    img.setAttribute('src', `${post.portada}`);
                    img.setAttribute('alt', `${post.titulo}`);
                    let div3 = document.createElement('div');
                    div3.classList.add('blod-date');
                    div3.textContent = moment(`${post.created_at}`).format('LL');
                    div2.append(img);
                    div2.append(div3);
                    a.append(div2);
                    let div4 = document.createElement('div');
                    div4.classList.add('blog-text');
                    let h3 = document.createElement('h3');
                    h3.textContent = `${post.titulo}`
                    let p = document.createElement('p');
                    if (`${post.descripcion}`.length >= 300) {
                        p.textContent = `${post.descripcion}`.replace(/(<([^>]+)>)/gi, "").substring(0,
                                300) +
                            "...";
                    } else {
                        p.textContent = `${post.descripcion}`.replace(/(<([^>]+)>)/gi, "").substring(0,
                            300);

                    }
                    div4.append(h3)
                    div4.append(p)
                    a.append(div4)
                    fragment.append(div1);






                }
                $('#blog-content').append(fragment);

            });


        });
        AOS.init();
        // basic paging logic to demo the buttons
        var pr = document.querySelector(".paginate.left");
        var pl = document.querySelector(".paginate.right");
        var _token = "{{ csrf_token() }}";
        pr.onclick = slide.bind(this, -1);
        pl.onclick = slide.bind(this, 1);

        var index = 0,
            total = "{{ $posts->lastPage() }}";

        function slide(offset) {
            index = Math.min(Math.max(index + offset, 0), total - 1);

            document.querySelector(".counter").innerHTML = index + 1 + " / " + total;

            pr.setAttribute("data-state", index === 0 ? "disabled" : "");
            pl.setAttribute("data-state", index === total - 1 ? "disabled" : "");
            console.log(index);
            hola()
        }

        function hola() {

            var url = '/get/posts?page=' + (index + 1);
            var p = {
                _token: _token
            }
            $.post(url, p, function(result) {
                $('#blog-content').empty();
                let fragment = document.createDocumentFragment();
                for (const post of result.data) {
                    let div1 = document.createElement('div');
                    div1.classList.add('blogs');
                    let a = document.createElement('a');
                    a.setAttribute('href', `/blog/${post.id_show}`);
                    div1.append(a);
                    let div2 = document.createElement('div');
                    div2.classList.add('img');
                    let img = document.createElement('img');
                    img.setAttribute('src', `${post.portada}`);
                    img.setAttribute('alt', `${post.titulo}`);
                    let div3 = document.createElement('div');
                    div3.classList.add('blod-date');
                    div3.textContent = moment(`${post.created_at}`).format('LL');
                    div2.append(img);
                    div2.append(div3);
                    a.append(div2);
                    let div4 = document.createElement('div');
                    div4.classList.add('blog-text');
                    let h3 = document.createElement('h3');
                    h3.textContent = `${post.titulo}`
                    let p = document.createElement('p');
                    if (`${post.descripcion}`.length >= 300) {
                        p.textContent = `${post.descripcion}`.replace(/(<([^>]+)>)/gi, "").substring(0, 300) +
                            "...";
                    } else {
                        p.textContent = `${post.descripcion}`.replace(/(<([^>]+)>)/gi, "").substring(0, 300);

                    }
                    div4.append(h3)
                    div4.append(p)
                    a.append(div4)
                    fragment.append(div1);
                }
                $(fragment).appendTo('#blog-content').hide().fadeIn(999);
                // $('#blog-content').append(fragment).show('slow');

            });


        }
        slide(0);

    </script>
    <script>
        $(document).ready(function() {
            "use strict";
            initAccordions();

            function initAccordions() {
                if ($('.accordion').length) {
                    var accs = $('.accordion');

                    accs.each(function() {
                        var acc = $(this);

                        if (acc.hasClass('active')) {
                            var panel = $(acc.next());
                            var panelH = panel.prop('scrollHeight') + "px";

                            if (panel.css('max-height') == "0px") {
                                panel.css('max-height', panel.prop('scrollHeight') + "px");
                            } else {
                                panel.css('max-height', "0px");
                            }
                            $(window).trigger('resize.px.parallax');
                        }

                        acc.on('click', function() {
                            if (acc.hasClass('active')) {
                                acc.removeClass('active');
                                var panel = $(acc.next());
                                var panelH = panel.prop('scrollHeight') + "px";

                                if (panel.css('max-height') == "0px") {
                                    panel.css('max-height', panel.prop('scrollHeight') + "px");
                                } else {
                                    panel.css('max-height', "0px");
                                }
                                $(window).trigger('resize.px.parallax');
                            } else {
                                acc.addClass('active');
                                var panel = $(acc.next());
                                var panelH = panel.prop('scrollHeight') + "px";

                                if (panel.css('max-height') == "0px") {
                                    panel.css('max-height', panel.prop('scrollHeight') + "px");
                                } else {
                                    panel.css('max-height', "0px");
                                }
                                $(window).trigger('resize.px.parallax');
                            }
                        });
                    });
                }
            }
        });

    </script>
</body>

</html>
