<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbOrganisasi $tbOrganisasi */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatorganisasi'],
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
                                <?= $alamatForm->field($tbOrganisasi, 'nama_organisasi') ?>

                                <?= $alamatForm->field($tbOrganisasi, 'bidang_organisasi') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'inisiator') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'keterangan') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'no_telp') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'no_fax') ?>
                                <?= $alamatForm->field($tbOrganisasi, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbOrganisasi, 'email_utama') ?>

                            <?= $alamatForm->field($tbOrganisasi, 'alamat') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'kelurahan') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'kecamatan') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'kota') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'kode_pos') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'rt_rw') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'kontak_person') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'link_maps') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'link_facebook') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'link_instagram') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'link_twitter') ?>
                            <?= $alamatForm->field($tbOrganisasi, 'link_youtube') ?>
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
            'action' => ['/profile/update-dokorganisasi'],
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
                    <span>*biarkan kosong jika tidak ingin mengubah data pendukung</span>


                    <?= $alamatForm->field($tbOrganisasi, 'dok_mou', [
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

                    <?= $alamatForm->field($tbOrganisasi, 'dok_moa', [
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
                        $tbOrganisasi,
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