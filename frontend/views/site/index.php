<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'My Yii Application';
$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;
if ($session->get('bahasa') == 'indonesia') {
?>

    <div class="site-index">

        <div role="main" class="main">
            <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
                <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
                <div class="container pt-5 mt-5">
                    <div class="row align-items-center pt-3">
                        <div class="col-lg-5 mb-5">
                            <h5 class="text-primary font-weight-bold mb-1">PARTNERSHIP UNP</h5>
                            <h1 class="font-weight-bold text-12 line-height-2 mb-3">The Best Partnership UNP<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ms-2">ever</span></span></h1>
                            <p class="custom-font-size-1">Partnership UNP merupakan sebuah website yang di bangun untuk melakukan sebuah kerja sama dengan pihak UNP <a href="#intro" data-hash data-hash-offset="0" data-hash-offset-lg="120" class="text-color-light font-weight-semibold text-1 d-block text-decoration-none">VIEW MORE <i class="fa fa-long-arrow-alt-right ms-1"></i></a></p>

                            <p>
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    echo Html::tag('div', Html::a('Join Us', ['signup'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]));
                                ?>
                                <?php
                                } else {
                                ?>

                                <?php
                                }
                                ?> <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                            </p>

                            <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="#popup-content-1" data-trigger-play-video="#popupPresentation">
                                <div class="video-open-icon"></div>See How It Works
                            </a>

                            <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                                <div class="ratio ratio-4x3">
                                    <aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
                                        <section id="block-9" class="widget widget_block">
                                            <div class="wp-container-63c628d5212a1 wp-block-group">
                                                <div class="wp-block-group__inner-container">
                                                    <div class="wp-widget-group__inner-blocks">
                                                        <div class="wp-container-63c628d520cb6 wp-block-group">
                                                            <div class="wp-block-group__inner-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section id="media_video-3" class="widget widget_media_video">

                                            <div style="width:100%;" class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
                                                <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                                                    <!-- <h2><span>Video Profil Universitas</span></h2> -->

                                                    <div class="content">

                                                        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                            <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="250" src="https://www.youtube.com/embed/ERMkw9qm0S0"></iframe></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </aside><!-- #secondary -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 mb-5">
                            <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                                <aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
                                    <section id="block-9" class="widget widget_block">
                                        <div class="wp-container-63c628d5212a1 wp-block-group">
                                            <div class="wp-block-group__inner-container">
                                                <div class="wp-widget-group__inner-blocks">
                                                    <div class="wp-container-63c628d520cb6 wp-block-group">
                                                        <div class="wp-block-group__inner-container"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="media_video-3" class="widget widget_media_video">

                                        <div style="width:100%;" class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
                                            <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                                                <!-- <h2><span>Video Profil Universitas</span></h2> -->

                                                <div class="content">

                                                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                        <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="250" src="https://www.youtube.com/embed/ERMkw9qm0S0"></iframe></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </aside><!-- #secondary -->

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
                            <p class="text-4">Partnership UNP merupakan sebuah platform kerja sama UNP.</p>
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
                            <h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750">Partnership UNP memudahkan Anda mencari relasi</h2>
                            <p class="custom-text-color-1 line-height-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750">We have selected the 6 top reasons to choose Partnership UNP. Check below:</p>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                        <div class="col-lg-11">

                            <div class="row justify-content-center">
                                <?php foreach ($modelChoose as $key => $val) : ?>
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

            <!-- <section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
            <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #0169fe;"></div>
            <div class="container py-5 my-5">
                <div class="row align-items-center text-center my-5">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">Introducing Partnership UNP</h2>
                        <p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750">THE BEST PARTNER</p>
                        <p class="pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750">Partnership UNP memberikan informasi terbaru dengan tampilan yang menarik.</p>
                        <a href="<?= Url::toRoute(['about']) ?>" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="">ABOUT US</a>

                    </div>
                    <div class="col-md-6 position-relative py-5">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                            <img class="lazyload" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_dots2.png" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750">
                            <div class="strong-shadow rounded strong-shadow-top-right">
                                <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_admin.jpg" class="lazyload img-fluid border border-width-10 border-color-light rounded box-shadow-3" alt="Porto Admin" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



            <!-- <section id="demos" class="section section-no-border section-light position-relative z-index-3 pt-0 m-0">
            <div class="container">
                <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" data-appear-animation-duration="750">
                    <div class="col-lg-8 offset-lg-2 text-center">

                        <p class="d-flex align-items-center justify-content-center font-weight-bold text-color-dark text-8 negative-ls-1 pb-3 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1-2-dark highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-extra-bold line-height-1 text-9 me-3"><br> Gallery</span></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid position-relative">
                <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                    <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                            <li class="nav-item active" data-option-value="#"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li>
                            <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
                            <li class="nav-item" data-option-value=".portfolio"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-list sort-destination sort-destination-margin sort-destination-items-hardware-acc overflow-visible mt-4" data-sort-id="portfolio">

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-classic.jpg">
                                        <a href="index-classic.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-photography.jpg">
                                        <a href="demo-photography.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-photography-2.jpg">
                                        <a href="demo-photography-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography 2</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-photography-3.jpg">
                                        <a href="demo-photography-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Photography 3</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-boxed.jpg">
                                        <a href="feature-layout-boxed.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-rtl.jpg">
                                        <a href="feature-layout-rtl.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">RTL</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-portfolio.jpg">
                                        <a href="index-portfolio.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 1</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-portfolio-2.jpg">
                                        <a href="index-portfolio-2.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 2</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-portfolio-3.jpg">
                                        <a href="index-portfolio-3.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 3</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-portfolio-4.jpg">
                                        <a href="index-portfolio-4.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 4</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item portfolio">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-portfolio-5.jpg">
                                        <a href="index-portfolio-5.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Portfolio 5</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-classic-color.jpg">
                                        <a href="index-classic-color.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Color</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-classic-light.jpg">
                                        <a href="index-classic-light.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Light</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-classic-video.jpg">
                                        <a href="index-classic-video.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Video</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 isotope-item classic">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750">
                            <div class="portfolio-item hover-effect-1 text-center">
                                <span class="thumb-info thumb-info-no-zoom thumb-info-no-overlay thumb-info-no-bg">
                                    <span class="thumb-info-wrapper thumb-info-wrapper-demos thumb-info-wrapper-link lazyload m-0" data-bg-src="<?= Yii::$app->getHomeUrl(); ?>img/previews/preview-classic-video-light.jpg">
                                        <a href="index-classic-video-light.html"></a>
                                    </span>
                                </span>
                                <h5 class="text-color-dark text-capitalize mt-3">Classic Video Light</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

            <!-- <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0 bg-dark section-dark" style="background-repeat: no-repeat; background-color: navy !important;">
            <div class="container pb-5 mb-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold text-9 mb-1"><br> Professional Support</h2>
                        <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">ONLINE DOCUMENTATION, VIDEOS AND FORUM</h5>
                        <p class="ls-0 text-default fw-400 mb-5">Any problem while using Partnership UNP? We're here to help you.</p>
                        <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                            <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                            <p class="mb-0"><b class="text-color-white">Online Documentation -</b> Contains all descriptions related to Partnership UNP usage and features.</p>
                        </div>
                        <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">
                            <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                            <p class="mb-0 mb-0 opacity-5"><b class="text-color-white">Video Documentation (coming soon) -</b> Need visual instructions? Check our video tutorials.</p>
                        </div>
                        <div class="d-flex align-items-center pb-4 mb-4">
                            <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                            <p class="mb-0"><b class="text-color-white">Support Center -</b> Contact us if you get any issue while using Partnership UNP, reply within 16 hrs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-2 position-relative">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                            <img class="img-fluid lazyload" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
                        </div>
                        <img alt="Porto Support" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/support_login.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
                        <img alt="Porto Documentation" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_docs.jpg" class="img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
                    </div>
                </div>
            </div>
            <div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div>
        </section> -->

        </div>


    </div>
<?php } else if ($session->get('bahasa') == 'english') { ?>


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
                                <a class="btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3" href="<?= Url::toRoute(['signup']) ?>">Join us!</a> <br><br>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
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

<?php } ?>