<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "authorstvo".
 *
 * @property int $id
 * @property int $id_author
 * @property int $id_book
 *
 * @property Author $author
 * @property Books $book
 */
class Authorstvo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authorstvo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_author', 'id_book'], 'required'],
            [['id_author', 'id_book'], 'integer'],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['id_author' => 'id']],
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
            'id_author' => 'Id Author',
            'id_book' => 'Id Book',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'id_author']);
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
}
