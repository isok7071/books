<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $otchestvo
 * @property string $username
 * @property string|null $auth_key
 * @property string|null $accessToken
 * @property string $password_hash
 * @property string|null $addr_dostavki
 * @property string $tel
 * @property string $email
 * @property int|null $status
 *
 * @property Zakaz[] $zakazs
 * @property Zakaz[] $zakazs0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'otchestvo', 'username', 'password_hash', 'tel', 'email'], 'required'],
            [['status'], 'integer'],
            [['name', 'surname', 'otchestvo', 'email'], 'string', 'max' => 80],
            [['username'], 'string', 'max' => 100],
            [['auth_key', 'accessToken', 'addr_dostavki'], 'string', 'max' => 500],
            [['password_hash'], 'string', 'max' => 120],
            [['tel'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'otchestvo' => 'Otchestvo',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'accessToken' => 'Access Token',
            'password_hash' => 'Password Hash',
            'addr_dostavki' => 'Addr Dostavki',
            'tel' => 'Tel',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['id_user' => 'id']);
    }

    /**
     * Gets query for [[Zakazs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs0()
    {
        return $this->hasMany(Zakaz::className(), ['adress_dostavki' => 'id']);
    }
}
