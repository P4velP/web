<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "readers".
 *
 * @property int $id
 * @property string|null $Jmeno
 * @property string|null $Prijmeni
 * @property string|null $Rok_narozeni
 * @property string|null $Ulice
 * @property string|null $Mesto
 */
class Readers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'readers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Rok_narozeni'], 'safe'],
            [['Jmeno'], 'string', 'max' => 30],
            [['Prijmeni', 'Ulice'], 'string', 'max' => 64],
            [['Mesto'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Jmeno' => 'Jmeno',
            'Prijmeni' => 'Prijmeni',
            'Rok_narozeni' => 'Rok Narozeni',
            'Ulice' => 'Ulice',
            'Mesto' => 'Mesto',
        ];
    }
}
