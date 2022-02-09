<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "goroda_otdeleniy".
 *
 * @property int $id
 * @property string $gorod_name
 *
 * @property Otdel[] $otdels
 */
class Gorodaotdeleniy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goroda_otdeleniy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gorod_name'], 'required'],
            [['gorod_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gorod_name' => 'Gorod Name',
        ];
    }

    /**
     * Gets query for [[Otdels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtdels()
    {
        return $this->hasMany(Otdel::className(), ['id_gorod' => 'id']);
    }
}
