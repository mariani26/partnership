<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\User $user */

?>

<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $akunForm = ActiveForm::begin([
            'action' => ['/profile/update-akun'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="row">
            <div class="col">

                <div class="card">


                    <div class="card-body">


                        <div class="d-flex justify-content-center mb-4">
                            <div class="profile-image-outer-container">
                                <div class="profile-image-inner-container ">
                                    <img src="<?= Yii::$app->getHomeUrl(); ?>img/avatars/iconprofil.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <?= $akunForm->field(
                            $user,
                            'foto_profil',
                            []
                        )->fileInput(['id' => 'foto_profil']), $user->foto_profil ?>
                        <br>
                    </div>


                </div>
            </div>
            <br>
            <div class="col">
                <div class="card">
                    <div class="card-header ">
                        <b> Update Data Akun </b>
                    </div>

                    <div class="card-body">

                        <?= $akunForm->field($user, 'nama') ?>
                        <?= $akunForm->field($user, 'username') ?>
                        <?= $akunForm->field($user, 'gelar_depan') ?>
                        <?= $akunForm->field($user, 'gelar_belakang') ?>
                    </div>
                    <button class="btn btn-success"> Update</button>

                </div>

            </div>


            <?php ActiveForm::end() ?>
        </div>





    </div>
</div>


</div>