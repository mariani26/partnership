<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \common\models\User $user */

$session = Yii::$app->session;
// echo $session->get('bahasa');die;
// echo $session;die;
if ($session->get('bahasa') == 'indonesia') {

?>
    <?php if (isset($success) && $success) : ?>
        <div class="alert alert-success">

            Update Profile Berhasil
        </div>
    <?php endif ?>

    <div class="profile-akun">
        <div class="row">
            <div class="col ">
                <div class="container-fluid position-relative">
                    <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                        <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                                <li class="nav-item active" data-option-value=".new"><a class="nav-link custom-nav-link " href="<?= Url::toRoute(['/profile/akun']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Profile</a></li>
                                <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/profile/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Lengkapi Data</a></li>
                                <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/profile/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php if (Yii::$app->user->identity->role == 'industri') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h3 style="color: white;"> Update Akun </h3>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('user_akun', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>


                    <?php } ?>

                    <?php if (Yii::$app->user->identity->role == 'sekolah') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"> Update Akun </h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_sekolah', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'perguruan_tinggi') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"> Update Akun </h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_perguruan_tinggi', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'dinas') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"> Update Akun </h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_dinas', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'organisasi') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"> Update Akun </h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_organisasi', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'NPO') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"> Update Akun </h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_npo', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
<?php } else if ($session->get('bahasa') == 'english') { ?>
    <?php if (isset($success) && $success) : ?>
        <div class="alert alert-success">

            Update Profile Successfully!
        </div>
    <?php endif ?>
    <div class="profile-akuneng">
        <div class="row">
            <div class="col ">
                <div class="container-fluid position-relative">
                    <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                        <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                                <li class="nav-item active" data-option-value=".new"><a class="nav-link custom-nav-link " href="<?= Url::toRoute(['/profile/akuneng']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Update Profile</a></li>
                                <li class="nav-item" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/profile/indexeng']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Complete Data</a></li>
                                <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/profile/indexeng']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php if (Yii::$app->user->identity->role == 'industrieng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('user_akun', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>


                    <?php } ?>

                    <?php if (Yii::$app->user->identity->role == 'sekolaheng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_sekolaheng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'PTeng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_perguruan_tinggieng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'dinaseng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_dinaseng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'organisasieng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_organisasieng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>
                    <?php if (Yii::$app->user->identity->role == 'NPOeng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_npoeng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>

                    <?php if (Yii::$app->user->identity->role == 'studenteng') { ?>
                        <div class="card bg-primary">
                            <div class="card-header text-center bg-secondary">
                                <h2 style="color: white;"><b> Update Account </b></h2>
                            </div>
                            <div class="card-body">
                                <?php \yii\widgets\Pjax::begin([
                                    'enablePushState' => false
                                ]) ?>
                                <?php echo $this->render('akun_studenteng', [
                                    'user' => $user
                                ]) ?>
                                <?php \yii\widgets\Pjax::end() ?>
                            </div>
                        </div>

                    <?php
                    } else {
                    ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
<?php } ?>