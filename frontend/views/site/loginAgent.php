<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'AGENT LOGIN';
$this->params['breadcrumbs'][] = ['label' => 'Login', 'url' => ['/site/signin']];
$this->params['breadcrumbs'][] = 'Agent Login'
?>
<div class="site-login">

    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
    <br/>
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('LOGIN', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-6">
            <div class="signup_right">
    			<div class="login-form-right1-inner">
    				<h2>Don't have an account?</h2>
    				<br/>
    				<p><a class="btn btn-default" href="index.php?r=site/signup">SIGN UP &raquo;</a></p>
    			</div>
    		</div>
		</div>
		
    </div>
</div>
