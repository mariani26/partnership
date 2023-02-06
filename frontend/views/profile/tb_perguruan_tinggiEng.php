<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbPerguruanTinggi $tbPerguruanTinggi */

?>
<div class="row">
    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatpteng'],
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
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'college_name') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'cooperation_field') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'start_date') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'end_date') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'initiator') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'description') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbPerguruanTinggiEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'main_email') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'address') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'city') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'state') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'country') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'map_link') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbPerguruanTinggiEng, 'youtube_link') ?>
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
            'action' => ['/profile/update-docpteng'],
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


                    <?= $alamatForm->field($tbPerguruanTinggiEng, 'doc_mou', [
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

                    <?= $alamatForm->field($tbPerguruanTinggiEng, 'doc_moa', [
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
                        $tbPerguruanTinggiEng,
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