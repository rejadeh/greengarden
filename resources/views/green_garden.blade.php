<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="src: url('Fonts/Poppins/Poppins-Regular.ttf');" />
</head>
<style>
    .nav {
        background-color: rgba(255, 255, 255, 0);
    }

    /* BACKGROUND + OVERLAY */
    .bg-image {
        position: relative;
        height: 120vh;
        background-image: url("{{ asset('Images/banner-1.jpg') }}");
        background-size: cover;
        background-position: center;
    }

    .bg-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 1;
    }

    .navbar {
        position: relative;
        z-index: 2;
    }

    .hh1 {
        position: relative;
        z-index: 3;
        color: white;
    }

    .hero-div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        margin-top: 20%;
        position: relative;
        z-index: 3;
    }

    .hero-div p {
        position: relative;
        z-index: 2;
        color: white;
    }

    .bg-image2 {
        position: relative;
    }

    .bg-image2::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(44, 51, 92, 0.45);
        /* Ubah kegelapan di sini */
        z-index: 1;
    }

    .bg-image2>* {
        position: relative;
        z-index: 2;
        /* teks & gambar tetap di atas overlay */
    }


    .bg-image3::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.50);
        /* Ubah kegelapan di sini */
        z-index: 1;
    }

    .bg-image3>* {
        position: relative;
        z-index: 2;
        /* teks & gambar tetap di atas overlay */
    }

    .gallery-card {
        background: #fff;
        justify-content: center;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0, 1);
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bulat {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);

    }

    .bulat.active {
        background: #ffffff;
    }

@font-face{
font-family:"poppins";
src:url("{{ asset('Fonts/Poppins/Poppins-Light.ttf') }}") format("truetype");
}

@font-face{
font-family:"sign";
src:url("{{ asset('Fonts/SignPainter-HouseScript-Regular/SignPainter-HouseScript-Regular.ttf') }}") format("truetype");
}
</style>

<body>
    <div class="bg-image" style="background-image: url('/Images/banner-1.jpg')">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('Images/GG-w200.png') }}" alt="Bootstrap" class="" width="300" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mt-3" style="gap: 10px">
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;" aria-current="page"
                                href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;" href="#">SERVICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;"
                                aria-disabled="true">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;" aria-disabled="true">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fs-5 text-light" style="font-weight: 500;"
                                aria-disabled="true">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero-div">
            <h1 class="hh1" style="font-family: sign; font-size: 90px">
                Green View For Good Live
            </h1>
            <p style="font-size: 20px">prepare your garden with our profesional</p>

            <!-- button tengah navbar -->
            <button type="button" class="btn text-white fw-normal mt-4 px-4 py-2 ms-5 me-5 mb-4"
                style="
            background-color: #26b964;
            border-radius: 5px;
            position: relative;
            z-index: 5;
            font-size: 21px;
          ">
                Hire our profesional Now <i class="bi bi-arrow-right "></i>
            </button>
        </div>
    </div>
    <!-- end nav bg -->

    <h1 class="text-center mt-4" style="font-family: sign;">Pricing Guide </h1>
    <p class="text-center">
        Choose your pricing plan and we will make your garden beauty
    </p>

    <!-- card -->
    <div class="container my-5 d-flex gap-5 justify-content-center" style="height: 70vh">
        <!-- c1 -->
        <div class="card text-center shadow-lg"
            style="
          background-color: #1c2f3c;
          border: none;
          border-radius: 5px;
          width: 300px;
        ">
            <h2 class="text-white p-2 mt-1" style="font-family: sign; font-size: 50px">
                Basic
            </h2>

            <div class="" style="width: 100%; height: 3px; background-color: #26b964"></div>

            <h1 class="text-white  mt-3 " style="font-family: Poppins; font-size: 60px;">
                <sup
                    style="
        
              font-size: 27px;
              transform: translateY(-15px);
              display: inline-block;
            ">$</sup>10<sup
                    style="font-size: 21px; transform: translateY(-10px);display: inline-block;">68</sup>
            </h1>

            <div class="text-white-50 mt-3 text-center d-flex flex-column gap-1">
                <span>Duis Nulla Prodesset</span>
                <span>Movet instructor et mea</span>
                <span>Eam ut mollis menandri senserit</span>
                <span>ex fugit consul facete quo</span>
                <span>gloriatur scripserit id vis</span>
                <span>Ei duo meis tation fastidii</span>
            </div>

            <button class="btn text-white fw-normal mt-auto px-4 py-2 ms-5 me-5 mb-4"
                style="background-color: #26b964; border-radius: 5px; font-size: 21px;">
                Contact Now <i class="bi bi-arrow-right fw-bold"></i>
            </button>
        </div>
        <!-- c1 -->

        <!-- c2 -->
        <div class="card text-center shadow-lg"
            style="
          background-color: #1c2f3c;
          border: none;
          border-radius: 5px;
          width: 300px;
        ">
            <h2 class="text-white p-2 mt-1" style="font-family: sign; font-size: 50px">
                Standart
            </h2>

            <div class="" style="width: 100%; height: 3px; background-color: #26b964"></div>

            <h1 class="text-white  mt-3 " style="font-family: Poppins; font-size: 60px;">
                <sup
                    style="
        
              font-size: 27px;
              transform: translateY(-15px);
              display: inline-block;
            ">$</sup>23<sup
                    style="font-size: 21px; transform: translateY(-10px);display: inline-block;">83</sup>
            </h1>

            <div class="text-white-50 mt-3 text-center d-flex flex-column gap-1">
                <span>Duis Nulla Prodesset</span>
                <span>Movet instructor et mea</span>
                <span>Eam ut mollis menandri senserit</span>
                <span>ex fugit consul facete quo</span>
                <span>gloriatur scripserit id vis</span>
                <span>Ei duo meis tation fastidii</span>
            </div>

            <button class="btn text-white fw-normal mt-auto px-4 py-2 ms-5 me-5 mb-4"
                style="background-color: #26b964; border-radius: 5px; font-size: 21px;">
                Contact Now <i class="bi bi-arrow-right fw-bold"></i>
            </button>
        </div>
        <!-- c2 -->

        <!-- c3 -->
        <div class="card text-center shadow-lg"
            style="
          background-color: #1c2f3c;
          border: none;
          border-radius: 5px;
          width: 300px;
        ">
            <h2 class="text-white p-2 mt-1" style="font-family: sign; font-size: 50px">
                Premium
            </h2>

            <div class="" style="width: 100%; height: 3px; background-color: #26b964"></div>

            <h1 class="text-white  mt-3 " style="font-family: Poppins; font-size: 60px;">
                <sup
                    style="
        
              font-size: 27px;
              transform: translateY(-15px);
              display: inline-block;
              left: 5px;
            ">$</sup>47<sup
                    style="font-size: 21px; transform: translateY(-10px);display: inline-block;">98</sup>
            </h1>

            <div class="text-white-50 mt-3 text-center d-flex flex-column gap-1">
                <span>Duis Nulla Prodesset</span>
                <span>Movet instructor et mea</span>
                <span>Eam ut mollis menandri senserit</span>
                <span>ex fugit consul facete quo</span>
                <span>gloriatur scripserit id vis</span>
                <span>Ei duo meis tation fastidii</span>
            </div>

            <button class="btn text-white fw-normal mt-auto px-4 py-2 ms-5 me-5 mb-4"
                style="background-color: #26b964; border-radius: 5px; font-size: 21px;">
                Contact Now <i class="bi bi-arrow-right fw-bold"></i>
            </button>
        </div>
        <!-- c3 -->
    </div>

    <br />
    <br />

    <!--  -->
    <div>
        <div class="bg-image2"
            style="
          background-image: url('{{ asset('Images/pixel1.jpeg') }}');
          background-size: cover;
          background-position: center;
          overflow: visible;
          height: 53vh;
          position: relative;
        ">
            <div class="overlay">
                <div class="bg text-md-start mt-5">

                    <div class="row mt-3">

                        <div class="col-md-5 col-lg-5 col-xl-6 mx-auto mb-4 mt-5">

                            <h2 class=" fw-bold text-light" style="font-family: sign; font-size: 45px">
                                Lets make your garder awesome!
                            </h2>

                            <p class="mt-2 text-light">
                                With our Profesional we make wonderfull garden in your yard
                            </p>

                            <button class="btn text-white fw-normal mt-4 px-2 py-2 w-50 fs-5"
                                style="background-color: #26b964; border-radius: 10px; font-size: 21px; ">
                                Hire Our Professional Now <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>

                        <div class="col-md-4 mx-auto mb-md-0 position-relative">
                            <img src="{{ asset('Images/worker2.png') }}" alt="" class="position-absolute"
                                style="bottom: -111px; left: 1vh; width: 105%; height: auto" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- bawah -->
        <div>
            <footer class="text-center text-lg-start text-white" style="background-color: #1c2331; height: 66vh">
                <div class="d-flex flex-column mb-2 justify-content-center align-items-center">
                    <h1 class="mt-3" style="font-family: sign;">Recent Project</h1>
                    <p>We serve with integrity and detail</p>
                </div>

                <!-- card -->
                <div class="container p-3">
                    <div class="row g-4">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery-card">
                                <img src="{{ asset('Images/taman_bunga.jpeg') }}" alt="" class="gallery-img" />
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery-card">
                                <img src="{{ asset('Images/ruangan.jpeg') }}" alt="" class="gallery-img" />
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery-card">
                                <img src="{{ asset('Images/taman.jpeg') }}" alt="" class="gallery-img" />
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="gallery-card">
                                <img src="{{ asset('Images/pagar.jpeg') }}" alt="" class="gallery-img" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn text-white fw-normal mt-4 px-2 py-2 fs-5"
                            style="
                  background-color: #26b964;
                  border-radius: 10px;
                  width: 200px;
                  font-size: 21px;
                ">
                            More Project <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </footer>
            <!--  -->
            <div>
                <div class="bg-image3"
                    style="
              background-image: url('{{ asset('Images/bg-client.jpg') }}');
              background-size: cover;
              background-position: center;
              height: 55vh;
              position: relative;
            ">
                    <div class="container pt-3">
                        <h1 class="text-center text-light" style="font-family: sign; font-size: 50px">
                            Our Best Boss
                        </h1>
                        <p class="text-center text-light mb-5">
                            Our client is our best boss who believes in us
                        </p>


                        <div class="d-flex align-items-start gap-3">
                            <!-- Foto -->
                            <img src="{{ asset('Images/women.jpeg') }}" class="rounded-circle"
                                style="width: 190px; height: 190px; object-fit: cover" alt="" />


                            <div>

                                <h4 class="fw-bold text-light mb-2">JEAN FOX JR</h4>


                                <div class="bg-light bg-opacity-25 text-light p-4 rounded" style="max-width: 820px">
                                    <p class="mb-0 small">
                                        Ei duo molestiae fastidii, dicit sonet timeam eum at, has
                                        vitae inciderint in. Movet instructior at mea, ad duo
                                        harum detracto persecuti. Sit omittam intellegam ad, vim
                                        no duis nulla prodesset, ad eos tale aliquip. Eam no debet
                                        maiorum commune, noluisse gloriatur scripserit id vis. Eam
                                        ut mollis mandamus scripserit, ius error aeterno
                                        maiestatis ex, pri cu minim movet blandit, ex fugit consul
                                        facete quo.
                                    </p>
                                </div>
                                <div class="d-flex justify-content-end gap-2 mt-3">
                                    <span class="bulat active"></span>
                                    <span class="bulat"></span>
                                    <span class="bulat"></span>
                                    <span class="bulat"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>

</body>
<script src="{{ asset('asset/bootstrap-5.3.7-dist/js/bootstrap.min.js') }}"></script>

</html>
