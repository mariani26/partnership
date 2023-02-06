<?php

/** @var \yii\web\View $this */
/** @var string $content */

use Codeception\Step\Action;
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

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Partnership-unp</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl(); ?>/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= Yii::$app->getHomeUrl(); ?>/img/apple-touch-icon.png">
    <link rel="stylesheet" href="//www.okler.net/previews/porto-admin/edge/vendor/datatables/media/css/dataTables.bootstrap5.css">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-elements.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-blog.css">
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/demos/demo-landing.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/skins/skin-landing.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/custom.css">

    <!-- Head Libs -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>

    <div class="body">



        <?php
        $session = Yii::$app->session;
        // echo $session->get('bahasa');die;
        // echo $session;die;
        if ($session->get('bahasa') == 'indonesia') {
        ?>
            <header id="header" class="fixed-top" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0 bg-dark box-shadow-none">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="#"><img alt="Porto" width="278" height="50" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="<?= Yii::$app->getHomeUrl(); ?>img/Partnership.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">

                                    <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-light-text">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-3 header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse">


                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/index']) ?>">
                                                            Home
                                                        </a>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/about']) ?>">
                                                            About Us
                                                        </a>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="130" href="<?= Url::toRoute(['/site/faq']) ?>">
                                                            FAQ
                                                        </a>
                                                    </li>

                                                    <li class="dropdown dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/tb-industri/index']) ?>">
                                                            Daftar Kerjasama
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-industri/index']) ?>">Industri</a>

                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-sekolah/index']) ?>">Sekolah</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-perguruan-tinggi/index']) ?>">Perguruan Tinggi</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-dinas/index']) ?>">Pemerintah</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-organisasi/index']) ?>">Organisasi</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-npo/index']) ?>">Non Profit Organisasi</a>
                                                            </li>

                                                        </ul>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/contact']) ?>">
                                                            Contact Us
                                                        </a>

                                                    </li>


                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['#']) ?>">
                                                            Language
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/site/index']) ?>"> <img class="w-16px h-16px rounded-1 m-1 b-1" src="<?= Yii::$app->getHomeUrl(); ?>img/avatars/idn.png" width="16px" height="16px" alt=""> Indonesia</a>

                                                            </li>
                                                            <li class="dropdown-submenu">


                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/site/indexeng']) ?>"> <img class="w-16px h-16px rounded-1  m-1" src="<?= Yii::$app->getHomeUrl(); ?>img/avatars/united-states.svg" width="16px" height="16px" alt=""> English</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </nav>

                                        </div>
                                        <?php

                                        if (Yii::$app->user->isGuest) {
                                            echo Html::tag('div', Html::a('Login', ['/site/login'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]), ['class' => ['text-center']]);

                                            echo Html::tag('div', Html::a('Signup', ['signup'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]), ['class' => ['text-center']]);
                                        ?>

                                        <?php
                                        } else {


                                        ?>

                                            <div class="nav nav-pills">
                                                <a href="<?= Url::toRoute(['/profile/index']) ?>" class="btn btn-primary btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                    </svg> &NonBreakingSpace; <?php echo Yii::$app->user->identity->username; ?>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li class="user-footer">
                                                        <div class="pull-left">
                                                            <a href="<?= Url::toRoute(['/profile/index']) ?>" class="btn btn-default btn-flat">Profile</a>
                                                        </div>

                                                        <div class="pull-right">
                                                            <?php echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                                                . Html::submitButton(
                                                                    'Logout',

                                                                    ['class' => ' btn btn-primary btn-flat'],
                                                                    ['linkOptions' => [
                                                                        'data-method' => 'post'
                                                                    ],],
                                                                )
                                                                . Html::endForm(); ?>
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div> &nbsp; &nbsp;
                                            <div class="pull-right">
                                                <?php echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                                                    . Html::submitButton(
                                                        'Logout',

                                                        ['class' => ' btn btn-primary btn-rounded'],
                                                        ['linkOptions' => [
                                                            'data-method' => 'post'
                                                        ],],
                                                    )
                                                    . Html::endForm(); ?>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php } else if ($session->get('bahasa') == 'english') { ?>
            <header id="header" class="fixed-top" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0 bg-dark box-shadow-none">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="#"><img alt="Porto" width="278" height="50" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="<?= Yii::$app->getHomeUrl(); ?>img/Partnership.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">

                                    <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-light-text">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-3 header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse">


                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/indexeng']) ?>">
                                                            Home
                                                        </a>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/abouteng']) ?>">
                                                            About Us
                                                        </a>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item" data-hash data-hash-offset="0" data-hash-offset-lg="130" href="<?= Url::toRoute(['/site/faqeng']) ?>">
                                                            FAQ
                                                        </a>
                                                    </li>

                                                    <li class="dropdown dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/tb-industri-eng/index']) ?>">
                                                            Partnership
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-industri-eng/index']) ?>">Industry</a>

                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-sekolah-eng/index']) ?>">School</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-perguruan-tinggi-eng/index']) ?>">College</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-dinas-eng/index']) ?>">Government</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-organisasi-eng/index']) ?>">Organization</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-npo-eng/index']) ?>">Non Profit Organization</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/tb-student-eng/index']) ?>">Student</a>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['/site/contacteng']) ?>">
                                                            Contact Us
                                                        </a>

                                                    </li>


                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="<?= Url::toRoute(['#']) ?>">
                                                            Language
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/site/index']) ?>"> <img class="w-16px h-16px rounded-1  m-1" src="<?= Yii::$app->getHomeUrl(); ?>img/avatars/idn.png" width="16px" height="16px" alt=""> Indonesia</a>

                                                            </li>
                                                            <li class="dropdown-submenu">


                                                                <a class="dropdown-item" href="<?= Url::toRoute(['/site/indexeng']) ?>"> <img class="w-16px h-16px rounded-1  m-1" src="<?= Yii::$app->getHomeUrl(); ?>img/avatars/united-states.svg" width="16px" height="16px" alt=""> English</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </nav>

                                        </div>
                                        <?php

                                        if (Yii::$app->user->isGuest) {
                                            echo Html::tag('div', Html::a('Login', ['/site/logineng'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]), ['class' => ['text-center']]);

                                            echo Html::tag('div', Html::a('Signup', ['signupeng'], ['class' => ['btn btn-gradient btn-rounded font-weight-semibold px-4 ms-3']]), ['class' => ['text-center']]);
                                        ?>

                                        <?php
                                        } else {


                                        ?>

                                            <div class="nav nav-pills">
                                                <a href="<?= Url::toRoute(['/profile/indexeng']) ?>" class="btn btn-primary btn-rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                    </svg> &NonBreakingSpace; <?php echo Yii::$app->user->identity->username; ?>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">

                                                        <a class="dropdown-item" href="<?= Url::toRoute(['/profile/indexeng']) ?>" class="btn btn-default btn-flat">Profile</a>
                                                    </li>

                                                    <li class="dropdown-submenu">
                                                        <?php echo Html::beginForm(['/site/logouteng'], 'post', ['class' => 'd-flex'])
                                                            . Html::submitButton(
                                                                'Logout',

                                                                ['class' => ' btn btn-primary btn-flat'],
                                                                ['linkOptions' => [
                                                                    'data-method' => 'post'
                                                                ],],
                                                            )
                                                            . Html::endForm(); ?>

                                                    </li>

                                                </ul>
                                            </div> &nbsp; &nbsp;
                                            <div class="pull-right">
                                                <?php echo Html::beginForm(['/site/logouteng'], 'post', ['class' => 'd-flex'])
                                                    . Html::submitButton(
                                                        'Logout',

                                                        ['class' => ' btn btn-primary btn-rounded'],
                                                        ['linkOptions' => [
                                                            'data-method' => 'post'
                                                        ],],
                                                    )
                                                    . Html::endForm(); ?>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php } ?>
        <main role="main" class="flex-shrink-0">
            <?= $content ?>
        </main>
        <footer id="footer" class="bg-color-dark-scale-2 border border-end-0 border-start-0 border-bottom-0 border-color-light-3 mt-0">
            <div class="container text-center my-3 py-5">
                <a href="index.html">
                    <img src="<?= Yii::$app->getHomeUrl(); ?>img/lazy.png" data-src="<?= Yii::$app->getHomeUrl(); ?>img/Partnership.png" width="250" height="45" class="appear-animation lazyload mb-4" alt="Porto" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                </a>
                <!-- <p class="text-4 mb-4">Porto is exclusively available on themeforest.net by <a href="https://themeforest.net/user/okler/" class="text-color-light text-decoration-none" target="_blank">Okler.</a></p> -->
                <ul class="social-icons social-icons-big social-icons-dark-2">
                    <li class="social-icons-facebook"><a href="https://id-id..com/universitasnegeripadang1/" target="_blank" title=""><i class="fab fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="https://twitter.com/HumasUnp?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="https://id.linkedin.com/company/universitasnegeripadang" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="copyright bg-dark py-4">
                <div class="container text-center py-2">
                    <p class="mb-0 text-2">Copyright 2023-partnership-UNP - All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/lazysizes/lazysizes.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/isotope/jquery.isotope.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/vide/jquery.vide.min.js"></script>
    <script src="<?= Yii::$app->getHomeUrl(); ?>vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= Yii::$app->getHomeUrl(); ?>js/theme.init.js"></script>
    <script src="//www.okler.net/previews/porto-admin/edge/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>

    <script src="//www.okler.net/previews/porto-admin/edge/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
    <script src="//www.okler.net/previews/porto-admin/edge/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
</body>

</html>
<?php $this->endPage();
