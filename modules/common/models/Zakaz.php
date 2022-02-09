<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_spisok_books
 * @property int|null $adress_dostavki
 * @property int|null $id_samovivoza
 * @property string $data_zakaza
 * @property string $data_predpolag_dostavki
 * @property int $id_sposob_polucheniya
 * @property int $id_sposob_oplati
 * @property int $price
 * @property int $id_status
 *
 * @property User $adressDostavki
 * @property Samovivoz $samovivoza
 * @property SpisokBooksZakaza $spisokBooks
 * @property SpisokBooksZakaza[] $spisokBooksZakazas
 * @property SposobOplati $sposobOplati
 * @property SposobPolucheniya $sposobPolucheniya
 * @property StatusZakaza $status
 * @property User $user
 */
class Zakaz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_spisok_books', 'data_zakaza', 'data_predpolag_dostavki', 'id_sposob_polucheniya', 'id_sposob_oplati', 'price', 'id_status'], 'required'],
            [['id_user', 'id_spisok_books', 'adress_dostavki', 'id_samovivoza', 'id_sposob_polucheniya', 'id_sposob_oplati', 'price', 'id_status'], 'integer'],
            [['data_zakaza', 'data_predpolag_dostavki'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_spisok_books'], 'exist', 'skipOnError' => true, 'targetClass' => SpisokBooksZakaza::className(), 'targetAttribute' => ['id_spisok_books' => 'id']],
            [['id_sposob_polucheniya'], 'exist', 'skipOnError' => true, 'targetClass' => SposobPolucheniya::className(), 'targetAttribute' => ['id_sposob_polucheniya' => 'id']],
            [['id_sposob_oplati'], 'exist', 'skipOnError' => true, 'targetClass' => SposobOplati::className(), 'targetAttribute' => ['id_sposob_oplati' => 'id']],
            [['id_samovivoza'], 'exist', 'skipOnError' => true, 'targetClass' => Samovivoz::className(), 'targetAttribute' => ['id_samovivoza' => 'id']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusZakaza::className(), 'targetAttribute' => ['id_status' => 'id']],
            [['adress_dostavki'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['adress_dostavki' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_spisok_books' => 'Id Spisok Books',
            'adress_dostavki' => 'Adress Dostavki',
            'id_samovivoza' => 'Id Samovivoza',
            'data_zakaza' => 'Data Zakaza',
            'data_predpolag_dostavki' => 'Data Predpolag Dostavki',
            'id_sposob_polucheniya' => 'Id Sposob Polucheniya',
            'id_sposob_oplati' => 'Id Sposob Oplati',
            'price' => 'Price',
            'id_status' => 'Id Status',
        ];
    }

    /**
     * Gets query for [[AdressDostavki]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdressDostavki()
    {
        return $this->hasOne(User::className(), ['id' => 'adress_dostavki']);
    }

    /**
     * Gets query for [[Samovivoza]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSamovivoza()
    {
        return $this->hasOne(Samovivoz::className(), ['id' => 'id_samovivoza']);
    }

    /**
     * Gets query for [[SpisokBooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpisokBooks()
    {
        return $this->hasOne(SpisokBooksZakaza::className(), ['id' => 'id_spisok_books']);
    }

    /**
     * Gets query for [[SpisokBooksZakazas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpisokBooksZakazas()
    {
        return $this->hasMany(SpisokBooksZakaza::className(), ['id_zakaz' => 'id']);
    }

    /**
     * Gets query for [[SposobOplati]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSposobOplati()
    {
        return $this->hasOne(SposobOplati::className(), ['id' => 'id_sposob_oplati']);
    }

    /**
     * Gets query for [[SposobPolucheniya]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSposobPolucheniya()
    {
        return $this->hasOne(SposobPolucheniya::className(), ['id' => 'id_sposob_polucheniya']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(StatusZakaza::className(), ['id' => 'id_status']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
