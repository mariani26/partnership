<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Colaboration';
$this->params['breadcrumbs'][] = $this->title;
$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;
if ($session->get('bahasa') == 'indonesia') {
?>
    <div class="site-colaboration">
        <div role="main" class="main">
            <section>
                <div class="container-fluid position-relative">
                    <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                        <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-industri/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Industri</a></li>
                                <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-sekolah/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Sekolah</a></li>
                                <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-perguruan-tinggi/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Perguruan Tinggi</a></li>
                                <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-dinas/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Pemerintah</a></li>
                                <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-organisasi/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Organisasi</a></li>
                                <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-npo/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Non Profit Organisasi</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </section>

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
                                    <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">


                                        <br>
                                        <div class="content">

                                            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="200" src="https://www.youtube.com/embed/ERMkw9qm0S0" width="300"></iframe></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 mb-5">
                            <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height style="min-height: 446px;">
                                <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">


                                    <div class="content">

                                        <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                            <p><iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" width="525" height="200" src="https://www.youtube.com/embed/ERMkw9qm0S0" width="300"></iframe></p>
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
        </div>
    </div>
<?php } else if ($session->get('bahasa') == 'english') { ?>

    <div class="site-colaborationeng">
        <div role="main" class="main">
            <section>
                <div class="container-fluid position-relative">
                    <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                        <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link custom-nav-link active" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Show All</a></li>
                                <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-industri-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Industry</a></li>
                                <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-sekolah-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">School</a></li>
                                <li class="nav-item" data-option-value=".shop"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-perguruan-tinggi-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">College</a></li>
                                <li class="nav-item" data-option-value=".onepage"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-dinas-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Government</a></li>
                                <li class="nav-item" data-option-value=".business"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-organisasi-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Organization</a></li>
                                <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-npo-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Non Profit Organization</a></li>
                                <li class="nav-item" data-option-value=".blog"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/tb-student-eng/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Student</a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </section>

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
                                ?> <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                            </p>

                            <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="#popup-content-1" data-trigger-play-video="#popupPresentation">
                                <div class="video-open-icon"></div>See How It Works
                            </a>

                            <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                                <div class="ratio ratio-4x3">
                                    <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                                        <h2><span>Video Profil Universitas</span></h2>

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

                                    <h2><span>Video Profil Universitas</span></h2>

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
        </div>
    </div>
<?php } ?>