<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about_eng".
 *
 * @property int $id
 * @property string $title
 * @property string $isi
 * @property string|null $gambar1
 * @property string|null $gambar2
 * @property string|null $gambar3
 */
class AboutEng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_eng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'isi'], 'required'],
            [['isi'], 'string'],
            [['title', 'gambar1', 'gambar2', 'gambar3'], 'string', 'max' => 255],
            ['mou', 'file', 'extensions' => ['png','jpg', 'jpeg'], 'maxSize' => 10 * 1024 * 1024],
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
            'gambar1' => 'Gambar1',
            'gambar2' => 'Gambar2',
            'gambar3' => 'Gambar3',
        ];
    }
}
