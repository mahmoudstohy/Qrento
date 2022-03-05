<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agent".
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $phone
 * @property int $status
 * @property string $auth_key
 * @property string $password_hash
 * @property string $verification_token
 * @property string $password_reset_token
 * @property string $updated_at
 * @property string $created_at
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'mobile', 'password_hash', 'verification_token', 'updated_at', 'created_at'], 'required'],
            [['status'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['username', 'name'], 'string', 'max' => 40],
            [['email'], 'string', 'max' => 50],
            [['mobile', 'phone'], 'string', 'max' => 16],
            [['password_hash', 'verification_token', 'password_reset_token'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'phone' => 'Phone',
            'status' => 'Status',
            'password_hash' => 'Password Hash',
            'verification_token' => 'Verification Token',
            'password_reset_token' => 'Password Reset Token',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
    
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
    
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
}
