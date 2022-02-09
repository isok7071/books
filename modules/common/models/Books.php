<?php

namespace app\modules\common\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string|null $oblojka
 * @property int|null $parent_book_id
 * @property int $id_lang
 * @property int $id_izd
 * @property int $id_format
 * @property int $kolvoStr
 * @property int $price
 * @property string $ISBN13
 * @property int $id_pereplet
 * @property string $god_izdaniya
 *
 * @property Authorstvo[] $authorstvos
 * @property BookGenres[] $bookGenres
 * @property Books[] $books
 * @property Format $format
 * @property Izdatelstva $izd
 * @property Languages $lang
 * @property NalichieKnig[] $nalichieKnigs
 * @property Books $parentBook
 * @property Pereplet $pereplet
 * @property SpisokBooksZakaza[] $spisokBooksZakazas
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_lang', 'id_izd', 'id_format', 'kolvoStr', 'price', 'ISBN13', 'id_pereplet', 'god_izdaniya'], 'required'],
            [['parent_book_id', 'id_lang', 'id_izd', 'id_format', 'kolvoStr', 'price', 'id_pereplet'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['oblojka'], 'string', 'max' => 500],
            [['ISBN13'], 'string', 'max' => 17],
            [['god_izdaniya'], 'string', 'max' => 13],
            [['id_format'], 'exist', 'skipOnError' => true, 'targetClass' => Format::className(), 'targetAttribute' => ['id_format' => 'id']],
            [['id_izd'], 'exist', 'skipOnError' => true, 'targetClass' => Izdatelstva::className(), 'targetAttribute' => ['id_izd' => 'id']],
            [['id_lang'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['id_lang' => 'id']],
            [['id_pereplet'], 'exist', 'skipOnError' => true, 'targetClass' => Pereplet::className(), 'targetAttribute' => ['id_pereplet' => 'id']],
            [['parent_book_id'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['parent_book_id' => 'id']],
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
            'oblojka' => 'Oblojka',
            'parent_book_id' => 'Parent Book ID',
            'id_lang' => 'Id Lang',
            'id_izd' => 'Id Izd',
            'id_format' => 'Id Format',
            'kolvoStr' => 'Kolvo Str',
            'price' => 'Price',
            'ISBN13' => 'Isbn13',
            'id_pereplet' => 'Id Pereplet',
            'god_izdaniya' => 'God Izdaniya',
        ];
    }

    /**
     * Gets query for [[Authorstvos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorstvos()
    {
        return $this->hasMany(Authorstvo::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[BookGenres]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookGenres()
    {
        return $this->hasMany(BookGenres::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['parent_book_id' => 'id']);
    }

    /**
     * Gets query for [[Format]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormat()
    {
        return $this->hasOne(Format::className(), ['id' => 'id_format']);
    }

    /**
     * Gets query for [[Izd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIzd()
    {
        return $this->hasOne(Izdatelstva::className(), ['id' => 'id_izd']);
    }

    /**
     * Gets query for [[Lang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'id_lang']);
    }

    /**
     * Gets query for [[NalichieKnigs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNalichieKnigs()
    {
        return $this->hasMany(NalichieKnig::className(), ['id_book' => 'id']);
    }

    /**
     * Gets query for [[ParentBook]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'parent_book_id']);
    }

    /**
     * Gets query for [[Pereplet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPereplet()
    {
        return $this->hasOne(Pereplet::className(), ['id' => 'id_pereplet']);
    }

    /**
     * Gets query for [[SpisokBooksZakazas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpisokBooksZakazas()
    {
        return $this->hasMany(SpisokBooksZakaza::className(), ['id_book' => 'id']);
    }
}
