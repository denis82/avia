<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservations".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_plane
 * @property string $date_reserv
 * @property string $status
 * @property string $date_finish
 * @property string $order_uniq
 * @property string $start_time
 * @property string $finish_time
 * @property double $bill
 * @property integer $fly_time
 */
class Reservations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_plane', 'date_reserv', 'status', 'date_finish', 'order_uniq', 'start_time', 'finish_time', 'bill', 'fly_time'], 'required'],
            [['id_user', 'id_plane', 'fly_time'], 'integer'],
            [['date_reserv', 'date_finish', 'start_time', 'finish_time'], 'safe'],
            [['bill'], 'number'],
            [['status'], 'string', 'max' => 32],
            [['order_uniq'], 'string', 'max' => 50],
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
            'id_plane' => 'Id Plane',
            'date_reserv' => 'Date Reserv',
            'status' => 'Status',
            'date_finish' => 'Date Finish',
            'order_uniq' => 'Order Uniq',
            'start_time' => 'Start Time',
            'finish_time' => 'Finish Time',
            'bill' => 'Bill',
            'fly_time' => 'Fly Time',
        ];
    }
}
