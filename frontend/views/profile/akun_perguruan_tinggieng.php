<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \common\models\User $user */

?>

<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">
                Profil Berhasil di Perbaharui
            </div>
        <?php endif ?>

        <?php $akunForm = ActiveForm::begin([
            'action' => ['/profile/update-akunpteng'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="row">
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
                </div>


            </div>

            <div class="col">

                <div class="card">
                    <div class="card-header">
                        <b>Profile Picture </b>
                    </div>
                    <div class="card-body">
                        <?= $akunForm->field(
                            $user,
                            'foto_profil',
                            []
                        )->fileInput(['id' => 'foto_profil']) ?>
                        <br>
                    </div>
                    <button class="btn btn-success"> Update</button>
                </div>
            </div>
            <br>
        </div>



        <?php ActiveForm::end() ?>

    </div>