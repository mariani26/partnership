<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_student_eng".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $date_of_birth
 * @property string|null $gender
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $zipcode
 * @property string|null $major
 * @property string|null $original_college
 * @property string|null $email
 * @property string|null $phone_number
 * @property string|null $application_letter
 * @property string|null $biodata
 * @property string|null $photo
 * @property string|null $certificate
 * @property string|null $passport
 * @property string|null $financial_guarantee_letter
 * @property string|null $health_certificate
 * @property string|null $statement_letter
 * @property string|null $campus_recommendation_letter
 * @property string|null $achievement
 * @property int $user_id
 */
class TbStudentEng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_student_eng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_birth'], 'safe'],
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'gender', 'address', 'city', 'state', 'country', 'zipcode', 'major', 'original_college', 'email', 'application_letter', 'biodata', 'photo', 'certificate', 'passport', 'financial_guarantee_letter', 'health_certificate', 'statement_letter', 'campus_recommendation_letter', 'achievement'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zipcode' => 'Zipcode',
            'major' => 'Major',
            'original_college' => 'Original College',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'application_letter' => 'Application Letter',
            'biodata' => 'Biodata',
            'photo' => 'Photo',
            'certificate' => 'Certificate',
            'passport' => 'Passport',
            'financial_guarantee_letter' => 'Financial Guarantee Letter',
            'health_certificate' => 'Health Certificate',
            'statement_letter' => 'Statement Letter',
            'campus_recommendation_letter' => 'Campus Recommendation Letter',
            'achievement' => 'Achievement',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
