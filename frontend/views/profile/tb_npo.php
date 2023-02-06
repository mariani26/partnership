<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbNpo $tbNpo */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatnpo'],
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
                                <?= $alamatForm->field($tbNpo, 'nama_npo') ?>
                                <?= $alamatForm->field($tbNpo, 'bidang_npo') ?>
                                <?= $alamatForm->field($tbNpo, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbNpo, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbNpo, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbNpo, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbNpo, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbNpo, 'inisiator') ?>
                                <?= $alamatForm->field($tbNpo, 'keterangan') ?>
                                <?= $alamatForm->field($tbNpo, 'no_telp') ?>
                                <?= $alamatForm->field($tbNpo, 'no_fax') ?>
                                <?= $alamatForm->field($tbNpo, 'website') ?> </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbNpo, 'email') ?>

                            <?= $alamatForm->field($tbNpo, 'alamat') ?>
                            <?= $alamatForm->field($tbNpo, 'kelurahan') ?>
                            <?= $alamatForm->field($tbNpo, 'kecamatan') ?>
                            <?= $alamatForm->field($tbNpo, 'kota') ?>
                            <?= $alamatForm->field($tbNpo, 'kode_pos') ?>
                            <?= $alamatForm->field($tbNpo, 'rt_rw') ?>
                            <?= $alamatForm->field($tbNpo, 'kontak_person') ?>
                            <?= $alamatForm->field($tbNpo, 'link_maps') ?>
                            <?= $alamatForm->field($tbNpo, 'link_facebook') ?>
                            <?= $alamatForm->field($tbNpo, 'link_instagram') ?>
                            <?= $alamatForm->field($tbNpo, 'link_twitter') ?>
                            <?= $alamatForm->field($tbNpo, 'link_youtube') ?>
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
            'action' => ['/profile/update-doknpo'],
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
                    <p><span>*biarkan kosong jika tidak ingin mengubah data pendukung</span></p>


                    <?= $alamatForm->field($tbNpo, 'dok_mou', [
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

                    <?= $alamatForm->field($tbNpo, 'dok_moa', [
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
                        $tbNpo,
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