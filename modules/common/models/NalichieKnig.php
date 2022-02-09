<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "nalichie_knig".
 *
 * @property int $id
 * @property int $id_otdel
 * @property int $id_book
 * @property int|null $kolichestvo
 *
 * @property Books $book
 * @property Otdel $otdel
 */
class Nalichieknig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nalichie_knig';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_otdel', 'id_book'], 'required'],
            [['id_otdel', 'id_book', 'kolichestvo'], 'integer'],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['id_book' => 'id']],
            [['id_otdel'], 'exist', 'skipOnError' => true, 'targetClass' => Otdel::className(), 'targetAttribute' => ['id_otdel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_otdel' => 'Id Otdel',
            'id_book' => 'Id Book',
            'kolichestvo' => 'Kolichestvo',
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
     * Gets query for [[Otdel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtdel()
    {
        return $this->hasOne(Otdel::className(), ['id' => 'id_otdel']);
    }
}
