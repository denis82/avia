<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "massages".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $club_id
 * @property string $text
 * @property string $date
 * @property string $for_id
 * @property integer $privat
 * @property string $status
 */
class Massages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'massages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'club_id', 'text', 'date', 'for_id', 'privat', 'status'], 'required'],
            [['id_user', 'club_id', 'privat'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['for_id'], 'string', 'max' => 5],
            [['status'], 'string', 'max' => 10],
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
            'club_id' => 'Club ID',
            'text' => 'Text',
            'date' => 'Date',
            'for_id' => 'For ID',
            'privat' => 'Privat',
            'status' => 'Status',
        ];
    }
}
