<?php

namespace frontend\controllers;

/** @var \yii\web\View $this */
/** @var string $content */

use Yii;
use yii\helpers\Url;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>


<div class="site-indexeng">
    <div role="main" class="main">
        <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
            <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
            <div class="container pt-5 mt-5">
                <div class="row align-items-center pt-3">
                    <div class="col-lg-5 mb-5">
                        <h5 class="text-primary font-weight-bold mb-1">PARTNERSHIP UNP</h5>
                        <h1 class="font-weight-bold text-12 line-height-2 mb-3">The Best Partnership UNP<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ms-2">ever</span></span></h1>
                        <p class="custom-font-size-1">Partnership UNP is one of the website that was built to collaborate <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="120" class="text-color-light font-weight-semibold text-1 d-block text-decoration-none">VIEW MORE <i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>

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

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section section-no-border pb-0 m-0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- <div class="col-lg-15">
                        <h2 class="text-7 font-weight-semibold line-height-2 mb-2">About Us</h2>
                        <p>Universitas Negeri Padang (UNP) merupakan sebuah perguruan tinggi negeri yang berlokasi di Kota Padang, Sumatera Barat. Universitas Negeri Padang didirikan pada tanggal 23 Oktober 1954 dengan kampus utama yang terletak di Jl. Prof. Dr. Hamka, Air Tawar, Kota Padang. Sedangkan kampus yang lain bertempat di Ulu Gadut, Limau Manis, Bukittinggi, dan Kabupaten Padang Pariaman. UNP terdiri dari 9 fakultas dan 1 Pascasarjana. Universitas Negeri Padang pernah menjadi satu dari 28 perguruan tinggi negeri lain yang dinobatkan oleh Ditjen Dikti pada tahun 2011 sebagai 50 perguruan tinggi paling menjanjikan di Indonesia. Selain itu UNP juga telah memperoleh atatus akreditasi A oleh BAN PT pada tahun 2016.<br> <br> “Alam Takambang Jadi Guru", menjadi motto Universita Negeri Padang. Motto tersebut memiliki makna bahwa sivitas akademika Universitas Negeri Padang (UNP) selalu responsif dan proaktif terhadap lingkungannya. Salah satu bukti implementasi UNP terhadap motto tersebut adalah pencapaian kampus ini menjadi 50 Perguruan Tinggi Negeri (PTN) terbaik Indonesia versi Webometrics pada tahun 2022.</p>
                    </div> -->
                    <!-- <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                        <i class="icon-bg icon-1"></i>
                        <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Super High<br>Performance</h4>
                    </div>
                    <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                        <i class="icon-bg icon-2"></i>
                        <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Created with Top<br>Plugins and Extensions</h4>
                    </div>
                    <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                        <i class="icon-bg icon-3"></i>
                        <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Extremely Easy<br>to Customize</h4>
                    </div> -->
                    <div class="col-sm-12">
                        <hr class="my-5">
                        <h2 class="font-weight-bold text-center text-10 pt-3 mb-4">WELCOME TO PARTNERSHIP UNP</h2>
                    </div>
                    <div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
                        <p class="text-4">Partnership UNP is one of the platform that was built to collaborate.</p>
                    </div>
                </div>
                <div class="image-wrapper position-relative z-index-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0; padding-left: 5%; padding-bottom: 35%; padding-right: 5%;">
                    <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/unp - Copy.png" class="lazyload img-fluid" alt="The Most Customizable Template">
                </div>
            </div>
        </section>

        <section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #0169fe !important;" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/reason_bg.png">
            <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
            <div class="spacer py-md-4 my-md-5"></div>
            <div class="container pt-5 mt-5">
                <div class="row align-items-center pt-md-5 mt-5">
                    <div class="col-lg-6 offset-lg-1 position-relative mb-5">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                            <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_dots.png" width="154" height="146" class="lazyload position-absolute top-auto" alt="6 reasons" data-plugin-float-element data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px;">
                        </div>
                        <div class="text-reasons">
                            <label class="text-color-light appear-animation z-index-1" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750">6</label>
                            <h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750">Reasons</h3>
                            <h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750">Why you should choose</h3>
                            <h3 class="text-4 text-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750"><span class="highlight-word light">Partnership UNP</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 ps-lg-4 ps-xl-5 mb-5">
                        <h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">Partnership UNP makes it easier for you to find relation</h2>
                        <p class="custom-text-color-1 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">We have selected the 6 top reasons to choose Partnership UNP. Check below:</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                    <div class="col-lg-11">

                        <div class="row justify-content-center">
                            <?php foreach ($modelChooseeng as $key => $val) : ?>
                                <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">
                                    <!-- <img class="lazyload img-fluid" alt="Speed Performance" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/reason1.png"> -->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="text-color-dark font-weight-extra-bold text-12 me-2 line-height-1"><?= $val->id ?></span>
                                        <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1"><?= $val->title1 ?></small><?= $val->title2 ?></h4>
                                    </div>
                                    <p class="pe-5 custom-text-color-1"><?= $val->isi ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>