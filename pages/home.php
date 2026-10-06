<?php
// pages/home.php
// Homepage CV Digital
?>

<div
    id="heroCarousel"
    class="carousel slide"
    data-ride="carousel"
    data-interval="5000"
>

    <!-- Indicator -->
    <ol class="carousel-indicators">

        <li
            data-target="#heroCarousel"
            data-slide-to="0"
            class="active"
        ></li>

        <li
            data-target="#heroCarousel"
            data-slide-to="1"
        ></li>

        <li
            data-target="#heroCarousel"
            data-slide-to="2"
        ></li>

    </ol>


    <!-- Carousel -->
    <div class="carousel-inner">


        <!-- ========================= -->
        <!-- SLIDE 1 -->
        <!-- ========================= -->

        <div class="carousel-item active">

            <div
                style="
                    height: 90vh;
                    background: url('assets/images/slider1.jpg')
                    center center / cover no-repeat;
                    position: relative;
                "
            >

                <!-- Overlay -->
                <div
                    style="
                        position: absolute;
                        inset: 0;
                        background: rgba(0,0,0,.55);
                    "
                ></div>


                <!-- Content -->
                <div
                    class="
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        text-center
                        text-white
                        h-100
                        px-3
                    "
                    style="position: relative;"
                >

                    <h1 class="display-3 font-weight-bold">

                        Selamat Datang di
                        <br>
                        CV Digital

                    </h1>

                    <p class="lead">

                        Bangun profil profesionalmu
                        dalam satu platform digital.

                    </p>

                    <a
                        href="index.php?halaman=registerpeserta"
                        class="btn btn-primary btn-lg mt-2"
                    >

                        <i class="fas fa-user-plus mr-2"></i>

                        Registrasi Peserta

                    </a>

                </div>

            </div>

        </div>


        <!-- ========================= -->
        <!-- SLIDE 2 -->
        <!-- ========================= -->

        <div class="carousel-item">

            <div
                style="
                    height: 90vh;
                    background: url('assets/images/slider2.jpg')
                    center center / cover no-repeat;
                    position: relative;
                "
            >

                <!-- Overlay -->
                <div
                    style="
                        position: absolute;
                        inset: 0;
                        background: rgba(0,0,0,.55);
                    "
                ></div>


                <!-- Content -->
                <div
                    class="
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        text-center
                        text-white
                        h-100
                        px-3
                    "
                    style="position: relative;"
                >

                    <h1 class="display-3 font-weight-bold">

                        Tampilkan Potensi Terbaikmu

                    </h1>

                    <p class="lead">

                        Lengkapi biodata, pendidikan,
                        dan keahlianmu.

                    </p>

                    <a
                        href="index.php?halaman=registerpeserta"
                        class="btn btn-primary btn-lg mt-2"
                    >

                        Mulai Sekarang

                        <i class="fas fa-arrow-right ml-2"></i>

                    </a>

                </div>

            </div>

        </div>


        <!-- ========================= -->
        <!-- SLIDE 3 -->
        <!-- ========================= -->

        <div class="carousel-item">

            <div
                style="
                    height: 90vh;
                    background: url('assets/images/slider3.jpg')
                    center center / cover no-repeat;
                    position: relative;
                "
            >

                <!-- Overlay -->
                <div
                    style="
                        position: absolute;
                        inset: 0;
                        background: rgba(0,0,0,.55);
                    "
                ></div>


                <!-- Content -->
                <div
                    class="
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        text-center
                        text-white
                        h-100
                        px-3
                    "
                    style="position: relative;"
                >

                    <h1 class="display-3 font-weight-bold">

                        Buat CV Digitalmu

                    </h1>

                    <p class="lead">

                        Satu CV untuk menampilkan
                        identitas dan kemampuan terbaikmu.

                    </p>

                    <a
                        href="index.php?halaman=registerpeserta"
                        class="btn btn-success btn-lg mt-2"
                    >

                        <i class="fas fa-id-card mr-2"></i>

                        Buat CV Sekarang

                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- Tombol Previous -->
    <a
        class="carousel-control-prev"
        href="#heroCarousel"
        role="button"
        data-slide="prev"
    >

        <span
            class="carousel-control-prev-icon"
            aria-hidden="true"
        ></span>

        <span class="sr-only">
            Previous
        </span>

    </a>


    <!-- Tombol Next -->
    <a
        class="carousel-control-next"
        href="#heroCarousel"
        role="button"
        data-slide="next"
    >

        <span
            class="carousel-control-next-icon"
            aria-hidden="true"
        ></span>

        <span class="sr-only">
            Next
        </span>

    </a>

</div>