<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $phoneNumber;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phoneNumber', 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['phoneNumber'], 'filter', 'filter' => function ($value) {
                $result = preg_replace("/(\+7)(\d{3})(\d{3})(\d{2})(\d{2})/", "$1 ($2) $3-$4-$5", $value);
                return $result;
            }],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'verifyCode' => 'Verification Code',
            'phoneNumber' => 'Номер телефона',
            'name' => 'Ваше имя',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom(['skladder@gmail.com' => 'Складдер'])
            ->setReplyTo(['skladder@gmail.com' => 'Складдер'])
            ->setSubject('Оповещение со skladder.ru')
            ->setTextBody('Имя: ' . $this->name . ' Телефон: ' . $this->phoneNumber)
            ->send();
    }
}
