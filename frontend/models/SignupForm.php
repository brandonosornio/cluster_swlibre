<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use yii\web\UploadedFile;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $name;
    public $avatar_image;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['name', 'trim'],
            ['name', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['name', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este nombre de usuario ya existe.'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['username', 'trim'],
            ['username', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este nombre de usuario ya existe.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este correo electrónico ya esta registrado, por favor elige otro.'],

            ['password', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['password', 'string', 'min' => 6],
            ['avatar_image', 'string', 'max' => 255]
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->avatar_image = UploadedFile::getInstance($this, 'avatar_image');
        $nom_avatar_image = rand(1,4000).'.'.$user->avatar_image->getExtension();
        $image_path = 'images/avatars/'.$nom_avatar_image;
        $user->avatar_image->SaveAs($image_path);
        $user->avatar_image = $image_path;
        //$user->generateEmailVerificationToken();
        return $user->save() ? $user : null;

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
