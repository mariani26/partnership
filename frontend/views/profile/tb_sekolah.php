<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbSekolah $tbSekolah */

?>
<div class="row">
    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatsekolah'],
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
                                <?= $alamatForm->field($tbSekolah, 'nama_sekolah') ?>
                                <?= $alamatForm->field($tbSekolah, 'bidang_kerjasama') ?>

                                <?= $alamatForm->field($tbSekolah, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbSekolah, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbSekolah, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbSekolah, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbSekolah, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbSekolah, 'inisiator') ?>
                                <?= $alamatForm->field($tbSekolah, 'keterangan') ?>
                                <?= $alamatForm->field($tbSekolah, 'no_telp') ?>
                                <?= $alamatForm->field($tbSekolah, 'no_fax') ?>
                                <?= $alamatForm->field($tbSekolah, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbSekolah, 'email_utama') ?>

                            <?= $alamatForm->field($tbSekolah, 'alamat') ?>
                            <?= $alamatForm->field($tbSekolah, 'kelurahan') ?>
                            <?= $alamatForm->field($tbSekolah, 'kecamatan') ?>
                            <?= $alamatForm->field($tbSekolah, 'kota') ?>
                            <?= $alamatForm->field($tbSekolah, 'kode_pos') ?>
                            <?= $alamatForm->field($tbSekolah, 'rt_rw') ?>
                            <?= $alamatForm->field($tbSekolah, 'kontak_person') ?>
                            <?= $alamatForm->field($tbSekolah, 'link_maps') ?>
                            <?= $alamatForm->field($tbSekolah, 'link_facebook') ?>
                            <?= $alamatForm->field($tbSekolah, 'link_instagram') ?>
                            <?= $alamatForm->field($tbSekolah, 'link_twitter') ?>
                            <?= $alamatForm->field($tbSekolah, 'link_youtube') ?>
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
            'action' => ['/profile/update-doksekolah'],
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


                    <?= $alamatForm->field($tbSekolah, 'dok_mou', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'dok_mou'])
                    ?>



                    <?= $alamatForm->field($tbSekolah, 'dok_moa', [
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
                        $tbSekolah,
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