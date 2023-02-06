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
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Industri</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sekolah</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Perguruan Tinggi</button>
                            </li>

                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-dinas-tab" data-bs-toggle="pill" data-bs-target="#pills-dinas" type="button" role="tab" aria-controls="pills-dinas" aria-selected="false">Pemerintah</button>

                            </li>
                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-organisasi-tab" data-bs-toggle="pill" data-bs-target="#pills-organisasi" type="button" role="tab" aria-controls="pills-organisasi" aria-selected="false">Organisasi</button>

                            </li>
                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-ngo-tab" data-bs-toggle="pill" data-bs-target="#pills-ngo" type="button" role="tab" aria-controls="pills-dinas" aria-selected="false">Non Profit Organisasi</button>

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

                                <?= $form->field($modelIndustri, 'nama')->textInput(['placeholder = "Nama Perusahaan / CV"' => true]) ?>
                                <?= $form->field($modelIndustri, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelIndustri, 'email') ?>
                                <?= $form->field($modelIndustri, 'password')->passwordInput() ?>
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

                                <?= $form->field($modelSekolah, 'nama')->textInput(['placeholder = "Nama Sekolah"' => true]) ?>
                                <?= $form->field($modelSekolah, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelSekolah, 'email') ?>
                                <?= $form->field($modelSekolah, 'password')->passwordInput() ?>
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


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-pt'
                                ]); ?>

                                <?= $form->field($modelPt, 'nama')->textInput(['placeholder = "Nama Perguruan Tinggi"' => true]) ?>
                                <?= $form->field($modelPt, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelPt, 'email') ?>
                                <?= $form->field($modelPt, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-dinas" role="tabpanel" aria-labelledby="pills-dinas-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-dinas'
                                ]); ?>

                                <?= $form->field($modelDinas, 'nama')->textInput(['placeholder = "Nama Dinas"' => true]) ?>
                                <?= $form->field($modelDinas, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelDinas, 'email') ?>
                                <?= $form->field($modelDinas, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-organisasi" role="tabpanel" aria-labelledby="pills-organisasi-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-organisasi'
                                ]); ?>

                                <?= $form->field($modelOrganisasi, 'nama')->textInput(['placeholder = "Nama Organisasi"' => true]) ?>
                                <?= $form->field($modelOrganisasi, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelOrganisasi, 'email') ?>
                                <?= $form->field($modelOrganisasi, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-ngo" role="tabpanel" aria-labelledby="pills-ngo-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-two'
                                ]); ?>

                                <?= $form->field($modelNgo, 'nama')->textInput(['placeholder = "Nama Non Profit Organisasi"' => true]) ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($session->get('bahasa') == 'english') { ?>

    <div class="site-signupeng">

        <div class="row">

            <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-size: contain; background-repeat: no-repeat; background-image: url('<?= Yii::$app->getHomeUrl(); ?>/img/login.png')"></div>
            <div class="col-lg-7 pt-25">
                <div class="row">
                    <div class="h4 fw-bold third-cr fs-40">
                        <br>
                        Signup
                    </div>
                </div>

                <div class="row pb-20">
                    <p class="third-cr fs-18">
                        Please Select Role Register
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Industry</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">School</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">College</button>
                            </li>

                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-dinas-tab" data-bs-toggle="pill" data-bs-target="#pills-dinas" type="button" role="tab" aria-controls="pills-dinas" aria-selected="false">Government</button>

                            </li>
                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-organisasi-tab" data-bs-toggle="pill" data-bs-target="#pills-organisasi" type="button" role="tab" aria-controls="pills-organisasi" aria-selected="false">Organization</button>

                            </li>
                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-ngo-tab" data-bs-toggle="pill" data-bs-target="#pills-ngo" type="button" role="tab" aria-controls="pills-dinas" aria-selected="false">Non Profit Organization</button>

                            </li>

                            <li class="nav-item" role="presentation">

                                <button class="nav-link" id="pills-student-tab" data-bs-toggle="pill" data-bs-target="#pills-student" type="button" role="tab" aria-controls="pills-student" aria-selected="false">Student</button>

                            </li>
                        </ul>

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

                                <?= $form->field($modelIndustriEng, 'nama')->textInput(['placeholder = "Industry name"' => true]) ?>
                                <?= $form->field($modelIndustriEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelIndustriEng, 'email') ?>
                                <?= $form->field($modelIndustriEng, 'password')->passwordInput() ?>
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

                                <?= $form->field($modelSekolahEng, 'nama')->textInput(['placeholder = "School name"' => true]) ?>
                                <?= $form->field($modelSekolahEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelSekolahEng, 'email') ?>
                                <?= $form->field($modelSekolahEng, 'password')->passwordInput() ?>
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


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-pt'
                                ]); ?>

                                <?= $form->field($modelPtEng, 'nama')->textInput(['placeholder = "College name"' => true]) ?>
                                <?= $form->field($modelPtEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelPtEng, 'email') ?>
                                <?= $form->field($modelPtEng, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-dinas" role="tabpanel" aria-labelledby="pills-dinas-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-dinas'
                                ]); ?>

                                <?= $form->field($modelDinasEng, 'nama')->textInput(['placeholder = "Agency name"' => true]) ?>
                                <?= $form->field($modelDinasEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelDinasEng, 'email') ?>
                                <?= $form->field($modelDinasEng, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-organisasi" role="tabpanel" aria-labelledby="pills-organisasi-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-organisasi'
                                ]); ?>

                                <?= $form->field($modelOrganisasiEng, 'nama')->textInput(['placeholder = "Organization name"' => true]) ?>
                                <?= $form->field($modelOrganisasiEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelOrganisasiEng, 'email') ?>
                                <?= $form->field($modelOrganisasiEng, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-ngo" role="tabpanel" aria-labelledby="pills-ngo-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-two'
                                ]); ?>

                                <?= $form->field($modelNgoEng, 'nama')->textInput(['placeholder = "Non Profit Organization Name"' => true]) ?>
                                <?= $form->field($modelNgoEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelNgoEng, 'email') ?>
                                <?= $form->field($modelNgoEng, 'password')->passwordInput() ?>
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

                            <div class="tab-pane fade" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">

                                <?php if (isset($success) && $success) : ?>
                                    <div class="alert alert-success">

                                        Akun berhasil di buat!!
                                    </div>
                                <?php endif ?>


                                <?php $form = ActiveForm::begin([
                                    'id' => 'form-signup-two'
                                ]); ?>

                                <?= $form->field($modelStudentEng, 'nama')->textInput(['placeholder = "Student Name"' => true]) ?>
                                <?= $form->field($modelStudentEng, 'username')->textInput(['autofocus' => true]) ?>
                                <?= $form->field($modelStudentEng, 'email') ?>
                                <?= $form->field($modelStudentEng, 'password')->passwordInput() ?>
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
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>