<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faq_eng".
 *
 * @property int $id
 * @property string $title
 * @property string $isi
 */
class FaqEng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq_eng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'isi'], 'required'],
            [['isi'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'isi' => 'Isi',
        ];
    }
}
