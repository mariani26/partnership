<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "choose".
 *
 * @property int $id
 * @property string|null $title1
 * @property string|null $title2
 * @property string|null $isi
 */
class Choose extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choose';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title1', 'title2'], 'string', 'max' => 255],
            [['isi'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title1' => 'Title1',
            'title2' => 'Title2',
            'isi' => 'Isi',
        ];
    }
}
