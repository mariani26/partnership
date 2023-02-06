<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SearchTbSekolahEng $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-sekolah-eng-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') 
    ?>

    <?= $form->field($model, 'school_name') ?>

    <?php // $form->field($model, 'cooperation_field') 
    ?>

    <?php // $form->field($model, 'collaboration_title') 
    ?>

    <?php // $form->field($model, 'type_of_cooperation') 
    ?>

    <?php // echo $form->field($model, 'collaboration_year_number') 
    ?>

    <?php // echo $form->field($model, 'start_date') 
    ?>

    <?php // echo $form->field($model, 'end_date') 
    ?>

    <?php // echo $form->field($model, 'doc_mou') 
    ?>

    <?php // echo $form->field($model, 'doc_moa') 
    ?>

    <?php // echo $form->field($model, 'doc_imp') 
    ?>

    <?php // echo $form->field($model, 'initiator') 
    ?>

    <?php // echo $form->field($model, 'description') 
    ?>

    <?php // echo $form->field($model, 'main_email') 
    ?>

    <?php // echo $form->field($model, 'phone_number') 
    ?>

    <?php // echo $form->field($model, 'fax_number') 
    ?>

    <?php // echo $form->field($model, 'website') 
    ?>

    <?php // echo $form->field($model, 'address') 
    ?>

    <?php // echo $form->field($model, 'city') 
    ?>

    <?php // echo $form->field($model, 'state') 
    ?>

    <?php // echo $form->field($model, 'country') 
    ?>

    <?php // echo $form->field($model, 'zipcode') 
    ?>

    <?php // echo $form->field($model, 'contact_person') 
    ?>

    <?php // echo $form->field($model, 'map_link') 
    ?>

    <?php // echo $form->field($model, 'facebook_link') 
    ?>

    <?php // echo $form->field($model, 'instagram_link') 
    ?>

    <?php // echo $form->field($model, 'twitter_link') 
    ?>

    <?php // echo $form->field($model, 'youtube_link') 
    ?>

    <?php // echo $form->field($model, 'user_id') 
    ?>



    <?php ActiveForm::end(); ?>

</div>