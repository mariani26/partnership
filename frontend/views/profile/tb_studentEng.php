<?php

use yii\bootstrap5\ActiveForm;

/** @var \yii\web\View $this */

/** @var \backend\models\TbStudent $tbStudent */

?>
<div class="row">
    <div class="col">


        <?php $alamatForm = ActiveForm::begin([
            'action' => ['/profile/update-alamatstudenteng'],
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
                                <?= $alamatForm->field($tbStudentEng, 'name') ?>
                                <?= $alamatForm->field($tbStudentEng, 'date_of_birth') ?>

                                <?= $alamatForm->field($tbStudentEng, 'gender') ?>
                                <?= $alamatForm->field($tbStudentEng, 'address') ?>
                                <?= $alamatForm->field($tbStudentEng, 'city') ?>
                                <?= $alamatForm->field($tbStudentEng, 'state') ?>
                                <?= $alamatForm->field($tbStudentEng, 'country') ?>
                                <?= $alamatForm->field($tbStudentEng, 'zipcode') ?>
                                <?= $alamatForm->field($tbStudentEng, 'major') ?>
                                <?= $alamatForm->field($tbStudentEng, 'original_college') ?>
                                <?= $alamatForm->field($tbStudentEng, 'email') ?>
                                <?= $alamatForm->field($tbStudentEng, 'phone_number') ?>
                            </div>
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
            'action' => ['/profile/update-docstudenteng'],
            'options' => [
                'data-pjax' => 1
            ]
        ]); ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b> Registration File </b>
                </div>
                <div class="card-body">


                    <?= $alamatForm->field($tbStudentEng, 'application_letter', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'application_letter']) ?>

                    <?= $alamatForm->field($tbStudentEng, 'biodata', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'biodata']) ?>

                    <?= $alamatForm->field($tbStudentEng, 'photo', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'photo']) ?>

                    <?= $alamatForm->field($tbStudentEng, 'certificate', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'certificate']) ?>

                    <?= $alamatForm->field($tbStudentEng, 'passport', [
                        //                 'template' => '
                        //     <div class="custom-file">
                        //     {label}    
                        //     {input}

                        //         {error}
                        //     </div>
                        // ',
                        //                 'labelOptions' => ['class' => 'custom-file-label'],
                        //                 'inputOptions' => ['class' => 'custom-file-input']
                    ])->fileInput(['id' => 'passport']) ?>



                    <?= $alamatForm->field(
                        $tbStudentEng,
                        'financial_guarantee_letter',
                        []
                    )->fileInput(['id' => 'financial_guarantee_letter']) ?>

                    <?= $alamatForm->field(
                        $tbStudentEng,
                        'health_certificate',
                        []
                    )->fileInput(['id' => 'health_certificate']) ?>

                    <?= $alamatForm->field(
                        $tbStudentEng,
                        'statement_letter',
                        []
                    )->fileInput(['id' => 'statement_letter']) ?>

                    <?= $alamatForm->field(
                        $tbStudentEng,
                        'campus_recommendation_letter',
                        []
                    )->fileInput(['id' => 'campus_recommendation_letter']) ?>

                    <?= $alamatForm->field(
                        $tbStudentEng,
                        'achievement',
                        []
                    )->fileInput(['id' => 'achievement']) ?>

                </div>
                <button class="btn btn-success"> Send</button>
            </div>
            <?php ActiveForm::end() ?>
        </div>




        <br>
    </div>



</div>