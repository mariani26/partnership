<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbSekolah $tbSekolah */

?>
<div class="row">
    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatsekolaheng'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header ">
                        <b> General Data </b>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <?= $alamatForm->field($tbSekolahEng, 'school_name') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'cooperation_field') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'start_date') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'end_date') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'initiator') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'description') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbSekolahEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbSekolahEng, 'main_email') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'address') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'city') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'state') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'country') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'map_link') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbSekolahEng, 'youtube_link') ?>
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

                Data Completed Successfully
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-docsekolaheng'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b> Supporting Data </b>
                </div>
                <div class="card-body">
                    <p>Please fill in one</p>


                    <?= $alamatForm->field($tbSekolahEng, 'doc_mou', [
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

                    <?= $alamatForm->field($tbSekolahEng, 'doc_moa', [
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
                        $tbSekolahEng,
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