<!doctype html>
<html lang="en">

<head>
    <title>Colorlib Wordify &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">


    <style>
        #otro {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;

        }



        #navigation-bar {
            position: relative;
            height: 100px;
            width: 100%;
            z-index: 3;
            padding: 10px;
            background-color: #273f95;
            overflow: hidden;
        }

        #navigation-bar img {
            height: 80px;
            position: absolute;
            top: 15%;
            left: 2.5%;
            opacity: .8;
            transition: all .4s ease;
        }

        #navigation-bar img:hover {
            opacity: 50;
        }

    </style>

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/blog_style.css">
</head>

<body>


    <header role="banner">
        <div id="navigation-bar">
            <div class="nav-new">
                <a href="/">
                    <img src="/images/debtfreedom_logo.png" alt="logo">
                </a>
            </div>
        </div>
    </header>
    <div id="otro" class="otro"></div>



    <div class="wrap">



        <section class="site-section py-md m-5">
            <div class="container">

                <div class="row blog-entries element-animate">

                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="post-meta">
                            <span class="author mr-2"><img src="/images/notifyicon.png" alt="Colorlib" class="mr-2">
                                Debtfreedom</span>&bullet;
                            <span class="mr-2">{{ $post->created_at->format('d F, Y') }}
                            </span> &bullet;
                            {{-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> --}}
                        </div>
                        <h1 class="mb-4">{{ $post->titulo }}</h1>
                        <img src="{{ $post->portada }}" alt="Image" class="img-fluid mb-5">


                        <div class="post-content-body">
                            {!! $post->descripcion !!}
                        </div>


                        {{-- <div class="pt-5">
                            <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>,
                                <a href="#">#asia</a>
                            </p>
                        </div> --}}


                    </div>

                    <!-- END main-content -->

                    <div class="col-md-12 col-lg-4 sidebar">
                        <div class="sidebar-box">
                            <h3 class="heading">Noticias visitadas frecuentemente por nuestros clientes</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach ($MostVisitedPost as $post)
                                        <li>
                                            <a href="/blog/{{ $post->id_show }}">
                                                <img src="{{ $post->portada }}" alt="portada_{{ $post->titulo }}"
                                                    class="mr-4">
                                                <div class="text">
                                                    <h4>{{ $post->titulo }}</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">{{ $post->created_at->format('d F, Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <h3 class="heading">Noticias Recientes</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    @foreach ($newestPost as $post)
                                        <li>
                                            <a href="/blog/{{ $post->id_show }}">
                                                <img src="{{ $post->portada }}" alt="portada_{{ $post->titulo }}"
                                                    class="mr-4">
                                                <div class="text">
                                                    <h4>{{ $post->titulo }}</h4>
                                                    <div class="post-meta">
                                                        <span class="mr-2">{{ $post->created_at->format('d F, Y') }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- END sidebar -->

                </div>
            </div>
        </section>

        <!-- END section -->


        <!-- END footer -->

    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg></div>
    <script src="/js/particles.js"></script>
    <script src="/js/particles.min.js"></script>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>

    <script src="/js/main.js"></script>

    <script>
        particlesJS("otro", {
            "particles": {
                "number": {
                    "value": 85,
                    "density": {
                        "enable": true,
                        "value_area": 700
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
