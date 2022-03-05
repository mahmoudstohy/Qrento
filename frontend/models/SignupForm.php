<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use common\models\Agent;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $name;
    public $mobile;
    public $phone;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 40],
            
            ['mobile', 'required'],
            ['mobile', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['mobile', 'string', 'max' => 40],
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
        $user->name = $this->name;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }
    
    public function signupAgent()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $agent = new Agent();
        $agent->username = $this->username;
        $agent->name = $this->name;
        $agent->email = $this->email;
        $agent->mobile = $this->mobile;
        $agent->phone = $this->phone;
        $agent->status = 9;
        $agent->updated_at = date('Y-m-d H:i:s');
        $agent->created_at = date('Y-m-d H:i:s');
        $agent->setPassword($this->password);
        $agent->generateAuthKey();
        $agent->generateEmailVerificationToken();
        return $agent->save() && $this->sendEmail($agent);
        
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
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
