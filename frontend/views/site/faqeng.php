<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Faq';
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
                        ?> <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                    </p>

                    <a class="d-none video-open lightbox d-block text-color-light text-decoration-none" href="#popup-content-1" data-trigger-play-video="#popupPresentation">
                        <div class="video-open-icon"></div>See How It Works
                    </a>

                    <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                        <div class="ratio ratio-4x3">
                            <div id="block-videoprofiluniversitas" class="block block-block-content block-block-content23574cec-d9fe-4788-b503-3efa5bfd7b18">

                                <!-- <h2><span>Video Profile University</span></h2> -->

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

                            <!-- <h2><span>Video Profile University</span></h2> -->

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

    <section id="support" class="section section-angled bg-light border-0 m-0 position-relative pt-0">
        <div class="container pb-5 mb-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">

                    <h2 class="font-weight-bold text-9 mb-1">Professional Support</h2>
                    <h5 class="font-weight-semibold positive-ls-2 text-4 text-primary mb-3">ONLINE DOCUMENTATION, VIDEOS AND FORUM</h5>
                    <!-- <p class="ls-0 text-default fw-400 mb-5">Any problem while using Porto? We're here to help you.</p> --> <br>
                    <?php foreach ($modelFaqEng as $key => $val) : ?>
                        <div class="d-flex align-items-center border border-top-0 border-end-0 border-start-0 pb-4 mb-4">

                            <i class="fa fa-check text-color-primary bg-light rounded-circle box-shadow-4 p-2 me-3"></i>
                            <p class="mb-0"><b class="text-color-dark"><?= $val->title ?></b> <br> <?= $val->isi ?></p>

                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-4 offset-lg-2 position-relative">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        <img class="'<?= Yii::$app->getHomeUrl(); ?>img-fluid lazyload" src="<?= Yii::$app->getHomeUrl(); ?>img/unp.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/porto_dots2.png" alt="" style="position: absolute; bottom: -2%; left: -43%; transform: rotate(90deg)">
                    </div>
                    <img alt="Porto Support" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/sekolah.jpg" class="<?= Yii::$app->getHomeUrl(); ?>img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyload ms-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="200" style="width: 590px; max-width: none;">
                    <img alt="Porto Documentation" src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/landing/kampus_merdeka.jpg" class="<?= Yii::$app->getHomeUrl(); ?>img-fluid lazyload rounded box-shadow-3 position-absolute appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="700" style="left: -100px; bottom: 50px;">
                </div>

            </div>
        </div>
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle" style="padding: 4rem 0; background: #222529;"></div>
    </section>
</div>