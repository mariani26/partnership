<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TbPerguruanTinggi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-perguruan-tinggi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_peguruan_tinggi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_thn_kerjasama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_mulai')->textInput() ?>

    <?= $form->field($model, 'tgl_akhir')->textInput() ?>

    <?= $form->field($model, 'dok_mou')->textInput() ?>

    <?= $form->field($model, 'dok_moa')->textInput() ?>

    <?= $form->field($model, 'dok_imp')->textInput() ?>

    <?= $form->field($model, 'inisiator')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput() ?>

    <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_utama')->textInput(['maxlength' => true]) ?>

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