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
            'action' => ['/profile/update-alamatnpoeng'],
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
                                <?= $alamatForm->field($tbNpoEng, 'npo_name') ?>
                                <?= $alamatForm->field($tbNpoEng, 'npo_field') ?>
                                <?= $alamatForm->field($tbNpoEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbNpoEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbNpoEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbNpoEng, 'start_date') ?>
                                <?= $alamatForm->field($tbNpoEng, 'end_date') ?>
                                <?= $alamatForm->field($tbNpoEng, 'initiator') ?>
                                <?= $alamatForm->field($tbNpoEng, 'description') ?>
                                <?= $alamatForm->field($tbNpoEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbNpoEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbNpoEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbNpoEng, 'email') ?>
                            <?= $alamatForm->field($tbNpoEng, 'address') ?>
                            <?= $alamatForm->field($tbNpoEng, 'city') ?>
                            <?= $alamatForm->field($tbNpoEng, 'state') ?>
                            <?= $alamatForm->field($tbNpoEng, 'country') ?>
                            <?= $alamatForm->field($tbNpoEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbNpoEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbNpoEng, 'map_link') ?>
                            <?= $alamatForm->field($tbNpoEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbNpoEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbNpoEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbNpoEng, 'youtube_link') ?>
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
            'action' => ['/profile/update-docnpoeng'],
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


                    <?= $alamatForm->field($tbNpoEng, 'doc_mou', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'doc_mou']) ?>

                    <?= $alamatForm->field($tbNpoEng, 'doc_moa', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'doc_moa']) ?>



                    <?= $alamatForm->field(
                        $tbNpoEng,
                        'doc_imp',
                        []
                    )->fileInput(['id' => 'doc_imp']) ?>


                </div>
                <button class="btn btn-success"> Send</button>
            </div>
            <?php ActiveForm::end() ?>
        </div>




        <br>
    </div>



</div>