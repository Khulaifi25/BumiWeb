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
                        <a class="nav-link fw-normal dropdown-toggle homenav" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link fw-bolder active" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs">
        <div class="container mt-5">
            <div class="d-flex p-2 justify-content-space-between align-items-center text-black">
                <a class="homefont text-black-50" href="/"><i class="fas fa-home fa-lg mt-2 mb-2"
                        href="/"></i></a>
                <i class="fas fa-chevron-right text-black-50 "></i>
                <div class="abouttxt active">WhatsApp Service</div>
            </div>
        </div>
        <!-- end breadcumbs -->

        <!-- contact -->
        <div class="contact mt-3 mb-5">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card border-4 porto-rad">
                            <div class="card-body px-4">
                                <div class="row mt-4">
                                    <h1>Send Form Your Project</h1>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Nama</label>
                                        <input type="text" class="form-control nama" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                                        <input type="text" class="form-control email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1"
                                            class="form-label fw-bold">No.Whatsapp</label>
                                        <input type="text" class="form-control nowa" placeholder="No.Whatsapp">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Type Project
                                            (Website/Andorid/IoT)</label>
                                        <input type="text" class="form-control typeproject"
                                            placeholder="Type Project">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1" class="form-label fw-bold">Pesan</label>
                                        <textarea name="" id="" cols="30" rows="10" class="form-control pesan"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <button type="button" class="btn btn-wa-submit porto-rad"
                                        onclick="sendwhatsapp();">Send Via WhatsApp</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->


    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        function sendwhatsapp() {
            var phonenumber = "+6285157663917";

            var nama = document.querySelector('.nama').value;
            var email = document.querySelector('.email').value;
            var nowa = document.querySelector('.nowa').value;
            var typeproject = document.querySelector('.typeproject').value;
            var pesan = document.querySelector('.pesan').value;

            var url = "https://wa.me/" + phonenumber + "?text=" +
                "*PROJECT BUMI WEB - REQUEST*" + "%0A" +
                "-------------------------------------------------------" + "%0A" +
                "*Nama :* " + nama + "%0A" +
                "*Email :* " + email + "%0A" +
                "*No.Whatsapp :* " + nowa + "%0A" +
                "*Type Project :* " + typeproject + "%0A" +
                "*Pesan :* " + pesan + "%0A" +
                "-------------------------------------------------------" + "%0A" +
                "BUMIWEB Team Copyright 2024";

            window.open(url, '_blank').focus();
        }
    </script>
    </body>

</html>
