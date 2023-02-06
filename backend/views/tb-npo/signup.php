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
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">


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

                            <?= $form->field($modelNgo, 'nama')->textInput(['placeholder = "Nama Perusahaan / CV"' => true]) ?>
                            <?= $form->field($modelNgo, 'username')->textInput(['autofocus' => true]) ?>
                            <?= $form->field($modelNgo, 'email') ?>
                            <?= $form->field($modelNgo, 'password')->passwordInput() ?>
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
    </div>


<?php } ?>