<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UserSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?> -->

    <?php // echo $form->field($model, 'password_reset_token') 
    ?>

    <?php // echo $form->field($model, 'email') 
    ?>

    <?php // echo $form->field($model, 'status') 
    ?>

    <?php // echo $form->field($model, 'created_at') 
    ?>

    <?php // echo $form->field($model, 'updated_at') 
    ?>

    <?php // echo $form->field($model, 'verification_token') 
    ?>

    <!-- <?php echo $form->field($model, 'role') ?> -->

    <?php // echo $form->field($model, 'foto_profil') 
    ?>

    <?php // echo $form->field($model, 'lokasi_pti') 
    ?>

    <?php // echo $form->field($model, 'lokasi_dinas') 
    ?>

    <?php // echo $form->field($model, 'gelar_depan') 
    ?>

    <?php // echo $form->field($model, 'gelar_belakang') 
    ?>

    <div class="form-group">
        <!-- <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?> -->
        <!-- <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->
    </div>

    <?php ActiveForm::end(); ?>

</div>