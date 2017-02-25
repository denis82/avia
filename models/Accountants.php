<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accountants".
 *
 * @property integer $id
 * @property integer $id_club
 * @property integer $id_month
 * @property string $insuarence_pl
 * @property string $sertif_fly
 * @property integer $transport_bill
 * @property string $year
 * @property integer $credit
 * @property integer $advertise
 * @property integer $rent_garage
 * @property integer $rent_office
 * @property integer $pay_adm
 * @property integer $pay_office
 * @property integer $dinner
 * @property integer $barbequ
 * @property integer $reserv_suar_day
 */
class Accountants extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accountants';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_club', 'id_month', 'insuarence_pl', 'sertif_fly', 'transport_bill', 'year', 'credit', 'advertise', 'rent_garage', 'rent_office', 'pay_adm', 'pay_office', 'dinner', 'barbequ', 'reserv_suar_day'], 'required'],
            [['id_club', 'id_month', 'transport_bill', 'credit', 'advertise', 'rent_garage', 'rent_office', 'pay_adm', 'pay_office', 'dinner', 'barbequ', 'reserv_suar_day'], 'integer'],
            [['year'], 'safe'],
            [['insuarence_pl', 'sertif_fly'], 'string', 'max' => 50],
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
            'id_month' => 'Id Month',
            'insuarence_pl' => 'Insuarence Pl',
            'sertif_fly' => 'Sertif Fly',
            'transport_bill' => 'Transport Bill',
            'year' => 'Year',
            'credit' => 'Credit',
            'advertise' => 'Advertise',
            'rent_garage' => 'Rent Garage',
            'rent_office' => 'Rent Office',
            'pay_adm' => 'Pay Adm',
            'pay_office' => 'Pay Office',
            'dinner' => 'Dinner',
            'barbequ' => 'Barbequ',
            'reserv_suar_day' => 'Reserv Suar Day',
        ];
    }
}
