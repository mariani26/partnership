<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbSekolahEng $model */

$this->title = 'Create Sekolah';
$this->params['breadcrumbs'][] = ['label' => 'Tb Sekolah Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-sekolah-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
