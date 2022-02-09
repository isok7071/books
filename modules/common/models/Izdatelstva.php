<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "izdatelstva".
 *
 * @property int $id
 * @property string $name
 * @property string $fiz_addr
 * @property string|null $uridich_addr
 *
 * @property Books[] $books
 */
class Izdatelstva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izdatelstva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fiz_addr'], 'required'],
            [['name', 'fiz_addr', 'uridich_addr'], 'string', 'max' => 255],
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
            'fiz_addr' => 'Fiz Addr',
            'uridich_addr' => 'Uridich Addr',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id_izd' => 'id']);
    }
}
