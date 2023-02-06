<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SearchTbNpo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-npo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'nama_npo')->textInput(['placeholder = "Search..."' => true])  ?>


    <?php // echo $form->field($model, 'no_thn_kerjasama') 
    ?>

    <?php // echo $form->field($model, 'tgl_mulai') 
    ?>

    <?php // echo $form->field($model, 'tgl_akhir') 
    ?>

    <?php // echo $form->field($model, 'dok_mou') 
    ?>

    <?php // echo $form->field($model, 'dok_moa') 
    ?>

    <?php // echo $form->field($model, 'dok_imp') 
    ?>

    <?php // echo $form->field($model, 'inisiator') 
    ?>

    <?php // echo $form->field($model, 'keterangan') 
    ?>

    <?php // echo $form->field($model, 'email') 
    ?>

    <?php // echo $form->field($model, 'no_telp') 
    ?>

    <?php // echo $form->field($model, 'no_fax') 
    ?>

    <?php // echo $form->field($model, 'website') 
    ?>

    <?php // echo $form->field($model, 'alamat') 
    ?>

    <?php // echo $form->field($model, 'kelurahan') 
    ?>

    <?php // echo $form->field($model, 'kecamatan') 
    ?>

    <?php // echo $form->field($model, 'kota') 
    ?>

    <?php // echo $form->field($model, 'kode_pos') 
    ?>

    <?php // echo $form->field($model, 'rt_rw') 
    ?>

    <?php // echo $form->field($model, 'kontak_person') 
    ?>

    <?php // echo $form->field($model, 'link_maps') 
    ?>

    <?php // echo $form->field($model, 'link_facebook') 
    ?>

    <?php // echo $form->field($model, 'link_instagram') 
    ?>

    <?php // echo $form->field($model, 'link_twitter') 
    ?>

    <?php // echo $form->field($model, 'link_youtube') 
    ?>

    <?php // echo $form->field($model, 'id_user') 
    ?>

    <!-- <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div> -->

    <?php ActiveForm::end(); ?>

</div>