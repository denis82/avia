<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planes".
 *
 * @property integer $id
 * @property integer $id_club
 * @property string $plane
 * @property string $plane_img
 * @property integer $transport
 * @property integer $ser_num
 * @property string $reg_num
 * @property string $date_reliased
 * @property string $property
 * @property string $city
 * @property string $club_name
 * @property integer $transprt_nalog
 * @property string $sertificat_fly_price
 * @property integer $price_insurance
 * @property string $insuarence_pl
 * @property string $register
 * @property string $type
 * @property integer $power_of_engine
 * @property string $type_of_engine
 * @property integer $mileage
 * @property integer $weigth
 * @property integer $sertificat
 * @property string $best_to
 * @property integer $insurance
 * @property integer $fuel_consumption
 * @property integer $hour_trafic_fuel
 * @property integer $fuel_price
 * @property integer $price_sertificat
 * @property string $else_pl
 * @property string $broken_down
 */
class Planes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_club', 'plane', 'plane_img', 'transport', 'ser_num', 'reg_num', 'date_reliased', 'property', 'city', 'club_name', 'transprt_nalog', 'sertificat_fly_price', 'price_insurance', 'insuarence_pl', 'register', 'type', 'power_of_engine', 'type_of_engine', 'mileage', 'weigth', 'sertificat', 'best_to', 'insurance', 'fuel_consumption', 'hour_trafic_fuel', 'fuel_price', 'price_sertificat', 'else_pl', 'broken_down'], 'required'],
            [['id_club', 'transport', 'ser_num', 'transprt_nalog', 'price_insurance', 'power_of_engine', 'mileage', 'weigth', 'sertificat', 'insurance', 'fuel_consumption', 'hour_trafic_fuel', 'fuel_price', 'price_sertificat'], 'integer'],
            [['date_reliased', 'best_to'], 'safe'],
            [['broken_down'], 'string'],
            [['plane', 'insuarence_pl'], 'string', 'max' => 25],
            [['plane_img', 'reg_num', 'sertificat_fly_price'], 'string', 'max' => 15],
            [['property', 'city', 'club_name'], 'string', 'max' => 11],
            [['register', 'type', 'type_of_engine', 'else_pl'], 'string', 'max' => 55],
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
            'plane' => 'Plane',
            'plane_img' => 'Plane Img',
            'transport' => 'Transport',
            'ser_num' => 'Ser Num',
            'reg_num' => 'Reg Num',
            'date_reliased' => 'Date Reliased',
            'property' => 'Property',
            'city' => 'City',
            'club_name' => 'Club Name',
            'transprt_nalog' => 'Transprt Nalog',
            'sertificat_fly_price' => 'Sertificat Fly Price',
            'price_insurance' => 'Price Insurance',
            'insuarence_pl' => 'Insuarence Pl',
            'register' => 'Register',
            'type' => 'Type',
            'power_of_engine' => 'Power Of Engine',
            'type_of_engine' => 'Type Of Engine',
            'mileage' => 'Mileage',
            'weigth' => 'Weigth',
            'sertificat' => 'Sertificat',
            'best_to' => 'Best To',
            'insurance' => 'Insurance',
            'fuel_consumption' => 'Fuel Consumption',
            'hour_trafic_fuel' => 'Hour Trafic Fuel',
            'fuel_price' => 'Fuel Price',
            'price_sertificat' => 'Price Sertificat',
            'else_pl' => 'Else Pl',
            'broken_down' => 'Broken Down',
        ];
    }
}
