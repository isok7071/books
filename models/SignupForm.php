<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{

    public $username;
    public $name;
    public $otchestvo;
    public $addr_dostavki;
    public $tel;
    public $surname;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 100],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 80],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 80],
            ['surname', 'required'],
            ['surname', 'string', 'min' => 2, 'max' => 80],
            ['otchestvo', 'required'],
            ['otchestvo', 'string', 'min' => 2, 'max' => 80],
            ['tel', 'required'],
            ['addr_dostavki', 'string', 'max' => 500],
        ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->otchestvo = $this->otchestvo;
        $user->addr_dostavki = $this->addr_dostavki;
        $user->tel = $this->tel;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->save(false);

        $auth = Yii::$app->authManager;
        $authorRole = $auth->getRole('author');
        $auth->assign($authorRole, $user->getId());

        return $user;
    }

}