<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "infoadmins".
 *
 * @property integer $id
 * @property string $private
 * @property integer $id_user
 * @property string $name
 * @property string $sur_name
 * @property string $father_name
 * @property string $born_date
 * @property integer $fly_since
 * @property string $favorite_type
 * @property string $marker_bc
 * @property string $type_license
 * @property string $another_marks
 * @property string $license_till
 * @property integer $graph
 * @property string $graph_till
 * @property string $adress
 * @property string $city
 * @property string $about_me
 */
class Infoadmins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'infoadmins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['private', 'id_user', 'name', 'sur_name', 'father_name', 'born_date', 'fly_since', 'favorite_type', 'marker_bc', 'type_license', 'another_marks', 'license_till', 'graph', 'graph_till', 'adress', 'city', 'about_me'], 'required'],
            [['id_user', 'fly_since', 'graph'], 'integer'],
            [['born_date', 'license_till', 'graph_till'], 'safe'],
            [['about_me'], 'string'],
            [['private'], 'string', 'max' => 5],
            [['name', 'sur_name', 'father_name', 'favorite_type', 'marker_bc', 'type_license', 'another_marks', 'city'], 'string', 'max' => 55],
            [['adress'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'private' => 'Private',
            'id_user' => 'Id User',
            'name' => 'Name',
            'sur_name' => 'Sur Name',
            'father_name' => 'Father Name',
            'born_date' => 'Born Date',
            'fly_since' => 'Fly Since',
            'favorite_type' => 'Favorite Type',
            'marker_bc' => 'Marker Bc',
            'type_license' => 'Type License',
            'another_marks' => 'Another Marks',
            'license_till' => 'License Till',
            'graph' => 'Graph',
            'graph_till' => 'Graph Till',
            'adress' => 'Adress',
            'city' => 'City',
            'about_me' => 'About Me',
        ];
    }
}
