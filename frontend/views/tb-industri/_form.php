<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TbIndustri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-industri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_industri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'identitas_derektur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_usaha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_thn_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'dok_mou')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dok_moa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dok_imp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inisiator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_cadangan')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>