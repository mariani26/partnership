<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TbStudentEng $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-student-eng-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'original_college')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'application_letter')->fileInput() ?>

    <?= $form->field($model, 'biodata')->fileInput() ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    <?= $form->field($model, 'certificate')->fileInput() ?>

    <?= $form->field($model, 'passport')->fileInput() ?>

    <?= $form->field($model, 'financial_guarantee_letter')->fileInput() ?>

    <?= $form->field($model, 'health_certificate')->fileInput() ?>

    <?= $form->field($model, 'statement_letter')->fileInput() ?>

    <?= $form->field($model, 'campus_recommendation_letter')->fileInput() ?>

    <?= $form->field($model, 'achievement')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
