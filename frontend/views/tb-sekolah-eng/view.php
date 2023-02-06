<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\TbSekolahEng $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Sekolah Engs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-sekolah-eng-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'school_name',
            'cooperation_field',
            'collaboration_title',
            'type_of_cooperation',
            'collaboration_year_number',
            'start_date',
            'end_date',
            'doc_mou',
            'doc_moa',
            'doc_imp',
            'initiator',
            'description',
            'main_email:email',
            'phone_number',
            'fax_number',
            'website',
            'address:ntext',
            'city',
            'state',
            'country',
            'zipcode',
            'contact_person',
            'map_link:ntext',
            'facebook_link:ntext',
            'instagram_link:ntext',
            'twitter_link:ntext',
            'youtube_link:ntext',
            'user_id',
        ],
    ]) ?>

</div>
