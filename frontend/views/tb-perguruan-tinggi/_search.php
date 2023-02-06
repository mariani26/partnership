<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SearchTbPerguruanTinggi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-perguruan-tinggi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //echo $form->field($model, 'id') 
    ?>


    <?php echo $form->field($model, 'nama_peguruan_tinggi')->textInput(['placeholder = "Search..."' => true]) ?>

    <?php //echo $form->field($model, 'bidang_kerjasama') 
    ?>

    <?php //echo $form->field($model, 'judul_kerjasama') 
    ?>

    <?php //echo $form->field($model, 'jenis_kerjasama') 
    ?>

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

    <?php // echo $form->field($model, 'fakultas') 
    ?>

    <?php // echo $form->field($model, 'email_utama') 
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
    </div> -->

    <?php ActiveForm::end(); ?>

</div>