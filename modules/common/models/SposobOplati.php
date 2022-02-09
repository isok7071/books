<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "sposob_oplati".
 *
 * @property int $id
 * @property string $name
 *
 * @property Zakaz[] $zakazs
 */
class Sposoboplati extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sposob_oplati';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['id_sposob_oplati' => 'id']);
    }
}
