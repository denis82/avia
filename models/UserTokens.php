<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_tokens".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $user_agent
 * @property string $token
 * @property string $type
 * @property integer $created
 * @property integer $expires
 *
 * @property Users $user
 */
class UserTokens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_tokens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_agent', 'token', 'type', 'created', 'expires'], 'required'],
            [['user_id', 'created', 'expires'], 'integer'],
            [['user_agent', 'token'], 'string', 'max' => 40],
            [['type'], 'string', 'max' => 100],
            [['token'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'user_agent' => 'User Agent',
            'token' => 'Token',
            'type' => 'Type',
            'created' => 'Created',
            'expires' => 'Expires',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
