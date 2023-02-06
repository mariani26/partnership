<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbDinas $tbDinas */

?>
<div class="row">
    <div class="col">
        <?php if (isset($success) && $success) : ?>
            <div class="alert alert-success">

                Data Completed Successfully
            </div>
        <?php endif ?>

        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatdinaseng'],
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
                                <?= $alamatForm->field($tbDinasEng, 'agency_name') ?>
                                <?= $alamatForm->field($tbDinasEng, 'cooperation_field') ?>
                                <?= $alamatForm->field($tbDinasEng, 'collaboration_title') ?>
                                <?= $alamatForm->field($tbDinasEng, 'type_of_cooperation') ?>
                                <?= $alamatForm->field($tbDinasEng, 'collaboration_year_number') ?>
                                <?= $alamatForm->field($tbDinasEng, 'start_date') ?>
                                <?= $alamatForm->field($tbDinasEng, 'end_date') ?>
                                <?= $alamatForm->field($tbDinasEng, 'initiator') ?>
                                <?= $alamatForm->field($tbDinasEng, 'description') ?>
                                <?= $alamatForm->field($tbDinasEng, 'phone_number') ?>
                                <?= $alamatForm->field($tbDinasEng, 'fax_number') ?>
                                <?= $alamatForm->field($tbDinasEng, 'website') ?>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <?= $alamatForm->field($tbDinasEng, 'main_email') ?>
                            <?= $alamatForm->field($tbDinasEng, 'address') ?>
                            <?= $alamatForm->field($tbDinasEng, 'city') ?>
                            <?= $alamatForm->field($tbDinasEng, 'state') ?>
                            <?= $alamatForm->field($tbDinasEng, 'country') ?>
                            <?= $alamatForm->field($tbDinasEng, 'zipcode') ?>
                            <?= $alamatForm->field($tbDinasEng, 'contact_person') ?>
                            <?= $alamatForm->field($tbDinasEng, 'map_link') ?>
                            <?= $alamatForm->field($tbDinasEng, 'facebook_link') ?>
                            <?= $alamatForm->field($tbDinasEng, 'instagram_link') ?>
                            <?= $alamatForm->field($tbDinasEng, 'twitter_link') ?>
                            <?= $alamatForm->field($tbDinasEng, 'youtube_link') ?>
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
            'action' => ['/profile/update-docdinaseng'],
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


                    <?= $alamatForm->field($tbDinasEng, 'doc_mou', [
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

                    <?= $alamatForm->field($tbDinasEng, 'doc_moa', [
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
                        $tbDinasEng,
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