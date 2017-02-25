<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addrequests".
 *
 * @property integer $id
 * @property integer $id_club
 * @property integer $id_user
 */
class Addrequests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addrequests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_club', 'id_user'], 'required'],
            [['id_club', 'id_user'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_club' => 'Id Club',
            'id_user' => 'Id User',
        ];
    }
}
