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
    public $email;
    public $password;
    public $nim;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required', 'message' => 'Username harus diisi.'],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Username ini sudah digunakan.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['nim', 'trim'],
            ['nim', 'required', 'message' => 'NIM harus diisi.'],

            ['email', 'trim'],
            ['email', 'required', 'message' => 'Username harus diisi.'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::className(), 'message' => 'Email ini sudah digunakan.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'nim' => 'NIM',
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
        $user->username = $this->username;
        $user->nim = $this->nim;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        return $user->save();
    }
}
