<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "distros".
 *
 * @property int $ID
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $URL
 * @property string $Dirigido
 * @property string $Latest
 * @property string $Logo
 */
class Distros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Descripcion', 'URL','Latest','Logo'], 'required','message'=> 'Este campo no puede estar vacio.'],
            [['Dirigido'], 'required','message'=> 'Este campo no puede estar vacio (Separa por comas a quien va dirigido)'],
            //[['ID'], 'integer'],
            [['Descripcion', 'URL', 'Dirigido','Logo'], 'string'],
            [['Nombre'], 'string', 'max' => 255],
            [['Latest'], 'string', 'max' => 10],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'URL' => 'Url',
            'Dirigido' => 'Dirigido',
            'Latest' => 'Latest',
            'Logo' => 'Logo'
        ];
    }
}
