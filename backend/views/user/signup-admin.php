<?php

/* @var $this yii\web\View $this */
/* @var $form yii\bootstrap5\ActiveForm $form */
/* @var $model \frontend\models\SignupForm $model */


use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;
if ($session->get('bahasa') == 'indonesia') {

?>
    <div class="site-signup">

        <div class="row">

            <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-size: contain; background-repeat: no-repeat; background-image: url('<?= Yii::$app->getHomeUrl(); ?>/img/login.png')"></div>
            <div class="col-lg-7 pt-25">
                <div class="row">
                    <div class="h4 fw-bold third-cr fs-40">
                        <br>
                        Daftar
                    </div>
                </div>

                <div class="row pb-20">
                    <p class="third-cr fs-18">
                        Silahkan Pilih Role Daftar
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Admin Indonesia</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Admin Non Indonesia</button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="industri" aria-labelledby="pills-home-tab">
                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">
                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-one',
                                    //'action' => 'site/daftar-industri',
                                    'method' => 'post'
                                ]); ?>

                                <?= $form->field($model, 'nama')->textInput(['placeholder = "Nama Perusahaan / CV"' => true]) ?>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($model, 'email') ?>
                                <?= $form->field($model, 'password')->passwordInput() ?>
                                <div class="row">
                                    <div class="col-xs-12 pb-10">
                                        <p class="text-center text-capitalize">dengan klik tombol "daftar", Anda Setuju dengan <span><a class="second-cr" href="#">syarat dan ketentuan</a></span> <br> serta <span><a class="second-cr" href="#">kebijakan privasi</a></span> UNP-LINK</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 text-center pb-10">
                                        <div class="form-group">
                                            <?= Html::submitButton('Signup',  [
                                                'class' => 'btn btn-primary', 'name' => 'signup-button',
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <p class="text-center">Sudah Punya Akun? <span><a class="second-cr" href="<?= Url::toRoute(['/site/login']) ?>">Masuk</a></span> </p>
                                </div>

                                <?php ActiveForm::end(); ?> <br>
                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-two'
                                ]); ?>

                                <?= $form->field($modeleng, 'nama')->textInput(['placeholder = "Nama Sekolah"' => true]) ?>
                                <?= $form->field($modeleng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modeleng, 'email') ?>
                                <?= $form->field($modeleng, 'password')->passwordInput() ?>
                                <div class="row">
                                    <div class="col-xs-12 pb-10">
                                        <p class="text-center text-capitalize">dengan klik tombol "daftar", Anda Setuju dengan <span><a class="second-cr" href="#">syarat dan ketentuan</a></span> <br> serta <span><a class="second-cr" href="#">kebijakan privasi</a></span> UNP-LINK</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 text-center pb-10">
                                        <div class="form-group">
                                            <?= Html::submitButton('Signup', [
                                                'class' => 'btn btn-primary', 'name' => 'signup-button',
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <p class="text-center">Sudah Punya Akun? <span><a class="second-cr" href="<?= Url::toRoute(['/site/login']) ?>">Masuk</a></span> </p>
                                </div>

                                <?php ActiveForm::end(); ?> <br>
                            </div>

                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else if ($session->get('bahasa') == 'english') { ?>

    <?php } ?>