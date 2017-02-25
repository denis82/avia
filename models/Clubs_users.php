<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clubs_users".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $club_id
 */
class Clubs_users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clubs_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'club_id'], 'required'],
            [['user_id', 'club_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'club_id' => 'Club ID',
        ];
    }
}
