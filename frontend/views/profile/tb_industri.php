<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbIndustri $tbIndustri */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamat'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header ">
                        <b> Data Umum </b>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <?= $alamatForm->field(
                                    $tbIndustri,
                                    'nama_industri'
                                ) ?>

                                <?= $alamatForm->field($tbIndustri, 'no_identitas') ?>
                                <?= $alamatForm->field($tbIndustri, 'identitas_derektur') ?>
                                <?= $alamatForm->field($tbIndustri, 'bidang_usaha') ?>
                                <?= $alamatForm->field($tbIndustri, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbIndustri, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbIndustri, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbIndustri, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbIndustri, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbIndustri, 'inisiator') ?>
                                <?= $alamatForm->field($tbIndustri, 'keterangan') ?>
                                <?= $alamatForm->field($tbIndustri, 'no_telp') ?>
                                <?= $alamatForm->field($tbIndustri, 'no_fax') ?>
                                <?= $alamatForm->field($tbIndustri, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbIndustri, 'email_utama') ?>
                            <?= $alamatForm->field($tbIndustri, 'email_cadangan') ?>
                            <?= $alamatForm->field($tbIndustri, 'alamat') ?>
                            <?= $alamatForm->field($tbIndustri, 'kelurahan') ?>
                            <?= $alamatForm->field($tbIndustri, 'kecamatan') ?>
                            <?= $alamatForm->field($tbIndustri, 'kota') ?>
                            <?= $alamatForm->field($tbIndustri, 'kode_pos') ?>
                            <?= $alamatForm->field($tbIndustri, 'rt_rw') ?>
                            <?= $alamatForm->field($tbIndustri, 'kontak_person') ?>
                            <?= $alamatForm->field($tbIndustri, 'link_maps') ?>
                            <?= $alamatForm->field($tbIndustri, 'link_facebook') ?>
                            <?= $alamatForm->field($tbIndustri, 'link_instagram') ?>
                            <?= $alamatForm->field($tbIndustri, 'link_twitter') ?>
                            <?= $alamatForm->field($tbIndustri, 'link_youtube') ?>
                        </div>

                    </div>
                    <button class="btn btn-success"> Update</button>

                </div>


            </div>
        </div>

        <?php ActiveForm::end() ?>

    </div>

    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-dok'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b> Data Pendukung </b>
                </div>
                <div class="card-body">
                    <p>Silahkan isi salah satu </p>


                    <?= $alamatForm->field($tbIndustri, 'dok_mou', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'dok_mou']) ?>

                    <?= $alamatForm->field($tbIndustri, 'dok_moa', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'dok_moa']) ?>



                    <?= $alamatForm->field(
                        $tbIndustri,
                        'dok_imp',
                        []
                    )->fileInput(['id' => 'dok_imp']) ?>


                </div>
                <button class="btn btn-success"> kirim</button>
            </div>
            <?php ActiveForm::end() ?>
        </div>




        <br>
    </div>



</div>