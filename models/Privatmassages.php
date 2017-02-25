<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "privatmassages".
 *
 * @property integer $id
 * @property integer $id_user
 * @property string $text
 * @property string $date
 * @property integer $club_id
 * @property integer $for_id
 * @property integer $read
 */
class Privatmassages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'privatmassages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'text', 'date', 'club_id', 'for_id', 'read'], 'required'],
            [['id_user', 'club_id', 'for_id', 'read'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'text' => 'Text',
            'date' => 'Date',
            'club_id' => 'Club ID',
            'for_id' => 'For ID',
            'read' => 'Read',
        ];
    }
}
