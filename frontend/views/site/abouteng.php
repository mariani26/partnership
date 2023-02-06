<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'AboutEng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div role="main" class="main">
    <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-5 mb-5">
                    <h5 class="text-primary font-weight-bold mb-1">PARTNERSHIP UNP</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">The Best Partnership UNP<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ms-2">ever</span></span></h1>
                    <p class="custom-font-size-1">Partnership UNP is one of the website that was built to collaborate<a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="120" class="text-color-light font-weight-semibold text-1 d-block text-decoration-none">VIEW MORE <i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>

                    <p>
                        <?php
                        if (Yii::$app->user->isGuest) {
                            echo Html::tag('div', Html::a('Join Us', ['signupeng'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]));
                        ?>
                        <?php
                        } else {
                        ?>

                        <?php
                        }
                        ?><button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                    </p>

                    <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="#popup-content-1" data-trigger-play-video="#popupPresentation">
                        <div class="video-open-icon"></div>See How It Works
                    </a>

                    <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                        <div class="ratio ratio-4x3">
                            <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                                <!-- <h2><span>Video Profil Universitas</span></h2> -->

                                <div class="content">

                                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                        <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="250" src="https://www.youtube.com/embed/ERMkw9qm0S0"></iframe></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                        <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                            <!-- <h2><span>Video Profil Universitas</span></h2> -->

                            <div class="content">

                                <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                    <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="250" src="https://www.youtube.com/embed/ERMkw9qm0S0"></iframe></p>
                                </div>

                            </div>
                        </div>
                        <!-- <a href="<?= Yii::$app->getHomeUrl(); ?>" class="position-absolute top-50pct left-50pct transform3dxy-n50 bg-light rounded-circle d-flex align-items-center justify-content-center text-decoration-none bg-color-hover-primary text-color-hover-light play-button-lg pulseAnim pulseAnimAnimated" data-trigger-play-video="#presentation" data-trigger-play-video-remove="yes">
                            <i class="fas fa-play text-5"></i>
                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
        <div class="container pb-5" style="min-height: 1000px;">


            <div class="row mb-10 pb-lg-3 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0">About Partnership</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">Universitas<span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2"> Negeri Padang</span></p>
                    <!-- <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5">Universitas Negeri Padang (UNP) merupakan sebuah perguruan tinggi negeri yang berlokasi di Kota Padang, Sumatera Barat. Universitas Negeri Padang didirikan pada tanggal 23 Oktober 1954 dengan kampus utama yang terletak di Jl. Prof. Dr. Hamka, Air Tawar, Kota Padang. Sedangkan kampus yang lain bertempat di Ulu Gadut, Limau Manis, Bukittinggi, dan Kabupaten Padang Pariaman. UNP terdiri dari 9 fakultas dan 1 Pascasarjana. Universitas Negeri Padang pernah menjadi satu dari 28 perguruan tinggi negeri lain yang dinobatkan oleh Ditjen Dikti pada tahun 2011 sebagai 50 perguruan tinggi paling menjanjikan di Indonesia. Selain itu UNP juga telah memperoleh atatus akreditasi A oleh BAN PT pada tahun 2016. <br> <br> “Alam Takambang Jadi Guru", menjadi motto Universita Negeri Padang. Motto tersebut memiliki makna bahwa sivitas akademika Universitas Negeri Padang (UNP) selalu responsif dan proaktif terhadap lingkungannya. Salah satu bukti implementasi UNP terhadap motto tersebut adalah pencapaian kampus ini menjadi 50 Perguruan Tinggi Negeri (PTN) terbaik Indonesia versi Webometrics pada tahun 2022.</p> -->
                </div>
                <!-- <div class="col-sm-6 col-lg-4 offset-lg-2 counter mb-5 mb-md-0">
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                            <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="80" data-append="+" data-plugin-options="{'accY': 50}">0</h3>
                            <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Included Demos</label>
                            <p class="text-color-grey font-weight-semibold pb-1 mb-2">600+ HTML FILES</p>
                            <p class="mb-0"><a href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="120" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none">VIEW DEMOS <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 counter divider-left-border">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">
                            <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="40" data-append="K+" data-plugin-options="{'accY': 50}">0</h3>
                            <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Websites Using Porto HTML</label>
                            <p class="text-color-grey font-weight-semibold pb-1 mb-2">100K+ IN ALL VERSIONS</p>
                            <p class="mb-0"><a href="https://themeforest.net/checkout/from_item/4106987?license=regular&support=bundle_6month&ref=Okler" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none" target="_blank">BUILD WEBSITE <i class="fas fa-long-arrow-alt-right ms-2 text-4 mb-0"></i></a></p>
                        </div>
                    </div> -->
            </div>
            <div class="intro row align-items-center justify-content-center justify-content-md-start">
                <div class="col-3 pe-0 ps-3 position-relative z-index-2">
                    <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/intro_2.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                    <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px;">
                        <span class="arrow hlt" style="margin-right: -70px;"></span>
                        <!-- <strong class="text-color-dark mb-4 pb-3">modern designs!</strong> -->
                    </div>
                </div>
                <div class="col-11 col-md-9 position-relative ps-0 pe-5 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pe-5" data-appear-animation="fadeInUp" data-appear-animation-delay="400"><img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/unp.png" class="lazyload img-fluid box-shadow-3 position-relative z-index-1 rounded" alt="Screenshot 1" style="left: -110px;"></div>
                    <div class="intro3 z-index-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%;">
                        <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/intro_unp.jpg" class="lazyload img-fluid border border-width-10 border-color-light box-shadow-3 rounded" alt="Screenshot 3">
                        <div class="position-absolute d-none d-md-flex align-items-end appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px;">
                            <!-- <strong class="text-color-dark mb-3">a lot of demos!</strong> -->
                            <span class="arrow hru"></span>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="col-lg-15">
                <?php foreach ($modelAboutEng as $key => $val) : ?>
                    <h2 class="text-7 font-weight-semibold line-height-2 mb-2"><?= $val->title ?></h2>
                    <!-- <p><b>Universitas Negeri Padang (UNP)</b> merupakan sebuah perguruan tinggi negeri yang berlokasi di Kota Padang, Sumatera Barat. Universitas Negeri Padang didirikan pada tanggal 23 Oktober 1954 dengan kampus utama yang terletak di Jl. Prof. Dr. Hamka, Air Tawar, Kota Padang. Sedangkan kampus yang lain bertempat di Ulu Gadut, Limau Manis, Bukittinggi, dan Kabupaten Padang Pariaman. UNP terdiri dari 9 fakultas dan 1 Pascasarjana. Universitas Negeri Padang pernah menjadi satu dari 28 perguruan tinggi negeri lain yang dinobatkan oleh Ditjen Dikti pada tahun 2011 sebagai 50 perguruan tinggi paling menjanjikan di Indonesia. Selain itu UNP juga telah memperoleh atatus akreditasi A oleh BAN PT pada tahun 2016.<br> <br> “Alam Takambang Jadi Guru", menjadi motto Universita Negeri Padang. Motto tersebut memiliki makna bahwa sivitas akademika Universitas Negeri Padang (UNP) selalu responsif dan proaktif terhadap lingkungannya. Salah satu bukti implementasi UNP terhadap motto tersebut adalah pencapaian kampus ini menjadi 50 Perguruan Tinggi Negeri (PTN) terbaik Indonesia versi Webometrics pada tahun 2022.</p> -->
                    <p><?= $val->isi ?></p>

                <?php endforeach; ?>
            </div>

        </div>
    </section>
</div>