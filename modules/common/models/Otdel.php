<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "otdel".
 *
 * @property int $id
 * @property string $name_otdeleniya
 * @property string $addres
 * @property int $id_gorod
 * @property string $tel
 *
 * @property GorodaOtdeleniy $gorod
 * @property NalichieKnig[] $nalichieKnigs
 */
class Otdel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'otdel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_otdeleniya', 'addres', 'id_gorod', 'tel'], 'required'],
            [['id_gorod'], 'integer'],
            [['name_otdeleniya', 'addres'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 12],
            [['id_gorod'], 'exist', 'skipOnError' => true, 'targetClass' => GorodaOtdeleniy::className(), 'targetAttribute' => ['id_gorod' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_otdeleniya' => 'Name Otdeleniya',
            'addres' => 'Addres',
            'id_gorod' => 'Id Gorod',
            'tel' => 'Tel',
        ];
    }

    /**
     * Gets query for [[Gorod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGorod()
    {
        return $this->hasOne(GorodaOtdeleniy::className(), ['id' => 'id_gorod']);
    }

    /**
     * Gets query for [[NalichieKnigs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNalichieKnigs()
    {
        return $this->hasMany(NalichieKnig::className(), ['id_otdel' => 'id']);
    }
}
