<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */

?>
<div class="row">
    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatpt'],
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
                                <?= $alamatForm->field($tbPerguruanTinggi, 'nama_peguruan_tinggi') ?>

                                <?= $alamatForm->field($tbPerguruanTinggi, 'bidang_kerjasama') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'inisiator') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'keterangan') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'no_telp') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'no_fax') ?>
                                <?= $alamatForm->field($tbPerguruanTinggi, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'email_utama') ?>

                            <?= $alamatForm->field($tbPerguruanTinggi, 'alamat') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'kelurahan') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'kecamatan') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'kota') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'kode_pos') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'rt_rw') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'kontak_person') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'link_maps') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'link_facebook') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'link_instagram') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'link_twitter') ?>
                            <?= $alamatForm->field($tbPerguruanTinggi, 'link_youtube') ?>
                        </div>

                    </div>
                    <button class="btn btn-success"> Update</button>

                </div>


            </div>
        </div>

        <?php ActiveForm::end() ?>

    </div>

    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-dokpt'],
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
                    <p>Silahkan isi salah satu</p>


                    <?= $alamatForm->field($tbPerguruanTinggi, 'dok_mou', [
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

                    <?= $alamatForm->field($tbPerguruanTinggi, 'dok_moa', [
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
                        $tbPerguruanTinggi,
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