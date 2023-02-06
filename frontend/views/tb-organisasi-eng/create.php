<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TbOrganisasiEng $model */

$this->title = 'Create Tb Organisasi Eng';
$this->params['breadcrumbs'][] = ['label' => 'Tb Organisasi Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-organisasi-eng-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
