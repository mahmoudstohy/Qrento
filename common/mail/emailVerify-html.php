<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
<div class="verify-email">

<strong><i class='fa fa-map-marker'></i> <?= Yii::$app->name; ?></strong>

    <p>Hello <?= Html::encode($user->username) ?>, </p>
    <br>
	<p>Welcome to Qrento online property rental , thank your for registering your new account
    <br>The follow link below to verify your email:</p>

    <p><?= Html::a(Html::encode($verifyLink), $verifyLink) ?></p>
    <br>
    <p>
    Please do not reply to this email. Emails sent to this address will not be answered.<br>
    24/7 Support: +974 77700250 Qrento support team - Inquery: support@qrento.com
    </p>
	
	<br><br>
	<small>
	CONFIDENTIALITY NOTICE
This e-mail message and any attachments are only for the use of the intended recipient and may contain information that is privileged, confidential or exempt from disclosure under applicable law. If you are not the intended recipient, any disclosure, distribution or other use of this e-mail message or attachments is prohibited. If you have received this e-mail message in error, please delete and notify the sender immediately. Thank you.
	</small>
	<br><br><br><br>
	<p align="center"><strong><i class='fa fa-map-marker'></i> <?= Yii::$app->name; ?></strong> Copyright 2012 - 2019 Under Aliensware Company S.A.E . All Rights Reserved.
	</p>
</div>
