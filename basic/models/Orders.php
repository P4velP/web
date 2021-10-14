<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int|null $Id_reader
 * @property int|null $Id_books
 * @property string|null $Datum_pujceni
 * @property string|null $Datum_vraceni
 * @property int $id
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_reader', 'Id_books'], 'integer'],
            [['Datum_pujceni', 'Datum_vraceni'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_reader' => 'Id Reader',
            'Id_books' => 'Id Books',
            'Datum_pujceni' => 'Datum Pujceni',
            'Datum_vraceni' => 'Datum Vraceni',
            'id' => 'ID',
        ];
    }
}
