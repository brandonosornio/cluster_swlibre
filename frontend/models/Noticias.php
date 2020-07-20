<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "noticias".
 *
 * @property int $ID
 * @property string $Titulo
 * @property string $Fecha
 * @property int $Autor_ID
 * @property string $Cuerpo
 * @property string $Foto
 *
 * @property User $autor
 */
class Noticias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Titulo', 'Autor_ID', 'Cuerpo', 'Foto'], 'required', 'message'=> 'Este campo no puede estar vacio.'],
            [['Fecha'], 'safe'],
            [['Autor_ID'], 'integer'],
            [['Cuerpo'], 'string'],
            [['Titulo', 'Foto'], 'string', 'max' => 255],
            [['Autor_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['Autor_ID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Titulo' => 'Titulo',
            'Fecha' => 'Fecha',
            'Autor_ID' => 'Autor',
            'Cuerpo' => 'Cuerpo de la Noticia',
            'Foto' => 'Foto de la Noticia',
        ];
    }

    /**
     * Gets query for [[Autor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutor()
    {
        return $this->hasOne(User::className(), ['id' => 'Autor_ID']);
    }

    public function getUser() {
        return array (Yii::$app->user->identity->id => Yii::$app->user->identity->name);
      }
}
