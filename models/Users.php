<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $id_club
 * @property string $email
 * @property integer $hashcode
 * @property string $lifetimehash
 * @property string $username
 * @property string $password
 * @property integer $logins
 * @property integer $last_login
 * @property string $img
 * @property string $first_name
 * @property string $telephone
 * @property integer $category
 * @property integer $user_status
 *
 * @property RolesUsers[] $rolesUsers
 * @property Roles[] $roles
 * @property UserTokens[] $userTokens
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_club', 'email', 'hashcode', 'lifetimehash', 'password', 'img', 'first_name', 'telephone', 'category', 'user_status'], 'required'],
            [['id_club', 'hashcode', 'logins', 'last_login', 'category', 'user_status'], 'integer'],
            [['lifetimehash'], 'safe'],
            [['email'], 'string', 'max' => 254],
            [['username', 'telephone'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 64],
            [['img', 'first_name'], 'string', 'max' => 55],
            [['username'], 'unique'],
            [['email'], 'unique'],
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
            'email' => 'Email',
            'hashcode' => 'Hashcode',
            'lifetimehash' => 'Lifetimehash',
            'username' => 'Username',
            'password' => 'Password',
            'logins' => 'Logins',
            'last_login' => 'Last Login',
            'img' => 'Img',
            'first_name' => 'First Name',
            'telephone' => 'Telephone',
            'category' => 'Category',
            'user_status' => 'User Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolesUsers()
    {
        return $this->hasMany(RolesUsers::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasMany(Roles::className(), ['id' => 'role_id'])->viaTable('roles_users', ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserTokens()
    {
        return $this->hasMany(UserTokens::className(), ['user_id' => 'id']);
    }
}
