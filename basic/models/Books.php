<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string|null $Nazev
 * @property string|null $Autor
 * @property string|null $Rok_vydani
 * @property string|null $zanr
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
            [['Rok_vydani'], 'safe'],
            [['Nazev', 'Autor', 'zanr'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nazev' => 'Nazev',
            'Autor' => 'Autor',
            'Rok_vydani' => 'Rok Vydani',
            'zanr' => 'Zanr',
        ];
    }
}
