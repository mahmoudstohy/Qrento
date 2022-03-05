<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;

$this->title = 'LOGIN';
$this->params['breadcrumbs'][] = 'Login';
?>
<div class="site-login">

    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <blockquote><i class="fa fa-user"></i> Qrento login for individual user and agent accounts</blockquote>
    <p>Please select your account type and login using your own credentials for account control.</p>

    <div class="row">
    <br/>
    <div class="col-lg-4">
		<h3>Business User</h3>
			<p>Manage your account information and add your own properties for online smart search engine,
            	control your adds and custom your profile look and feel</p>
		<p><a class="btn btn-default" href="index.php?r=site/login">USER LOGIN &raquo;</a></p>
   </div>
   
   <div class="col-lg-4">
		<h3>Agent</h3>
			<p>Manage your account information and add your own properties for online smart search engine,
            	control your adds and custom your profile look and feel</p>
		<p><a class="btn btn-default" href="index.php?r=site/login-agent">AGENT LOGIN &raquo;</a></p>
   </div>
   
   <div class="col-lg-4">
		<h3>Administrator</h3>
			<p>Manage your account information and add your own properties for online smart search engine,
            	control your adds and custom your profile look and feel</p>
		<p><a class="btn btn-default" href="index.php?r=site/login-admin">ADMINISTRATOR LOGIN &raquo;</a></p>
   </div>
        
    </div>
</div>
