<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_dinas_eng".
 *
 * @property int $id
 * @property string $agency_name
 * @property string|null $cooperation_field
 * @property string|null $collaboration_title
 * @property string|null $type_of_cooperation
 * @property string|null $collaboration_year_number
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $doc_mou
 * @property string|null $doc_moa
 * @property string|null $doc_imp
 * @property string|null $initiator
 * @property string|null $description
 * @property string $main_email
 * @property string|null $phone_number
 * @property string|null $fax_number
 * @property string|null $website
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property string|null $zipcode
 * @property string|null $contact_person
 * @property string|null $map_link
 * @property string|null $facebook_link
 * @property string|null $instagram_link
 * @property string|null $twitter_link
 * @property string|null $youtube_link
 * @property int $user_id
 */
class TbDinasEng extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dinas_eng';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agency_name', 'main_email', 'user_id'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['address', 'map_link', 'facebook_link', 'instagram_link', 'twitter_link', 'youtube_link'], 'string'],
            [['user_id'], 'integer'],
            [['agency_name', 'cooperation_field', 'collaboration_title', 'type_of_cooperation', 'collaboration_year_number', 'doc_mou', 'doc_moa', 'doc_imp', 'initiator', 'description', 'main_email', 'website', 'city', 'state', 'country'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 16],
            [['fax_number', 'contact_person'], 'string', 'max' => 25],
            [['zipcode'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agency_name' => 'Agency Name',
            'cooperation_field' => 'Cooperation Field',
            'collaboration_title' => 'Collaboration Title',
            'type_of_cooperation' => 'Type Of Cooperation',
            'collaboration_year_number' => 'Collaboration Year Number',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'doc_mou' => 'Doc Mou',
            'doc_moa' => 'Doc Moa',
            'doc_imp' => 'Doc Imp',
            'initiator' => 'Initiator',
            'description' => 'Description',
            'main_email' => 'Main Email',
            'phone_number' => 'Phone Number',
            'fax_number' => 'Fax Number',
            'website' => 'Website',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zipcode' => 'Zipcode',
            'contact_person' => 'Contact Person',
            'map_link' => 'Map Link',
            'facebook_link' => 'Facebook Link',
            'instagram_link' => 'Instagram Link',
            'twitter_link' => 'Twitter Link',
            'youtube_link' => 'Youtube Link',
            'user_id' => 'User ID',
        ];
    }
}
