<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TbNpo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-npo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_npo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_npo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_thn_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'dok_mou')->fileInput() ?>

    <?= $form->field($model, 'dok_moa')->fileInput() ?>

    <?= $form->field($model, 'dok_imp')->fileInput() ?>

    <?= $form->field($model, 'inisiator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt_rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontak_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_maps')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_facebook')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_instagram')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_twitter')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link_youtube')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>