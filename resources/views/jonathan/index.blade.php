
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HealtyHabbit</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="app.js"></script>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap");

* {
  font-family: "Poppins", sans-serif;
}
.navbar {
  background-color: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
  -webkit-backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
}
.navbar-brand {
  font-weight: 600;
}
.landing1 {
  position: relative;
  background: url("{{ asset('landing1.png') }}") no-repeat center center;
  background-size: cover;
  text-align: justify;
  padding: 315px 0;
}
.iconlanding {
  padding-top: 10px;
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(30px) scale(0.9);
  }

  100% {
    opacity: 1;
    transform: translateY(0px) scale(1);
  }
}
@keyframes fade-out {
  0% {
    opacity: 0;
    transform: translateY(-30px) scale(0.9);
  }

  100% {
    opacity: 1;
    transform: translateY(0px) scale(1);
  }
}

.intro1 {
  animation: fade-out 1s;
}
.intro {
  animation: fade-in 1s;
}

.card.hovercard {
  text-align: justify;
  text-align-last: center;
  background-color: rgba(214, 224, 226, 0.2);
}

.cardheader {
  background: url("assets/jan-sedivy-3HE3B4r-A08-unsplash.jpg");
  background-size: cover;
  height: 135px;
}

.avatar {
  position: relative;
  top: -50px;
  margin-bottom: -50px;
}

.avatar img {
  max-width: 100px;
  max-height: 100px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  background-color: #f9f6f2;
}
.card-img-top {
  border-radius: 50px;
  padding: 20px;
}

.card {
  border-radius: 50px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
.card-body {
  padding: 25px;
  margin-top: -15px;
}
.btn-primary {
  border-radius: 50px;
}
.btn-primary:hover {
  background-color: black;
  border: none;
}
h3,
h5 {
  color: rgb(0, 91, 228);
}

footer {
  background: #0f67fe;
  padding: 40px 0;
}
.single-content {
  text-align: center;
  padding: 115px 0;
}
.single-box p {
  color: #fff;
  line-height: 1.9;
}
.single-box h3 {
  font-size: 16px;
  font-weight: 700;
  color: #fff;
}
.single-box .card-area i {
  color: #ffffff;
  font-size: 20px;
  margin-right: 10px;
}
.single-box ul {
  list-style: none;
  padding: 0;
}
.single-box ul li a {
  text-decoration: none;
  color: #fff;
  line-height: 2.5;
  font-weight: 500;
}
.single-box h2 {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
}
#basic-addon2 {
  background: blue;
  color: #fff;
}
.socials i {
  font-size: 18px;
  margin-right: 15px;
}
@media (max-width: 767px) {
  .single-box {
    margin-bottom: 50px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .single-box {
    margin-bottom: 50px;
  }
}
    
    </style>
    <div class="intro1">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top"">
        <div class=" container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('Logo.png') }}" alt="" width="30" height="24">
            </a>
            <a class="navbar-brand" href="#">Healty Habbit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="font-weight: bold;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-weight: bold;">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-weight: bold;">Tips&Tantangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-weight: bold;">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-weight: bold;">Produk</a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="intro">
        <div class="landing1-container">
            <div class="landing1">
                <div class="landing text-center">
                    <h1 class="display-5 fw-bolder">Koneksi - Kolaborasi <br> Kesehatan bersama</h1>
                    <p class="fw-normal">Health Habbit ada untuk membantu anda dalam melaksanakan hidup sehat.</p>
                </div>
                <div class="button text-center">
                    <button type="button" class="btn btn-primary" autocomplete="off">Mulai
                        Bergabung</button>
                </div>
                <div class="iconlanding text-center">
                    <i class="bi bi-instagram fs-4"></i>
                    <i class="bi bi-linkedin fs-4"></i>
                    <i class="bi bi-twitter fs-4"></i>
                </div>
            </div>
        </div>
    </div>
    <section class="hidden">
        <div class="landing2">
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="landing_text fs-4 mb-4">Mari bergabung dan menjadi bagian dari gerakan
                                    kesehatan
                                    yang lebih
                                    besar! Jadilah bagian dari HealthHabbit, di mana kolaborasi dan dukungan menjadikan
                                    perubahan kesehatan yang berarti. Bersama-sama, kita bisa lebih kuat, lebih sehat,
                                    dan
                                    meraih kehidupan yang lebih baik.</div>
                                <div class="pt-5">
                                    <img src="{{ asset('img.png') }}" class="img-fluid" alt="...">
                                </div>
                                <div class="container px-5 my-5 w-75">
                                    <img src="{{ asset('logo2.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                            <img src="{{ asset('bg.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="info">
                            <div class="title">
                                <h6 class="fw-bolder">Healthy Exercise</h6>
                            </div>
                            <p class="p-3">Forum ini membahas tentang olahraga yang cocok bagi berbagai kalangan usia,
                                bersama beberapa instruktur tersertifikasi</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary mb-3">Bergabung</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4"> <!-- Use col-md-4 to create 3 columns on medium-sized screens -->
                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                            <img src="{{ asset('bg.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="info">
                            <div class="title">
                                <h6 class="fw-bolder">Healthy Exercise</h6>
                            </div>
                            <p class="p-3">Forum ini membahas tentang olahraga yang cocok bagi berbagai kalangan usia,
                                bersama beberapa instruktur tersertifikasi</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary mb-3">Bergabung</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4"> <!-- Use col-md-4 to create 3 columns on medium-sized screens -->
                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                            <img src="{{ asset('bg.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="info">
                            <div class="title">
                                <h6 class="fw-bolder">Healthy Exercise</h6>
                            </div>
                            <p class="p-3">Forum ini membahas tentang olahraga yang cocok bagi berbagai kalangan usia,
                                bersama beberapa instruktur tersertifikasi</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary mb-3">Bergabung</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tips_sehat">
        <div class="container py-5 ">
            <h1 class="text-center">Tips Sehat</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="{{ asset('Rounded Rectangle.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <button class="btn btn-primary" style="margin-left: 20px;">Buy Now</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <img src="{{ asset('logo2.png') }}" class="w-75" alt="">
                        <p>Health Habbit ada untuk membantu anda dalam melaksanakan hidup sehat. Health Habbit adalah
                            sebuah platform online yang menyediakan berbagai macam informasi dan layanan kesehatan,
                            termasuk tips dan trik untuk hidup sehat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Layanan</h2>
                        <ul>
                            <li><a href="#">Tanya Kesehatan?</a></li>
                            <li><a href="#">Seputar HealtyHabbit</a></li>
                            <li><a href="#">Founder</a></li>
                            <li><a href="#">Email Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>FAQ</h2>
                        <ul>
                            <li><a href="#">Daftar</a></li>
                            <li><a href="#">Memulai program</a></li>
                            <li><a href="#">Cara Upload</a></li>
                            <li><a href="#">Monetisasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2>Kontak Kami</h2>
                        <p>Hubungi kami pada setiap MediaSosial/Email jika ada kendala dan segala keperluan mengenai
                            HealtyHabbit</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pencarian"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search btn"></i></span>
                        </div>
                        <h2>Media Sosial Kami</h2>
                        <p class="socials">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-github"></i>
                            <i class="fa fa-twitter"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>