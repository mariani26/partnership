<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbIndustri $tbIndustri */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Completed Successfully
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamateng'],
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
                                <?= $alamatForm->field($tbIndustriEng, 'industry_name') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'identity_number') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'director_identity') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'business_fields') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'start_date') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'end_date') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'initiator') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'description') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbIndustriEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbIndustriEng, 'main_email') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'backup_email') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'address') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'city') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'state') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'country') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'map_link') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbIndustriEng, 'youtube_link') ?>
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
            'action' => ['/profile/update-doceng'],
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


                    <?= $alamatForm->field($tbIndustriEng, 'doc_mou', [
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

                    <?= $alamatForm->field($tbIndustriEng, 'doc_moa', [
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
                        $tbIndustriEng,
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