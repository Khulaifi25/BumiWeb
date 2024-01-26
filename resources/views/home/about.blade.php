<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/2a0b2f9b30.js" crossorigin="anonymous"></script>

    <title>Company</title>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><img class="logonav" src="assets/img/logohd.png"
                    loading="lazy" alt="..."></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item homenav">
                        <a class="nav-link fw-normal " href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle homenav active" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu homenav" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item " href="about">About Us</a></li>
                            <li><a class="dropdown-item " href="team">Team</a></li>
                            <li>
                                <a class="dropdown-item " href="testimonials">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item homenav">
                        <a class="nav-link fw-normal" href="services">Services</a>
                    </li>
                    <li class="nav-item homenav">
                        <a class="nav-link fw-normal" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item homenav">
                        <a class="nav-link fw-normal" href="contact">Contact</a>
                    </li>

                </ul>
            </div>
            <button type="button" class="btn p-1 btn-outline-warning btn-sm rounded-pill border-3 ">
                <a class="nav-btnlink fw-bolder  hover-text text-center" href="contact">HIRE US</a>
            </button>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-space-between align-items-center text-black">
                <a class="homefont text-black-50" href="/"><i class="fas fa-home fa-lg mt-2 mb-2"
                        href="/"></i></a>
                <i class="fas fa-chevron-right text-black-50 "></i>
                <div class="abouttxt active">About Us</div>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- about -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right">
                <h3 class="fw-bold about-us-title">
                    {{ $about->judul }}
                </h3>
                <p class="fw-bolder mt-4 about-us-subtitle">
                    {{ $about->subjudul }}
                </p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
                    {{ $about->deskripsi_1 }}
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-medal"></i>
                        {{ $about->kelebihan_1 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-medal"></i>
                        {{ $about->kelebihan_2 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-medal"></i>
                        {{ $about->kelebihan_3 }}
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-medal"></i>
                        {{ $about->kelebihan_4 }}
                    </li>
                </ul>
                <p class="mt-2">
                    {{ $about->deskripsi_2 }}
                </p>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- teams -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container ">
                <h2 class="text-center fw-bold ">OUR TEAM</h2>
            </div>
            <p class="text-center ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem modi vero voluptas
                ea
                molestias eum illo, ducimus eius quisquam repellendus accusamus rerum! Repeliendus enim incidunt
                assumenda
                pariatur, quisquam evaniet numquam.</p>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="card porto-rad" style="width: 18rem;">
                            <img src="image/{{ $team->image }}" class="card-img-top porto-rad" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title text-bold">{{ $team->title }}</h5>
                                <p class="card-text text-muted">{{ $team->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end teams -->

    <!-- clients -->
    <div class="clients mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">CLIENTS</h2>
            </div>
            <div class="row mt-5">
                @foreach ($clients as $client)
                    <div class="col-md-3 pt-5 text-center" data-aos="zoom-in">
                        <img src="image/{{ $client->image }}" class="img-fluid brand-image" alt="" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end clients -->

    <!-- footer -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5" style="background-image: url('assets/img/map-image.png');">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">{{ $contact->name }}</h2>
                            <p>
                                {{ $contact->description }}
                            </p>
                            <strong>Phone</strong> : <span>{{ $contact->telepon }}</span>
                            <br />
                            <strong>Email</strong> : <span>{{ $contact->email }}</span>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Our Services</h2>
                            <ul class="list-group list-unstyled">
                                @foreach ($services as $service)
                                    <li class="list-item">
                                        <a href="" class="text-decoration-none text-white">
                                            <i class="fa fa-chevron-right primary"></i>
                                            {{ $service->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Useful Links</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Portfolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">Join Our Newsletter</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                                <button class="btn btn-subscribe whiteclr" type="button" id="inputGroupFileAddon04">
                                    Subscribe
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            &copy; Copyright <strong>Company</strong>. All Right Reserved
                        </div>
                        <div class="credits">
                            Design by me
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-links float-end">
                            <a href="" class="mx-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer  -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- floating whatsapp -->
    <div class="whatsapp-wrapper">
        <div class="whatsapp-fab" onclick="toggleWhatsAppButtons()">
            <img id="imagewa" src="assets/img/whatsapp-icon.png" style="width: 50px" onclick="changeImage()">
        </div>
        <div class="whatsapp-buttons" id="whatsappButtons">
            <div class="admin-info">
                <img src="assets/img/logo.png" alt="Admin Profile Photo">
                <span>Hi, saya Khulaifi, Admin dari BUMIWEB, ada yang bisa saya bantu?</span>
            </div>
            <div class="text-wa">
                <a>
                    Apa yang Anda butuhkan?
                </a>
            </div>
            <div class="whatsapp-button-1">
                <a href="waservice">
                    <button>Saya Ingin Buat Project</button>
                </a>
            </div>
            <div class="whatsapp-button-2">
                <a href="https://api.whatsapp.com/send?phone=6285157663917&text=*Hi BUMIWEB*,
                Saya ingin tanya tentang *Lowongan Pekerjaan di BUMIWEB*."
                    target="_blank">
                    <button>Saya Mencari Pekerjaan/Intership</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        function toggleWhatsAppButtons() {
            var whatsappButtons = document.getElementById("whatsappButtons");
            whatsappButtons.classList.toggle("show");

        }
    </script>
    <script>
        function changeImage() {
            var image = document.getElementById('imagewa');
            if (image.src.match("assets/img/whatsapp-icon.png")) {
                image.src = "assets/img/whatsapp-close-dark.png";
            } else {
                image.src = "assets/img/whatsapp-icon.png";
            }
        }
    </script>
    </body>

</html>
