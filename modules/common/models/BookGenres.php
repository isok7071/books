<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "book_genres".
 *
 * @property int $id
 * @property int $id_genre
 * @property int $id_book
 *
 * @property Books $book
 * @property Genres $genre
 */
class Bookgenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_genre', 'id_book'], 'required'],
            [['id_genre', 'id_book'], 'integer'],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genres::className(), 'targetAttribute' => ['id_genre' => 'id']],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['id_book' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_genre' => 'Id Genre',
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
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genres::className(), ['id' => 'id_genre']);
    }
}
