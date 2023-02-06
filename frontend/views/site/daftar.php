<?php

use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

/** @var \common\models\User $user */
/** @var \yii\web\View $this */
/** @var \backend\models\TbIndustri $tbIndustri */


?>

<div class="row">
    <div class="col ">
        <div class="container-fluid position-relative">
            <div class="py-4 bg-light left-0 z-index-3 w-100" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'padding': {'top': 70}}">
                <div class="text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400" data-appear-animation-duration="750">
                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center mb-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*', 'useHash': false}">
                        <li class="nav-item " data-option-value=".classic"><a class="nav-link custom-nav-link " href="<?= Url::toRoute(['/profile/akun']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Profile</a></li>
                        <li class="nav-item active" data-option-value=".new"><a class="nav-link custom-nav-link" href="<?= Url::toRoute(['/profile/index']) ?>" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Lengkapi Data</a></li>
                        <li class="nav-item" data-option-value=".classic"><a class="nav-link custom-nav-link" href="#demos" data-hash data-hash-offset="0" data-hash-offset-lg="-200">Classic</a></li>
                    </ul>
                </div>
            </div>
            <?php if (Yii::$app->user->identity->role == 'industri') { ?>
                <div class="card bg-primary">
                    <div class="card-header text-center bg-secondary">
                        <h2 style="color: white;"> Lengkapi Data </h2>
                    </div>
                    <div class="card-body">
                        <?php \yii\widgets\Pjax::begin([
                            'enablePushState' => false
                        ]) ?>
                        <?php echo $this->render('tb_industri', [
                            'tbIndustri' => $tbIndustri
                        ]) ?>
                        <?php \yii\widgets\Pjax::end() ?>
                    </div>
                </div>
            <?php
            } else {
            ?>

                }
            <?php } ?>


        </div>

    </div>
</div>

</div>