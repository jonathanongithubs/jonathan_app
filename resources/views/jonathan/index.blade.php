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
    <script defer src="script.js"></script>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap");

* {
  font-family: "Poppins", sans-serif;
}
/* navbar */
.navbar {
  background-color: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
  -webkit-backdrop-filter: blur(20px) saturate(160%) contrast(45%) brightness(140%);
}
.navbar-brand {
  font-weight: 600;
}

/* landingpage */
.landing1 {
  position: relative;
  background: url("assets/landing1.png") no-repeat center center;
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

/* forum&tips */
.forum {
  display: flex;
  padding: 0 35px;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: #d5e3f0;
}

.card.hovercard {
  text-align: justify;
  text-align-last: center;
  background-color: rgba(214, 224, 226, 0.2);
}

.cardheader {
  background: url("assets/jan-sedivy-3HE3B4r-A08-unsplash.jpg");
  border-top-right-radius: 40px;
  border-top-left-radius: 30px;
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

.wrapper {
  max-width: 1100px;
  width: 100%;
  position: relative;
}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.23);
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active {
  transform: translateY(-50%) scale(0.85);
}

.wrapper i:first-child {
  left: -22px;
}
.wrapper i:last-child {
  right: -22px;
}
.wrapper .carousel {
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 400px;
  list-style: none;
  background: #fff;
  cursor: pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
}
.carousel .card .img {
  background: #8b53ff;
  height: 148px;
  width: 148px;
  border-radius: 50%;
}
.card .img img {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #fff;
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 1.56rem;
  margin: 30px 0 5px;
}
.carousel .card span {
  color: #6a6d78;
  font-size: 1.31rem;
}

@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
  }
}

@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
  }
}

/* tantangan */
.tantangan {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  font-family: "Fira Sans", sans-serif;
  background: #d0e4ff;
}
.blog-card {
  position: absolute;
  height: 370px;
  width: 95%;
  max-width: 850px;
  margin: auto;
  border-radius: 25px;
  background: white;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.inner-part {
  position: absolute;
  display: flex;
  height: 360px;
  align-items: center;
  justify-content: center;
  padding: 0 25px;
}
#imgTap:checked ~ .inner-part {
  padding: 0;
  transition: 0.1s ease-in;
}
.inner-part .img {
  height: 260px;
  width: 260px;
  flex-shrink: 0;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
#imgTap:checked ~ .inner-part .img {
  height: 370px;
  width: 850px;
  z-index: 99;
  margin-top: 10px;
  transition: 0.3s 0.2s ease-in;
}
.tantangan img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  cursor: pointer;
  opacity: 0;
  transition: 0.6s;
}
#tap-1:checked ~ .inner-part .img-1,
#tap-2:checked ~ .inner-part .img-2,
#tap-3:checked ~ .inner-part .img-3 {
  opacity: 1;
  transition-delay: 0.2s;
}
.content {
  padding: 0 20px 0 35px;
  width: 530px;
  margin-left: 50px;
  opacity: 0;
  transition: 0.6s;
}
#imgTap:checked ~ .inner-part .content {
  display: none;
}
#tap-1:checked ~ .inner-part .content-1,
#tap-2:checked ~ .inner-part .content-2,
#tap-3:checked ~ .inner-part .content-3 {
  opacity: 1;
  margin-left: 0px;
  z-index: 100;
  transition-delay: 0.3s;
}
.content span {
  display: block;
  color: #7b7992;
  margin-bottom: 15px;
  font-size: 22px;
  font-weight: 500;
}
.content .title {
  font-size: 30px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
}
.content .text {
  color: #4e4a67;
  font-size: 19px;
  margin-bottom: 30px;
  line-height: 1.5em;
  text-align: justify;
}
.content button {
  display: inline-flex;
  padding: 15px 20px;
  border: none;
  font-size: 16px;
  text-transform: uppercase;
  color: #fff0e6;
  font-weight: 600;
  letter-spacing: 1px;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  border: 1px solid #0d0925;
  background: linear-gradient(147deg, #2a72dd 0%, #4461f2 74%);
}
.content button:hover {
  background: linear-gradient(147deg, #4461f2 0%, #5a92e6 74%);
}
.sliders {
  position: absolute;
  bottom: 25px;
  left: 65%;
  transform: translateX(-50%);
  z-index: 12;
}
#imgTap:checked ~ .sliders {
  display: none;
}
.sliders .tap {
  position: relative;
  height: 10px;
  width: 50px;
  background: #d9d9d9;
  border-radius: 5px;
  display: inline-flex;
  margin: 0 3px;
  cursor: pointer;
}
.sliders .tap:hover {
  background: #cccccc;
}
.sliders .tap:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  height: 100%;
  width: -100%;
  background: linear-gradient(147deg, #2a72dd 0%, #4461f2 74%);
  border-radius: 10px;
  transform: scaleX(0);
  transition: transform 0.6s;
  transform-origin: left;
}
input[type="radio"],
input[type="checkbox"] {
  display: none;
}
#tap-1:checked ~ .sliders .tap-1:before,
#tap-2:checked ~ .sliders .tap-2:before,
#tap-3:checked ~ .sliders .tap-3:before {
  transform: scaleX(1);
  width: 100%;
}

@media screen and (max-width: 851px) {
  .blog-card {
    width: 90%;
    height: 500px;
  }
  .sliders {
    position: absolute;
    bottom: 25px;
    left: 50%; /* Center the slider container horizontally */
    transform: translateX(-50%);
    z-index: 12;
  }

  .sliders .tap {
    margin: 0 3px;
  }
  .inner-part {
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0px;
  }

  .inner-part .content {
    width: 100%;
    margin-left: 0;
    text-align: center;
  }

  .inner-part .img {
    box-shadow: none;
  }
}
@media screen and (max-width: 571px) {
  .sliders {
    position: absolute;
    bottom: 5px;
    left: 50%; /* Center the slider container horizontally */
    transform: translateX(-50%);
    z-index: 12;
  }

  .sliders .tap {
    margin: 0 3px;
  }
}
@media screen and (max-width: 393px) {
  .sliders {
    position: absolute;
    width: 100%;
    left: 75%; /* Center the slider container horizontally */
    transform: translateX(-50%);
    z-index: 12;
  }

  .sliders .tap {
    margin: 0 3px;
  }
}
@media screen and (max-width: 321px) {
  .sliders {
    position: absolute;
    width: 100%;
    left: 75%; /* Center the slider container horizontally */
    transform: translateX(-50%);
    bottom: 2px;
    z-index: 12;
  }

  .sliders .tap {
    margin: 0 3px;
  }
  .content .title {
    font-size: 20px;
    font-weight: 700;
    color: #0d0925;
    margin-bottom: 20px;
  }
  .content .text {
    color: #4e4a67;
    font-size: 10px;
    margin-bottom: 30px;
    line-height: 1.5em;
    text-align: justify;
  }
}

/* artikel */
.artikel {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f5f5f5;
  overflow: hidden;
}

.teks_artikel {
  margin-left: 200px;
}
.wrapper .outer {
  display: flex;
  align-items: center;
  justify-content: end;
  margin-right: 100px;
}
.wrapper .cards {
  background: #fff;
  width: 430px;
  display: flex;
  align-items: center;
  padding: 20px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  justify-content: space-between;
  border-radius: 100px 20px 20px 100px;
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
  animation: animate 15s linear infinite;
  animation-delay: calc(3s * var(--delay));
}
.outer:hover .cards {
  animation-play-state: paused;
}
.wrapper .cards:last-child {
  animation-delay: calc(-3s * var(--delay));
}
@keyframes animate {
  0% {
    opacity: 0;
    transform: translateY(100%) scale(0.5);
  }
  5%,
  20% {
    opacity: 0.4;
    transform: translateY(100%) scale(0.7);
  }
  25%,
  40% {
    opacity: 1;
    pointer-events: auto;
    transform: translateY(0%) scale(1);
  }
  45%,
  60% {
    opacity: 0.4;
    transform: translateY(-100%) scale(0.7);
  }
  65%,
  100% {
    opacity: 0;
    transform: translateY(-100%) scale(0.5);
  }
}
.cards .contents {
  display: flex;
  align-items: center;
}
.wrapper .cards .img {
  height: 90px;
  width: 90px;
  position: absolute;
  left: -5px;
  background: #fff;
  border-radius: 50%;
  padding: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.cards .img img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.cards .details {
  margin-left: 80px;
}
.details span {
  font-weight: 600;
  font-size: 18px;
}
.cards a {
  text-decoration: none;
  padding: 7px 18px;
  border-radius: 25px;
  color: #fff;
  background: linear-gradient(to bottom, #bea2e7 0%, #86b7e7 100%);
  transition: all 0.3s ease;
}
.cards a:hover {
  transform: scale(0.94);
}
@media screen and (max-width: 1211px) {
  .wrapper .outer {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 200px;
    margin-left: 100px;
  }
  .teks_artikel {
    margin-bottom: 400px;
    text-align: center;
    position: absolute;
    right: 20%;
  }
  .teks_artikel h1,
  .teks_artikel p,
  .teks_artikel button {
    margin: 10px 0;
  }
}
@media screen and (max-width: 490px) {
  .wrapper .cards {
    width: 350px;
    margin-top: 50px;
  }
  .teks_artikel {
    text-align: center;
    position: absolute;
    right: 18%;
  }
  .teks_artikel h1,
  .teks_artikel p,
  .teks_artikel button {
    margin: 10px 0;
  }
}
@media screen and (max-width: 395px) {
  .teks_artikel {
    text-align: center;
    position: absolute;
    right: 13%;
  }
  .teks_artikel h1,
  .teks_artikel p,
  .teks_artikel button {
    margin: 10px 0;
  }
}

@media screen and (max-width: 321px) {
  .teks_artikel {
    text-align: center;
    position: absolute;
    right: 8%;
    top: 950%;
  }

  .teks_artikel h1,
  .teks_artikel p,
  .teks_artikel button {
    margin: 10px 0;
  }

  .artikel .wrapper {
    display: none;
  }
}

/* produk */
.section-products {
  padding: 80px 0 54px;
  background-color: #ddf2fd;
}

.section-products .header {
  margin-bottom: 50px;
  font-size: 2.2rem;
  font-weight: 400;
  color: #444444;
}

.section-products .single-product {
  margin-bottom: 26px;
}

.section-products .single-product .part-1 {
  position: relative;
  height: 290px;
  max-height: 290px;
  margin-bottom: 20px;
  overflow: hidden;
  z-index: 1;
}

.section-products .single-product .part-1::before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
  transform: scale(1.2, 1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
  background: url(assets/christine-sandu-jwWtZrm67VI-unsplash.jpg) no-repeat center;
  background-size: cover;
  transition: all 0.3s;
}

.section-products #product-2 .part-1::before {
  background: url(assets/freestocks-nss2eRzQwgw-unsplash.jpg) no-repeat center;
  background-size: cover;
}

.section-products #product-3 .part-1::before {
  background: url(assets/hakan-nural-wnSEwHMhxho-unsplash.jpg) no-repeat center;
  background-size: cover;
}

.section-products #product-4 .part-1::before {
  background: url(assets/michele-blackwell-przZDqzZKpk-unsplash.jpg) no-repeat center;
  background-size: cover;
}
.section-products #product-5 .part-1::before {
  background: url(assets/bruno-guerrero-FDvArkoGyvI-unsplash.jpg) no-repeat center;
  background-size: cover;
}
.section-products #product-6 .part-1::before {
  background: url(assets/pmv-chamara-IXkF7CyMo10-unsplash.jpg) no-repeat center;
  background-size: cover;
}
.section-products #product-7 .part-1::before {
  background: url(assets/lance-reis-Xql9FpeQPCc-unsplash.jpg) no-repeat center;
  background-size: cover;
}
.section-products #product-8 .part-1::before {
  background: url(assets/engin-akyurt-52mrdjVBwiM-unsplash.jpg) no-repeat center;
  background-size: cover;
}

.section-products .single-product .part-1 ul {
  position: absolute;
  bottom: -41px;
  left: 20px;
  margin: 0;
  padding: 0;
  list-style: none;
  opacity: 0;
  transition: bottom 0.5s, opacity 0.5s;
  z-index: 1;
}

.section-products .single-product:hover .part-1 ul {
  bottom: 30px;
  opacity: 1;
  z-index: 1;
}

.section-products .single-product .part-1 ul li {
  display: inline-block;
  margin-right: 4px;
  z-index: 1;
}

.section-products .single-product .part-1 ul li a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  background-color: #ffffff;
  color: #444444;
  text-align: center;
  box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
  transition: color 0.2s;
  z-index: 1;
}
.section-products .single-product .part-2 .product-title {
  font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
  display: inline-block;
  font-size: 1rem;
}

/* login */
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

.box-area {
  width: 930px;
}

.right-box {
  padding: 40px 30px 40px 40px;
}
::placeholder {
  font-size: 16px;
}
.rounded-4 {
  border-radius: 20px;
}
.rounded-5 {
  border-radius: 30px;
}

@media only screen and (max-width: 768px) {
  .box-area {
    margin: 0 10px;
  }
  .left-box {
    padding-top: 115px;
    height: 200px;
    overflow: hidden;
  }
  .right-box {
    padding: 20px;
  }
}
/* footer */
footer {
  background: #060e25;
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
  background: #bdf2ff;
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
                <img src="assets/Logo.png" alt="" width="30" height="24">
            </a>
            <a class="navbar-brand" href="#">Healthy Habbit</a>
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
                        <a class="nav-link" href="#forum" style="font-weight: bold;">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tips" style="font-weight: bold;">Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tantangan" style="font-weight: bold;">Tantangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artikel" style="font-weight: bold;">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk" style="font-weight: bold;">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login" style="font-weight: bold;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html"><i class="bi bi-person"></i></a>
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
                    <a class="nav-link" href="#login" style="font-weight: bold;">
                        <button type="button" class="btn btn-primary" autocomplete="off">Mulai
                            Bergabung</button>
                    </a>
                    
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
                                    <img src="assets/img.png" class="img-fluid" alt="...">
                                </div>
                                <div class="container px-5 my-5 w-75">
                                    <img src="assets/logo2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- forum -->
    <div class="forum" id="forum">
        <div class="wrapper">
            <h1 style="text-align: center;">Forum</h1>

            <i id="left" class="bi bi-caret-left-fill" style="z-index: 999;"></i>
            <ul class="carousel">
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtyDiet</h2>
                    <p style="text-align: center; padding: 10px;">Mari Bergabung Forum ini Untuk Gaya Diet yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtyLifestyle</h2>
                    <p style="text-align: center;">Mari Bergabung Forum ini Untuk Gaya Hidup yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtySport</h2>
                    <p style="text-align: center;">Mari Bergabung Forum ini Untuk Gaya Olahraga yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtyBulk</h2>
                    <p style="text-align: center;">Mari Bergabung Forum ini Untuk Menaikkan BB yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtyExercise</h2>
                    <p style="text-align: center;">Mari Bergabung Forum ini Untuk Gaya Latihan yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
                <li class="card">
                    <div class="img"><img src="assets/bg-sa-august 1.png" alt="img" draggable="false"></div>
                    <h2 class="fw-bolder">HealtySleep</h2>
                    <p style="text-align: center;">Mari Bergabung Forum ini Untuk Kualitas Tidur yang Baik</p>
                    <a href="forum.html">
                        <button type="button" class="btn btn-primary">Lihat Forum</button>
                    </a>
                </li>
            </ul>
            <i id="right" class="bi bi-caret-right-fill"></i>
        </div>
    </div>

    <!-- tips -->
    <div class="tips_sehat" id="tips" style="background-color: #DAF0F7; ">
        <div class="container py-5 ">
            <h1 class="text-center" style="margin-top: 20px;">Tips Sehat</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Tips Tidur</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Tips Makan</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Tips Renang</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Tips Jogging</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Tips Diet</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded rounded-5">
                        <img src="assets/Rounded Rectangle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title ps-1">Headline</h5>
                            <p class="card-text ps-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Laboriosam
                                dignissimos accusantium amet similique velit iste.</p>
                        </div>
                        <div class="mb-5 d-flex justify-content-start">
                            <a href="tips.html">
                                <button class="btn btn-primary" style="margin-left: 20px;">Lihat Seluruh Tips</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- tantangan -->
    <div class="tantangan" id="tantangan">
        <div class="blog-card">
            <input type="radio" name="select" id="tap-1" checked>
            <input type="radio" name="select" id="tap-2">
            <input type="radio" name="select" id="tap-3">
            <input type="checkbox" id="imgTap">
            <div class="sliders">
                <label for="tap-1" class="tap tap-1"></label>
                <label for="tap-2" class="tap tap-2"></label>
                <label for="tap-3" class="tap tap-3"></label>
            </div>
            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-1" src="assets/bradley-dunn-ACbu5AY5Tvk-unsplash.jpg">
                </label>
                <div class="content content-1">
                    <span>Tantangan Populer</span>
                    <div class="title">Tantangan Hidup Seperti Aktor</div>
                    <div class="text">Ayo, Cobalah hidup sehari seperti hidup sehat yang dijalani oleh para aktor</div>
                    <a href="tantangan.html">
                        <button>Lihat</button>
                    </a>
                </div>
            </div>
            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-2" src="assets/lau-keith-dcZsxUAAJXs-unsplash.jpg">
                </label>
                <div class="content content-2">
                    <span>Tantangan Populer</span>
                    <div class="title">Tantangan Tanpa Gadget</div>
                    <div class="text">Ayo, Cobalah tantangan ini jauhkan diri kamu dari gadget.</div>
                    <a href="tantangan.html">
                        <button>Lihat</button>
                    </a>
                </div>
            </div>
            <div class="inner-part">
                <label for="imgTap" class="img">
                    <img class="img-3" src="assets/andy-hu-B85A8-GHjoI-unsplash.jpg">
                </label>
                <div class="content content-3">
                    <span>Tantangan Populer</span>
                    <div class="title">Olahraga Intens</div>
                    <div class="text">Ayo, Cobalah tantangan olahraga rutin dari pagi sampai malam.</div>
                    <a href="tantangan.html">
                        <button>Lihat</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- artikel -->
    <div class="artikel" id="artikel">
        <div class="teks_artikel">
            <h1 class="display-2 fw-bolder">Artikel HealthyHabbit</h1>
            <p>Jangan Sampai Ketinggalan Berita Tentang Kesehatan</p>
            <a href="artikel.html">
                <button type="button" class="btn btn-primary">Baca Artikel</button>
            </a>
        </div>
        <div class="wrapper">
            <div class="outer">
                <div class="cards" style="--delay:-1;">
                    <div class="contents">
                        <div class="img"><img src="assets/andy-hu-B85A8-GHjoI-unsplash.jpg" alt=""></div>
                        <div class="details">
                            <span class="name">Olahraga Sehat</span>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                    <a href="#">Artikel</a>
                </div>
                <div class="cards" style="--delay:0;">
                    <div class="contents">
                        <div class="img"><img src="assets/jackson-hendry-eodA_8CTOFo-unsplash.jpg" alt=""></div>
                        <div class="details">
                            <span class="name">Waktu Tidur</span>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                    <a href="#">Artikel</a>
                </div>
                <div class="cards" style="--delay:1;">
                    <div class="contents">
                        <div class="img"><img src="assets/fusion-medical-animation-rnr8D3FNUNY-unsplash.jpg" alt="">
                        </div>
                        <div class="details">
                            <span class="name">Kasus Covid</span>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                    <a href="#">Artikel</a>
                </div>
                <div class="cards" style="--delay:2;">
                    <div class="contents">
                        <div class="img"><img src="assets/jamie-matocinos-WAYY2WoGb8w-unsplash.jpg" alt=""></div>
                        <div class="details">
                            <span class="name">Makanan Diet</span>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                    <a href="#">Artikel</a>
                </div>
                <div class="cards" style="--delay:2;">
                    <div class="contents">
                        <div class="img"><img src="assets/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt=""></div>
                        <div class="details">
                            <span class="name">Teknologi Medis</span>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                    <a href="#">Artikel</a>
                </div>
            </div>
        </div>
    </div>

    <!-- produk -->
    <section class="section-products" id="produk">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h2>Produk Rekomendasi<br>HealthyHabbit</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Suplemen Vitamin C</h3>
                            <h4 class="product-old-price">Rp.30.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-2" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Suplemen Vitamin D</h3>
                            <h4 class="product-price">Rp.90.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-3" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Suplemen Anti Covid</h3>
                            <h4 class="product-price">Rp.2.000.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-4" class="single-product">
                        <div class="part-1">

                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Minyak Ikan</h3>
                            <h4 class="product-price">Rp.80.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-5" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Pil Kalsium</h3>
                            <h4 class="product-price">Rp.50.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-6" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Penumbuh Rambut</h3>
                            <h4 class="product-price">Rp.599.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-7" class="single-product">
                        <div class="part-1">
                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Obat Diare</h3>
                            <h4 class="product-price">Rp.50.000</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product-8" class="single-product">
                        <div class="part-1">

                            <ul>
                                <li><a href="#"><i class="bi bi-share"></i></a></li>
                                <li><a href="#"><i class="bi bi-chat"></i></a></li>
                                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                                <li><a href="#"><i class="bi bi-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Minuman Vitamin C</h3>
                            <h4 class="product-price">Rp.20.000</h4>
                        </div>
                    </div>
                    <div>
                        <a href="produk.html">
                            <button type="button" class="btn btn-primary">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- login -->
    <div class="login" style="background-color: #C8D9F0;" id="login">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                    style="background: #103cbe;">
                    <div class="featured-image mb-3">
                        <img src="assets/LOGO WHITE.png" class="img-fluid" style="width: 250px;">
                    </div>
                    <p class="text-white fs-2"
                        style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Mari Bergabung</p>
                    <small class="text-white text-wrap text-center"
                        style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Ayo! Hidup Sehat dengan
                        HealthyHabbit</small>
                </div>
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4 ps-3">
                            <h2>Selamat Datang Kembali!</h2>
                            <p>Kami Sudah Menantikan Kedatangan Anda</p>
                        </div>
                        <div class="input-group mb-3">


                            <input type="text" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Ingat
                                        Saya</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Lupa Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Masuk</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="assets/pngwing.com (15).png"
                                    style="width:20px" class="me-2"><small>Masuk Menggunakan Google</small></button>
                        </div>
                        <div class="row ps-4">
                            <small>Tidak Punya Akun? <a href="#">Registrasi</a></small>
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
                        <img src="assets/Logo putih.png" class="w-75" alt="">
                        <p>Health Habbit ada untuk membantu anda dalam melaksanakan hidup sehat. Health Habbit
                            adalah
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
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
            const wrapper = document.querySelector(".wrapper");
    const carousel = document.querySelector(".carousel");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const carouselChildrens = [...carousel.children];

    let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");

    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
        });
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }

    const dragging = (e) => {
        if(!isDragging) return;
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    const infiniteScroll = () => {
        if(carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }

        else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }

        clearTimeout(timeoutId);
        if(!wrapper.matches(":hover")) autoPlay();
    }

    const autoPlay = () => {
        if(window.innerWidth < 800 || !isAutoPlay) return;
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
    autoPlay();

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    
    </script>
</body>

</html>