<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 0px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slide1.webp" class="d-block w-100" alt="Alicia Maitin Makeup" title="Sesion Fotografía">

        </div>
        <div class="carousel-item">
            <img src="img/slide2.webp" class="d-block w-100" alt="Alicia Maitin Makeup" title="Sesion Fotografía">
        </div>
        <div class="carousel-item">
            <img src="img/slide3.webp" class="d-block w-100" alt="Alicia Maitin Makeup" title="Sesion Fotografía">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<style>
    #myCarousel {
        width: 100%;
    }

    .carousel-inner {
        width: 100%;
    }

    .carousel-item img {
        width: 100%;
        object-fit: cover;
    }
</style>

<div class="container">
    <div class="row g-5 align-items-centerr">
        <div class="col-lg-6 py-6 pb-0 pt-lg-0">
            <div class="d-flex align-items-center pt-5">
                <a href="#contact" class="btn reservar btn-primary py-3 px-4 me-5">Reservar una cita</a>
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="img/aliciavideo.mp4"
                    data-bs-target="#videoModal">
                    <span></span>
                </button>
                <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<style>
    .container .btn {
        margin-bottom: 0;
    }

    @media (max-width: 1100px) {
        .imagen-consejo {
            justify-content: center;
            align-items: center;
            display: block;
            margin: 0 auto;
            max-width: 100% !important;
            height: auto !important;
        }
    }

    /* Estilos a partir de 1080px */
    @media (max-width: 1080px) {
        .imagen-consejo {
            justify-content: center;
            align-items: center;
            display: block;
            margin: 0 auto;
            max-width: 100% !important;
            height: auto !important;

        }
    }

    @media (max-width: 991px) {
        .container .reservar {
            display: block;
            margin-bottom: 10px;
            margin-top: -20px;
        }

        @media (max-width: 475px) {
            .imagen-consejo {
                display: flex;
                justify-content: center;
                align-items: center;
                display: block;
                margin: 0 auto;
                max-width: 100% !important;
                /* O ajusta el valor según tus preferencias */
                height: auto !important;
            }
        }

        @media (max-width: 375px) {
            .imagen-consejo {
                display: flex;
                justify-content: center;
                align-items: center;
                display: block;
                margin: 0 auto;
                max-width: 100% !important;
                /* O ajusta el valor según tus preferencias */
                height: auto !important;
            }
        }

        .container .btn-play {
            margin-top: 10px;
            padding: 18px 20px 20px 28px;
            margin-top: -20px;
        }

        .ms-4 {
            margin-top: -20px;
            margin-left: 1.5rem !important;
        }

        .py-6 {
            padding-top: 2rem;
            padding-bottom: 6rem;
        }
    }
</style>

<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Makeup By Alicia Maitín</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-9x16">
                    <video class="embed-responsive-item" src="" id="video" controls autoplay></video>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Video Modal End -->
<style>
    .ratio {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 120.77%;
        /* Agranda el tamaño del card a lo largo */
    }

    .ratio-9x16 video {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        object-fit: cover;
        /* Ajusta el video para que ocupe todo el espacio disponible sin distorsionar */
        background-color: black;
    }
</style>

<script>
    // Detener y restablecer el video al cerrar el modal
    var videoModal = document.getElementById('videoModal');
    videoModal.addEventListener('hidden.bs.modal', function () {
        var video = document.getElementById('video');
        video.pause();
        video.currentTime = 0;
    });
</script>


<!-- About Start -->
<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-5">
                    <div class="years flex-shrink-0 text-center me-4">
                        <script>
                            // Obtén el año actual
                            var fechaActual = new Date();
                            var añoActual = fechaActual.getFullYear();

                            // Año en el que comenzaste tu experiencia
                            var añoInicioExperiencia = 2015; // Reemplaza con el año correspondiente

                            // Calcula los años de experiencia
                            var añosExperiencia = añoActual - añoInicioExperiencia;

                            // Muestra los años de experiencia en la página
                            document.getElementById("experiencia").innerHTML = añosExperiencia;
                        </script>
                        <script>
                            document.write("<h2 class='display-1 mb-0'>" + añosExperiencia + "</h2>");
                            document.write("<h5 class='mb-0'>Años</h5>");
                        </script>
                    </div>
                    <h3 class="lh-base mb-0">de experiencia laboral como maquilladora profesional y cosmetóloga
                        integral.</h3>
                </div>

                <!----------------------------------------ELEGIR 1 CONTENIDO DE LAS 2 OPCIONES-------------------------------------------------------------------------------->
                <p class="mb-4" style="text-align: justify;">¡Hola! Soy Alicia Maitín, maquillista profesional y
                    cosmetóloga integral de Panamá. Me gradué en el prestigioso Instituto INESCOSA y CENTRO TEC en
                    Cosmetología y Estética Integral, donde me especialicé en maquillaje de novia, fotografía, moda y
                    maquillaje artístico en The Makeup Academy en Medellín, Colombia.</p>
                <!--                   <p class="mb-4" style="text-align: justify;">¡Hola! Soy Alicia Maitín, maquillista profesional con formación en cosmetología y estética integral. Me gradué del Instituto INESCOSA y CENTRO TEC, en donde completé una especialización en Maquillaje de Novia, Fotografía, Moda y Artístico en The Makeup Academy en Medellín, Colombia. Mi objetivo es resaltar la belleza natural de las personas, y he tenido el privilegio de trabajar con una amplia variedad de clientes, brindando servicios de maquillaje de alta calidad.</p>
 -->
                <p class="mb-4" style="text-align: justify;">A lo largo de mi carrera, he tenido el privilegio de
                    trabajar con una amplia variedad de clientes, brindándoles servicios de maquillaje de alta calidad.
                    Mi verdadera pasión radica en realzar la belleza natural de las personas, y me enorgullece poder
                    hacerlo a través de mi experiencia y habilidades como maquillista profesional y cosmetóloga
                    integral.</p>

                <p style="text-align: justify;">Creo firmemente en realzar la confianza y la autoestima a través del
                    arte del maquillaje. Mi enfoque se centra en resaltar las características únicas de cada individuo y
                    crear looks personalizados que reflejen su estilo y personalidad.</p>
                <p style="text-align: justify;">Te invito a explorar mi portfolio y descubrir algunos de los trabajos
                    que he realizado.</p>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="img/experience1.webp" alt="Maquillaje social en Panamá"
                            title="Reserva tu cita para lucir radiante en tu día especial">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="img/experience2.webp" alt="Maquillaje social en Panamá"
                            title="Reserva tu cita para lucir radiante en tu día especial">
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="pe-3 me-3 mb-0">Servicios</h5>
                </div>
                <p class="mb-4" style="text-align: justify;">Ya sea que necesites un maquillaje para una ocasión
                    especial, una sesión de fotos o simplemente desees aprender técnicas de maquillaje, estoy aquí para
                    ayudarte. Mi objetivo es brindarte una experiencia excepcional y resultados hermosos que te hagan
                    sentir radiante y seguro/a en tu propia piel.</p>
                <p class="mb-4" style="text-align: justify;">Si deseas programar una cita o tienes alguna pregunta, no
                    dudes en contactarme. ¡Espero tener la oportunidad de trabajar contigo y ayudarte a resaltar tu
                    belleza única!</p>
                <div class="col-sm-6">
                    <img class="img-fluid rounded" src="img/aliciafirma.jpg" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                </div>
                <!--                     
    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                    </div>
                    <p class="mb-0">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
 -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- PROMOTIONS AND OFFERS START -->
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Ofertas y Promociones</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                style="background-image: url('img/promo1.webp'); height: 400px;"
                alt="Promoción de Maquillaje para Todas las Ocasiones"
                title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <ul class="d-flex list-unstyled mt-auto">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                style="background-image: url('img/promo2.webp'); height: 400px;"
                alt="Promoción de Maquillaje para Todas las Ocasiones"
                title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                style="background-image: url('img/promo3.webp'); height: 400px;"
                alt="Promoción de Maquillaje para Todas las Ocasiones"
                title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROMOTIONS AND OFFERS END -->

<!-- Service Start -->
<div class="container-fluid bg-light my-5 py-6" id="service">
    <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">Mis Servicios</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <button class="btn btn-primary py-3 px-5" onclick="redirigirWhatsApp()">Contrata mis servicios</button>
                <script>
                    // BOTON WHATSAPP CONTRATA MIS SERVICIOS
                    function redirigirWhatsApp() {
                        var numeroTelefono = '+50763270029';
                        var enlaceWhatsApp = 'https://wa.me/' + numeroTelefono + '?text=¡Hola! Me gustaría contratar tus servicios.';

                        // Abre WhatsApp en una nueva pestaña o ventana
                        window.open(enlaceWhatsApp);
                    }
                </script>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <img src="img/maquillaje.png" style="width: 50px; height: 50px;"
                            alt="Maquillaje para Todas las Ocasiones"
                            title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Maquillaje de Novia Civil</h4>
                        <h6 class="mb-3">Inicia desde <span class="text-primary">$120</span></h6>
                        <span>
                            <ul>
                                <li>
                                    Maquillaje para el día de la boda.
                                </li>

                                <li>
                                    Aplicación de pestañas.
                                </li>

                                <li>
                                    Servicio a domicilio en la ciudad de Panamá.
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <img src="img/novia.png" style="width: 50px; height: 50px;"
                            alt="Maquillaje para Todas las Ocasiones"
                            title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                        <!--  <i class="fa fa-code-branch fa-2x text-dark"></i> -->
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Maquillaje de Novia VIP</h4>
                        <h6 class="mb-3">Inicia desde <span class="text-primary">$360</span></h6>
                        <span>
                            <ul>
                                <li>
                                    Sesión de Maquillaje de prueba previo a la boda.
                                </li>

                                <li>
                                    Maquillaje para el día de la boda.
                                </li>

                                <li>
                                    Aplicación de pestañas.
                                </li>

                                <li>
                                    Servicio a domicilio en la ciudad de Panamá.
                                </li>

                                <li>
                                    Kit de retoque.
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <img src="img/novia2.png" style="width: 50px; height: 50px;"
                            alt="Maquillaje para Todas las Ocasiones"
                            title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                        <!--  <i class="fa fa-code-branch fa-2x text-dark"></i> -->
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Maquillaje y Peinado de Novia VIP</h4>
                        <h6 class="mb-3">Inicia desde <span class="text-primary">$520</span></h6>
                        <span>
                            <ul>
                                <li>
                                    Sesión de Maquillaje y Peinado de prueba previo a la boda.
                                </li>

                                <li>
                                    Maquillaje y Peinado para el día de la boda.
                                </li>

                                <li>
                                    Aplicación de pestañas.
                                </li>

                                <li>
                                    Colocación de Tocado y Velo.
                                </li>

                                <li>
                                    Servicio a domicilio en la ciudad de Panamá.
                                </li>

                                <li>
                                    Kit de retoque.
                                </li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                    <div class="bg-icon flex-shrink-0 mb-3">
                        <img src="img/maquillaje3.png" style="width: 50px; height: 50px;"
                            alt="Maquillaje para Todas las Ocasiones"
                            title="¡Resalta tu belleza en cualquier ocasión con nuestro maquillaje profesional! Ofrecemos servicios para bodas, fiestas, fotos y más.">
                        <!--  <i class="fa fa-code-branch fa-2x text-dark"></i> -->
                    </div>
                    <div class="ms-sm-4">
                        <h4 class="mb-3">Maquillaje Personalizado.</h4>
                        <ul>
                            <li>
                                <h6 class="mb-3">Maquillaje Social desde <span class="text-primary">$60</span></h6>
                            </li>

                            <li>
                                <h6 class="mb-3">Maquillaje Artístico desde <span class="text-primary">$85</span></h6>
                            </li>

                            <li>
                                <h6 class="mb-3">Maquillaje Quinceañeras desde <span class="text-primary">$85</span>
                                </h6>
                            </li>

                            <li>
                                <h6 class="mb-3">Maquillaje para Fotografías desde <span class="text-primary">$60</span>
                                </h6>
                            </li>

                        </ul>
                        <p>En todos nuestros servicios se incluye:</p>
                        <ul>
                            <li>
                                Pestaña.
                            </li>

                            <li>
                                Servicio a domicilio en la ciudad de Panamá.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Projects Start -->
<div class="container-xxl py-6 pt-5" id="project">
    <div class="container">
        <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">Mi Portafolio</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                    <li class="mx-3 active" data-filter="*">Todos</li>
                    <li class="mx-3" data-filter=".first">Maquillaje Social</li>
                    <li class="mx-3" data-filter=".second">Novias</li>
                    <li class="mx-3" data-filter=".third">Quinceaños</li>
                    <li class="mx-3" data-filter=".four">Artísticos</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/4.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/4.webp"data-mdb-zoom-effect="true" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/5.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/5.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/6.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/6.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/b6.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/b6.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/b7.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/b7.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/b8.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/b8.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/g12.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/g12.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/g13.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/g13.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/g14.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/g14.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/c5.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/c5.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/c3.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/c3.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/c2.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/c2.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/15.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/15.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/17.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/17.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/z1.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/z1.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/16.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/16.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/21.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/21.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bc1.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bc1.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/z2.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/z2.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/d11.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/d11.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/d10.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/d10.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <!-- SECCION ARTISTICA-->
            <div class="col-lg-4 col-md-6 portfolio-item four">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/a17.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/a17.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item four">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/a18.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/a18.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item four">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/a20.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/a20.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <!-- SECCION NUEVA-->
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/r3.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/r3.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/r8.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/r8.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/r9.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/r9.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <!-- SECCION NUEVA-->
            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/q11.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/q11.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/q12.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/q12.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/qi12.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/qi12.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bu19.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bu19.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bu20.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bu20.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bu21.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bu21.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bo1.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bo1.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bo2.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bo2.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/bo3.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/bo3.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/re13.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/re13.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/re14.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/re14.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="img/re15.webp" alt="Maquillaje para Todas las Ocasiones"
                        title="¡Resalta tu belleza en cada momento con nuestro maquillaje profesional!">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/re15.webp"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- RECOMENDACIONES START -->
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Consejos de Belleza, Maquillaje y Cuidado del Cabello</h2>
    <div class="row featurette" style="margin-top: 20px">
        <div class="col-md-7">
            <article style="text-align: justify;">
                <p>En un mundo que celebra la individualidad y la autoexpresión, resaltar tu belleza única es un arte
                    que
                    mereces dominar. ¿Buscas consejos prácticos para realzar tu estilo y sentirte más segura que nunca?
                    Estás en
                    el lugar correcto.</p>
                <p><strong>1. Brilla con una Piel Radiante: </strong> Un cuidado adecuado de la piel es la base de
                    cualquier
                    look de belleza. Limpia, exfolia e hidrata tu piel diariamente. Aplica protector solar para prevenir
                    daños
                    del sol. ¡Un cutis saludable es tu lienzo perfecto!</p>

                <p><strong>2. Maquillaje Natural y Elegante:</strong> Apuesta por un maquillaje natural que realce tus
                    rasgos.
                    Utiliza una base ligera para un aspecto fresco y un labial nude para un toque sofisticado. Si deseas
                    destacar los ojos, prueba con sombras suaves y delineado sutil.</p>

                <p><strong>3. Cuidado del Cabello Brillante:</strong> El cabello radiante es clave en tu apariencia.
                    Hidrátalo
                    con acondicionador y usa tratamientos capilares nutritivos. ¡No temas experimentar con peinados! Un
                    spray de
                    brillo puede darle un toque final deslumbrante.</p>

                <p><strong>4. Tendencias Actuales en Maquillaje:</strong> Los tonos neutros siguen cautivando, pero
                    ahora, se abren paso los audaces delineados gráficos. Agrega destellos y brillos sutiles para un
                    acabado luminoso. Los labiales vibrantes son la firma de esta temporada. ¡Sé
                    audaz y creativa!</p>

                <p><strong>5. Autocuidado para Equilibrio Interior:</strong> No olvides cuidar tu bienestar interior.
                    Dedica
                    tiempo a la meditación y a respirar profundo. Mascarillas faciales y relajación son esenciales.
                    Cuando te
                    sientes bien por dentro, eso se refleja en tu belleza exterior.</p>
            </article>
        </div>
        <div class="col-md-5">
            <div id="image-slider" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                role="img" aria-label="" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="img/1.webp" alt="Image 1" class="slider-image imagen-consejo">
                <img src="img/4.png" alt="Image 6" class="slider-image imagen-consejo" style="display: none;">
                <img src="img/3.png" alt="Image 3" class="slider-image imagen-consejo" style="display: none;">
                <img src="img/5.png" alt="Image 7" class="slider-image imagen-consejo" style="display: none;">
            </div>
            <script>
                const imageSlider = document.getElementById('image-slider');
                const images = imageSlider.getElementsByClassName('slider-image');
                let currentIndex = 0;

                function showNextImage() {
                    images[currentIndex].style.display = 'none';
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].style.display = 'block';
                }

                images[currentIndex].style.display = 'block';
                setInterval(showNextImage, 9000); // Cambiar la imagen cada 9 segundos
            </script>
        </div>
    </div>
    <!-- <hr class="featurette-divider"> -->
</div>
<!-- RECOMENDACIONES END -->

<style>
    /* Estilos personalizados */
    .faq-section {
        padding: 80px 0;
    }
</style>
<!--PREGUNTAS FRECUENTES -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2 class="text-center mb-4">Preguntas Frecuentes</h2>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <!-- Pregunta 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                ¿Cómo agendar una cita?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>Puedes agendar una cita a través de nuestro formulario en línea o contactándonos
                                    directamente al 6327-0029.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                ¿Cuánto tiempo dura una sesión de maquillaje?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>El tiempo varía según el servicio y el look deseado. En la consulta previa
                                    podemos estimar
                                    el tiempo necesario para cada sesión, pero la mayoría de las sesiones duran
                                    aproximadamente 1hr
                                    a 1hr 30min.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                ¿Ofreces servicios a domicilio?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>¡Sí! Ofrezco servicios de maquillaje y peinado a domicilio en Panamá,
                                    brindándote comodidad
                                    y profesionalismo donde te encuentres.</strong>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                                ¿Cómo sé qué maquillaje es el mejor para mí?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <strong>Realizaremos una consulta personalizada para entender tus preferencias y estilo.
                                    Juntos
                                    crearemos un look que realce tus rasgos y se ajuste a la ocasión.</strong>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                                ¿Ofreces pruebas de maquillaje antes del evento?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                                <strong>Realizaremos una consulta personalizada para entender tus preferencias y estilo.
                                    Juntos
                                    crearemos un look que realce tus rasgos y se ajuste a la ocasión.</strong>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSix">
                                ¿Ofreces paquetes para grupos?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body">
                                <strong>¡Sí! Ofrezco paquetes para grupos como bodas y eventos. Contáctanos para más
                                    detalles y
                                    descuentos.</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input fields
    $nombre = sanitizeInput($_POST["nombre"]);
    $correo = sanitizeInput($_POST["correo"]);
    $telefono = sanitizeInput($_POST["telefono"]);
    $servicios = sanitizeInput($_POST["servicios"]);
    $fecha = sanitizeInput($_POST["fecha"]);
    $mensaje = sanitizeInput($_POST["mensaje"]);

    // Validate email format
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error_message = "El correo electrónico no es válido.";
    } else {
        // Process the form and send email
        $to = "aliciamaitin20@gmail.com";
        $subject = "Nueva reserva de cita";
        $message = "Nombre: $nombre\n";
        $message .= "Correo: $correo\n";
        $message .= "Teléfono: $telefono\n";
        $message .= "Tipo de Servicio: $servicios\n";
        $message .= "Fecha: $fecha\n";
        $message .= "Mensaje: $mensaje\n";
        $headers = "From: $correo";

        if (mail($to, $subject, $message, $headers)) {
            $success_message = "Tu reserva ha sido enviada correctamente.";
        } else {
            $error_message = "Hubo un problema al enviar tu reserva. Por favor, intenta de nuevo más tarde.";
        }
    }
}

// Sanitize input to prevent XSS attacks
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>


<!-- Contact Start -->
<div class="container-xxl pb-5" id="contact">
    <div class="container py-5">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">Reservar una cita</h2>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-2">Mi Oficina:</p>
                <h3 class="fw-bold">C. 69 Este, San Francisco, PA</h3>
                <hr class="w-100">
                <p class="mb-2">Teléfono:</p>
                <h3 class="fw-bold">+507 6327-0029</h3>
                <hr class="w-100">
                <p class="mb-2">Correo:</p>
                <h3 class="fw-bold">aliciamaitin20@gmail.com</h3>
                <hr class="w-100">
                <p class="mb-2">Redes Sociales:</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-primary me-2" target="_blank" onclick="redirigirWhatsApp()"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/aliciamaitinmakeup/"
                        target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/aliciamaitinmakeup/"
                        target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <p class="mb-4">Estoy aquí para realzar tu belleza. Permíteme crear un look personalizado que resalte
                    tus rasgos únicos. Contáctame y déjame cuidar de ti.</a></p>
                <!-- <form action="https://formspree.io/f/mqkorylo" method="POST"> -->
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <!-- <form action="https://formsubmit.co/josecanahuate05@gmail.com" method="POST"> -->
                    <input type="hidden" name="_template" value="table">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"
                                    required>
                                <label for="nombre">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <!--  _autoresponse
                                Puede enviar una respuesta instantánea a sus usuarios con una copia del envío. 
                                Agregar una personalización mensaje al cuerpo del correo electrónico. -->
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo"
                                    required>
                                <label for="correo">Email</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Telefono" required>
                                <label for="telefono">Tel.</label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-floating">
                                <select class="form-select" id="servicios" name="servicios"
                                    aria-label="Default select example">
                                    <option selected disabled>Tipo de Servicio</option>
                                    <option value="Maquillaje para Evento Especial">Maquillaje para Evento Especial
                                    </option>
                                    <option value="Maquillaje para fotografía y video">Maquillaje para fotografía y
                                        video</option>
                                    <option value="Clases de Maquillaje">Clases de Maquillaje</option>
                                    <option value="Consultoría de belleza">Consultoría de belleza</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-floating">
                                <input type="date" class="form-control fecha" name="fecha" id="fecha" required>
                                <label for="message">Fecha</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="mensaje" id="mensaje"
                                    style="height: 100px"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit">Reservar cita</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->