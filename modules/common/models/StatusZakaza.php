<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "status_zakaza".
 *
 * @property int $id
 * @property string $status_name
 *
 * @property Zakaz[] $zakazs
 */
class Statuszakaza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_zakaza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_name'], 'required'],
            [['status_name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Name',
        ];
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['id_status' => 'id']);
    }
}
