<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "genres".
 *
 * @property int $id_genre
 * @property string $name
 *
 * @property BookGenres[] $bookGenres
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_genre' => 'Id Genre',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[BookGenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookGenres()
    {
        return $this->hasMany(BookGenres::className(), ['id_genre' => 'id_genre']);
    }
}
