<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "spisok_books_zakaza".
 *
 * @property int $id
 * @property int $id_zakaz
 * @property int $id_book
 *
 * @property Books $book
 * @property Zakaz $zakaz
 * @property Zakaz[] $zakazs
 */
class Spisokbookszakaza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spisok_books_zakaza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_zakaz', 'id_book'], 'required'],
            [['id_zakaz', 'id_book'], 'integer'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['id_book' => 'id']],
            [['id_zakaz'], 'exist', 'skipOnError' => true, 'targetClass' => Zakaz::className(), 'targetAttribute' => ['id_zakaz' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_zakaz' => 'Id Zakaz',
            'id_book' => 'Id Book',
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'id_book']);
    }

    /**
     * Gets query for [[Zakaz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakaz()
    {
        return $this->hasOne(Zakaz::className(), ['id' => 'id_zakaz']);
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['id_spisok_books' => 'id']);
    }
}
