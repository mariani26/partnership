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
            'action' => ['/profile/update-alamatorganisasieng'],
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
                                <?= $alamatForm->field($tbOrganisasiEng, 'organization_name') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'organizational_field') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'start_date') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'end_date') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'initiator') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'description') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbOrganisasiEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbOrganisasiEng, 'main_email') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'address') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'city') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'state') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'country') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'map_link') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbOrganisasiEng, 'youtube_link') ?>
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
            'action' => ['/profile/update-docorganisasieng'],
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


                    <?= $alamatForm->field($tbOrganisasiEng, 'doc_mou', [
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

                    <?= $alamatForm->field($tbOrganisasiEng, 'doc_moa', [
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
                        $tbOrganisasiEng,
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