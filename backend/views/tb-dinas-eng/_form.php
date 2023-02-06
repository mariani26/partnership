<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TbDinasEng $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-dinas-eng-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'agency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cooperation_field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collaboration_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_of_cooperation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collaboration_year_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'doc_mou')->fileInput() ?>

    <?= $form->field($model, 'doc_moa')->fileInput() ?>

    <?= $form->field($model, 'doc_imp')->fileInput() ?>

    <?= $form->field($model, 'initiator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map_link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facebook_link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'instagram_link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'twitter_link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'youtube_link')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
