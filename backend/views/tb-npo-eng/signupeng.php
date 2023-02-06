<?php

/* @var $this yii\web\View $this */
/* @var $form yii\bootstrap5\ActiveForm $form */
/* @var $model \frontend\models\SignupForm $model */


use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
//$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;

?>


<div class="site-signupeng">

    <div class="row">

        <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-size: contain; background-repeat: no-repeat; background-image: url('<?= Yii::$app->getHomeUrl(); ?>/img/login.png')"></div>
        <div class="col-lg-7 pt-25">

            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="industrieng" aria-labelledby="pills-home-tab">
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

                            <?= $form->field($modelNpoEng, 'nama')->textInput(['placeholder = "Industry name"' => true]) ?>
                            <?= $form->field($modelNpoEng, 'username')->textInput(['autofocus' => true]) ?>
                            <?= $form->field($modelNpoEng, 'email') ?>
                            <?= $form->field($modelNpoEng, 'password')->passwordInput() ?>
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



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?
