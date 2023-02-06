<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TbStudentEngSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-student-eng-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'date_of_birth') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'original_college') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'application_letter') ?>

    <?php // echo $form->field($model, 'biodata') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'certificate') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'financial_guarantee_letter') ?>

    <?php // echo $form->field($model, 'health_certificate') ?>

    <?php // echo $form->field($model, 'statement_letter') ?>

    <?php // echo $form->field($model, 'campus_recommendation_letter') ?>

    <?php // echo $form->field($model, 'achievement') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
