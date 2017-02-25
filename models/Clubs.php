<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clubs".
 *
 * @property integer $id
 * @property string $club_uniq
 * @property string $club_name
 * @property integer $user_id
 * @property string $city
 * @property string $adress_ur
 * @property string $time_origin
 * @property string $time_end
 * @property string $ava_club
 * @property string $user_request
 * @property integer $tax
 * @property string $about_club
 * @property string $link_map
 * @property integer $region_id
 */
class Clubs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clubs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_uniq', 'club_name', 'user_id', 'city', 'adress_ur', 'time_origin', 'time_end', 'ava_club', 'user_request', 'tax', 'about_club', 'link_map', 'region_id'], 'required'],
            [['user_id', 'tax', 'region_id'], 'integer'],
            [['time_origin', 'time_end'], 'safe'],
            [['about_club'], 'string'],
            [['club_uniq', 'club_name', 'ava_club'], 'string', 'max' => 32],
            [['city', 'user_request'], 'string', 'max' => 55],
            [['adress_ur'], 'string', 'max' => 60],
            [['link_map'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_uniq' => 'Club Uniq',
            'club_name' => 'Club Name',
            'user_id' => 'User ID',
            'city' => 'City',
            'adress_ur' => 'Adress Ur',
            'time_origin' => 'Time Origin',
            'time_end' => 'Time End',
            'ava_club' => 'Ava Club',
            'user_request' => 'User Request',
            'tax' => 'Tax',
            'about_club' => 'About Club',
            'link_map' => 'Link Map',
            'region_id' => 'Region ID',
        ];
    }
}
