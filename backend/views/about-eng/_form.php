<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\AboutEng $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="about-eng-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
