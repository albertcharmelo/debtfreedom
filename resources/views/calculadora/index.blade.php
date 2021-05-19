<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Debt Freedom | USA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css
    " />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>

<body>
    <div id="particles"></div>
    <!--Menubar-->
    <div id="navigation-bar">
        <a href="/">
            <img src="./images/debtfreedom_logo.png" alt="logo">
        </a>

    </div>
    <!--Menubar End-->
    <section class=" multi_step_form">
        <img src="/images/can-i-help-you-min.png" class="imagen" width="735px" height="700px" alt="calculator_girl">
        <form id="msform">
            <!-- Tittle -->
            {{-- <div class="tittle">
                <h2>Formulario MultiStep (TITULO)</h2>
                <p>Cualquier descripcion que le quieras colocar al formulario</p>
            </div> --}}
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Estado de Pagos</li>
                <li>Ubicación</li>
                <li>Contacto</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h3> ¿Esta atrásado en sus pagos?. </h3>
                <h6>Porfavor, seleccione una opción.</h6>

                <div class="opciones mb-4">
                    <label>
                        <input type="radio" name="radio" value="1" checked />
                        <span>Si,más de 60 días</span>
                    </label>
                    <label>
                        <input type="radio" value="2" name="radio" />
                        <span>Si,30 días o menos</span>
                    </label>
                    <label>
                        <input type="radio" value='3' name="radio" />
                        <span>No</span>
                    </label>
                </div>
                <button type="button" class="next action-button">Continue</button>
            </fieldset>
            <fieldset>
                <h3>Ubicación</h3>
                <h6>Seleccione un estado</h6>

                <div class="form-group">
                    <select class="product_select" id="state" style="margin-bottom: 20px">

                    </select>
                </div>

                <button type="button" class="action-button previous previous_button mt-5">
                    Back
                </button>
                <button type="button" class="next action-button">Continue</button>
            </fieldset>
            <fieldset>
                <h3>Datos de contacto</h3>
                <h6>Ingrese sus datos para contactarnos con usted</h6>

                <div class="form-group">
                    <input type="text " class="form-control" id="name" placeholder="Primer Nombre " />
                </div>
                <div class="form-group">
                    <input type="text " class="form-control" id="lname" placeholder="Apellido" />
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" style="padding-left:20px" id="phone"
                        placeholder="Telefono" />
                </div>
                <div class="form-group">
                    <input type="email " class="form-control" id="email" placeholder="Correo Electronico" />
                </div>

                <button type="button" class="action-button previous previous_button">
                    Back
                </button>
                <a href="# " class="action-button" id="finishBtn"
                    style="margin-bottom: 30px;margin-top: 30px">Finish</a>
            </fieldset>

        </form>
    </section>
    <!-- /.MultiStep Form -->
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script>
        var _token = '{{ csrf_token() }}';

    </script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script>
        particlesJS("particles", {
            "particles": {
                "number": {
                    "value": 40,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

    </script>


</body>

</html>
