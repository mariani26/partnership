<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
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

                            <br>
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

    <div class="footer-top">
        <div class="container">
            <br>
            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-8">

                            <div class="footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="http://opac.unp.ac.id/">Digital Library</a></li>
                                    <li><a href="http://ejournal.unp.ac.id/">E-Journal</a></li>
                                    <li><a href="https://elearning2.unp.ac.id/">E-Learning</a></li>
                                    <li><a href="https://mooc.unp.ac.id/">Massive Open Online Course (MOOC)</a></li>
                                    <li><a href="https://portal.unp.ac.id/">Portal Akademik</a></li>
                                    <li><a href="https://portal2.unp.ac.id/">Sistem Informasi Akademik</a></li>
                                    <li><a href="http://webmail.unp.ac.id/">Webmail</a></li>
                                    <li><a href="http://ppid.unp.ac.id/majalah2/">E-Majalah</a></li>
                                    <li><a href="http://staf.unp.ac.id/">Lecturer Blog</a></li>
                                    <li><a href="http://sipeg.unp.ac.id/">Sistem Informasi Kepegawaian</a></li>
                                    <li><a href="https://ppid.unp.ac.id/">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-sm-8">


                            <div class="footer-links">
                                <br> <br>
                                <h4>Contact Us</h4>
                                <p>
                                    Bagian Kerjasama dan Humas<br>
                                    --------------------------------------------<br>
                                    Gedung Rectorate and Research Center<br>
                                    Universitas Negeri Padang<br>
                                    Jalan Prof. Dr. Hamka, Air Tawar Padang<br>
                                    Sumatera Barat <br>
                                    <strong>Phone:</strong> 0751 7058692<br>
                                    <strong>Email:</strong> humas@unp.ac.id<br>
                                    --------------------------------------------<br>
                                </p>
                            </div>



                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>Send us a message</h4>
                        <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="text-center"><button class="btn btn-gradient font-weight-semibold px-4 ms-3" type="submit" title="Send Message">Send Message</button></div>
                            <br> <br>
                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>