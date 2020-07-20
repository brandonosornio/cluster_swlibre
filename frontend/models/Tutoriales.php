<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tutoriales".
 *
 * @property int $ID
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $URL
 */
class Tutoriales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tutoriales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Descripcion', 'URL'], 'required','message'=> 'Este campo no puede estar vacio.'],
            [['Descripcion', 'URL'], 'string', 'message'=> 'Este campo no puede estar vacio.'],
            [['Nombre'], 'string', 'max' => 255, 'message'=> 'Este campo no puede estar vacio.'],
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
        ];
    }
}
