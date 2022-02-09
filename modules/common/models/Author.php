<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $otchestvo
 * @property string|null $psevdonim
 *
 * @property Authorstvo[] $authorstvos
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'required'],
            [['name', 'surname', 'otchestvo', 'psevdonim'], 'string', 'max' => 255],
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
            'psevdonim' => 'Psevdonim',
        ];
    }

    /**
     * Gets query for [[Authorstvos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorstvos()
    {
        return $this->hasMany(Authorstvo::className(), ['id_author' => 'id']);
    }
}
