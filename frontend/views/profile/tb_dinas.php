<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbDinas $tbDinas */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Berhasil dilengkapi
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatdinas'],
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
                                <?= $alamatForm->field($tbDinas, 'nama_dinas')  ?>

                                <?= $alamatForm->field($tbDinas, 'bidang_kerjasama') ?>
                                <?= $alamatForm->field($tbDinas, 'judul_kerjasama') ?>
                                <?= $alamatForm->field($tbDinas, 'jenis_kerjasama') ?>
                                <?= $alamatForm->field($tbDinas, 'no_thn_kerjasama') ?>
                                <?= $alamatForm->field($tbDinas, 'tgl_mulai') ?>
                                <?= $alamatForm->field($tbDinas, 'tgl_akhir') ?>
                                <?= $alamatForm->field($tbDinas, 'inisiator') ?>
                                <?= $alamatForm->field($tbDinas, 'keterangan') ?>
                                <?= $alamatForm->field($tbDinas, 'no_telp') ?>
                                <?= $alamatForm->field($tbDinas, 'no_fax') ?>
                                <?= $alamatForm->field($tbDinas, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbDinas, 'email_utama') ?>

                            <?= $alamatForm->field($tbDinas, 'alamat') ?>
                            <?= $alamatForm->field($tbDinas, 'kelurahan') ?>
                            <?= $alamatForm->field($tbDinas, 'kecamatan') ?>
                            <?= $alamatForm->field($tbDinas, 'kota') ?>
                            <?= $alamatForm->field($tbDinas, 'kode_pos') ?>
                            <?= $alamatForm->field($tbDinas, 'rt_rw') ?>
                            <?= $alamatForm->field($tbDinas, 'kontak_person') ?>
                            <?= $alamatForm->field($tbDinas, 'link_maps') ?>
                            <?= $alamatForm->field($tbDinas, 'link_facebook') ?>
                            <?= $alamatForm->field($tbDinas, 'link_instagram') ?>
                            <?= $alamatForm->field($tbDinas, 'link_twitter') ?>
                            <?= $alamatForm->field($tbDinas, 'link_youtube') ?>
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
            'action' => ['/profile/update-dokdinas'],
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


                    <?= $alamatForm->field($tbDinas, 'dok_mou', [
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

                    <?= $alamatForm->field($tbDinas, 'dok_moa', [
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
                        $tbDinas,
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