<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ChooseEng $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="choose-eng-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
