<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MaxMedia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/x-icon" href="img/logoo-removebg-preview.png">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="stylesheet" href="assets/css/fontawesome.css"/>
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <img src="img/logoo-removebg-preview.png" width="auto" height="70x" style="margin-right: 2%;">
                <a href="" class="navbar-brand p-0">

                    <h1 class="m-0"></i>Max<span class="fs-5">Media</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">

                                <a href="soho.html" class="dropdown-item">SOHO</a>
                                <a href="gmenet.html" class="dropdown-item">Game Net</a>
                                <a href="corporate.html" class="dropdown-item">Corporate</a>
                                <a href="corporate.html" class="dropdown-item">Reliable Connectivity</a>
                                <a href="affordable.html" class="dropdown-item ">Affordable Packages</a>
                                <a href="customizable.html" class="dropdown-item">Customizable Plans</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    
                    </div>


                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Welcome to MaxMedia </h1>
                            <p class="text-white pb-3 animated zoomIn">
                            <p class="text-white pb-3 animated zoomIn">Ciptakan momen Keluarga yang bermakna dengan
                                dukungan Internet terbaik dan interaktif berkualitas dirumah kamu. Bersama
                                <b>MaxMedia</b>, rasakan pengalaman internet yang stabil dan selalu dapat diandalkan. <br> <br>Nikmati kenyamanan berselancar di dunia maya, streaming tanpa gangguan, dan komunikasi tanpa hambatan, semua dari kenyamanan rumah Anda. MaxMedia siap mendukung segala aktivitas online Anda dengan layanan yang prima.
                            </p>
                            </p>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/Jaringan-Komputer-removebg.png" alt=""
                                style="margin-bottom: 10%; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3"
                                placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">Apa Itu MaxMedia?</h2>
                        </div>
                        <p class="mb-4">MaxMedia adalah penyedia layanan Internet dan IT Development terkemuka dengan pengalaman luas di bidang teknologi informasi. Kami berkomitmen untuk menyediakan layanan internet yang handal dan didedikasikan untuk berbagai kebutuhan Anda.</p>
                        <p class="mb-4">Layanan kami dirancang untuk memenuhi kebutuhan berbagai sektor, termasuk perkantoran, industri, lembaga pendidikan, pusat permainan, kafe, dan instansi pemerintah. Dengan akses langsung ke backbone gedung Cyber atau Indonesia Data Center (IDC), kami memastikan stabilitas dan kualitas koneksi yang optimal.</p>
                        <p class="mb-4">Kami juga menyediakan dukungan teknis 24 jam sehari, sehingga Anda dapat merasa tenang mengetahui bahwa tim kami selalu siap membantu menjaga koneksi internet Anda tetap stabil. Untuk kemudahan Anda, kami juga menyediakan layanan online melalui nomor WhatsApp yang tertera di situs web kami.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Kualitas Internet Terbaik.
                                </h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Dukungan Layanan Support
                                    24/7.</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Harga Terjangkau.</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Streaming Lancar, Gaming
                                    Tanpa Gangguan</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3"
                                href="https://www.facebook.com/maxmedia2018/?locale=id_ID"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3"
                                href="https://www.youtube.com/@maxmediaid6467"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3"
                                href="https://www.instagram.com/maxmedia_id/                                     "><i
                                    class="fab fa-instagram"></i></a>


                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/pictt.webp" height="10px">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        
       <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Services</h6>
            <h2 class="mt-2">Our Service</h2>
        </div>
        <div class="row"> <!-- Tambahkan div row di sini -->
            @if($services->count() > 0)
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <img src="{{ asset('storage/' . $service->image) }}" style="height: auto; width: 70%; margin: 0 auto;"> <!-- Ubah margin untuk center gambar -->
                            <h5 class="mb-3">{{ $service->name }}</h5>
                            <p>{{ $service->deskripsi }}</p>
                            <a class="btn px-3 mt-auto mx-auto" href="gmenet.html">Read More</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No services available.</p>
            @endif
        </div> <!-- Tutup div row di sini -->
    </div>
</div>
<!-- Service End -->

      
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Start From</h6>
                    <h2 class="mt-2">MaxMedia Paket</h2>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                    @if($mbps->count() > 0)
    <div class="row g-4 portfolio-container">
        @foreach($mbps as $mp)
            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $mp->image) }}" alt="">
                    <div class="portfolio-overlay">
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>{{ $mp->name }}</small>
                            <a class="h5 d-block text-white mt-1 mb-0">{{ $mp->deskripsi }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No Mbps packages available.</p>
@endif


                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->




        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">

                    <h2 class="mt-2">Mengapa Maximum Media? </h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">

                                <img class="img-fluid rounded w-100" src="img/kluarga.jpeg">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Kualitas internet terbaik</h5>
                                <small>Stabilitas terjamin dengan monitoring Network Quality Control System.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">

                                <img class="img-fluid rounded w-100" src="img/wipi.webp" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Dukungan layanan support 24/7</h5>
                                <small>Technical support kami always on 24H / 7D siap menangani network problem</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">

                                <img class="img-fluid rounded w-100" src="img/lowwprice.webp" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Harga Terjangkau</h5>
                                <small>Maximum Media menyediakan banyak pilihan</small>
                                <br>
                                <small>paket internet yang di sesuaikan kebutuhan Anda</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Perkantoran Multiguna,
                            Jl. Bintaro Utama 3A No. 8M,
                            Pondok Karya, Pondok Aren,
                            Kota Tangerang Selatan, Banten 15225.</p>
                        <p><i class="fa fa-phone-alt me-3"></i>(021) 7300-056</p>
                        <p><i class="fa fa-envelope me-3"></i>info@maxmedia.co.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.facebook.com/maxmedia2018/?locale=id_ID"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.youtube.com/@maxmediaid6467"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/maxmedia_id/"><i
                                    class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="about.html">About Us</a>
                        <a class="btn btn-link" href="contact.html">Contact Us</a>
                        <a class="btn btn-link" href="404.html">Privacy Policy</a>
                        <a class="btn btn-link" href="404.html">Terms & Condition</a>
                      
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=PT%20Bangsawan%20Cyberindo+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                    href="https://www.gps.ie/">gps devices</a></iframe></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">

                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
       
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <div class="whatsapp-container">
        <a href="https://wa.me/6281315000405" class="whatsapp-button" target="_blank">
          <img src="img/whattsap.webp" alt="WhatsApp Icon" class="whatsapp-icon"> Hubungi Kami di WhatsApp</a>
      </div>
      

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>