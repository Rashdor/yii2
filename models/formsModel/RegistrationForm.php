<?php
/**
 * Created by PhpStorm.
 * User: rashd
 * Date: 03.10.2019
 * Time: 11:39
 */

namespace app\models\formsModel;

use Yii;
use app\models\User;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $username;
    public $password;
    public $password2;
    public $email;
    public $verifyCode;

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
            ['password', 'string', 'min' => 6],
            ['password', 'compare', 'compareAttribute' => 'password2', 'on' => 'register'],
        ];
    }

    public function registrate() : bool
    {
        $result = false;
        if ($this->validate()) {
            $userModel = new User();
            if (empty($userModel->find()->where(['username' => $this->username])->one())) {
                if (empty($userModel->find()->where(['email' => $this->email])->one())) {
                    $userModel->username = $this->username;
                    $userModel->email = $this->email;
                    $userModel->setPassword($this->password);
                    $userModel->generateAuthKey();
                    $userModel->save();
                    $result = !$userModel->hasErrors();
                } else {
                    $this->addError('email', 'Такая почта уже существует');
                }
            } else {
                $this->addError('username', 'Такой логин уже существует');
            }
        }
        return $result;
    }

}