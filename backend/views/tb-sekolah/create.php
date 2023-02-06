<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TbSekolah $model */

$this->title = 'Create Sekolah';
$this->params['breadcrumbs'][] = ['label' => 'Tb Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-sekolah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
