<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;
if ($session->get('bahasa') == 'indonesia') {
?>
    <div class="site-login">

        <div class="text-center">
            <div class="h2 fw-bold third-cr fs-40">
                <br>
                Login
            </div>
        </div>
        <div class="row">

            <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-size: contain; background-repeat: no-repeat; background-image: url('<?= Yii::$app->getHomeUrl(); ?>/img/login.png')"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">

                        <h2 class="h4 text-gray-900 mb-4">Selamat Datang!</h2>

                    </div>
                    <div class="row pb-20">
                        <p class="third-cr fs-18">
                            Please fill out the following fields to login:
                        </p>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="my-1 mx-0" style="color:#999;">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($session->get('bahasa') == 'english') { ?>

    <div class="site-logineng">

        <div class="text-center">
            <div class="h2 fw-bold third-cr fs-40">
                <br>
                Login
            </div>
        </div>
        <div class="row">

            <div class="col-lg-5 d-none d-lg-block bg-login-image" style="background-size: contain; background-repeat: no-repeat; background-image: url('<?= Yii::$app->getHomeUrl(); ?>/img/login.png')"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">

                        <h2 class="h4 text-gray-900 mb-4">Welcome!</h2>

                    </div>
                    <div class="row pb-20">
                        <p class="third-cr fs-18">
                            Please fill out the following fields to login:
                        </p>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="my-1 mx-0" style="color:#999;">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>