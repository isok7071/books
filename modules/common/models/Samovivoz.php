<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "samovivoz".
 *
 * @property int $id
 * @property string $address
 *
 * @property Zakaz[] $zakazs
 */
class Samovivoz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'samovivoz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address'], 'required'],
            [['address'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['id_samovivoza' => 'id']);
    }
}
