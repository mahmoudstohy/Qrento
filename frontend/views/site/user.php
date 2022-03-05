<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Property */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-view">
<div class="page-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>
    <div class="row">
    	<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Details </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-cog"></i>
							Settings </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-list-alt"></i>
							Properties </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-bookmark"></i>
							Bookmarks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-envelope"></i>
							Inbox </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
        <div class="col-md-5">
        <blockquote><i class="fa fa-user"></i> business user account</blockquote>
		<p> Qrento business user account details: 
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'username',
                'name',
                'email',
                'mobile',
                'status',
                'created_at',
            ],
        ]) ?>
        </div>
        
        <div class="col-md-4">
            <div class="reset_right">
    			<div class="login-form-right1-inner">
    				<h2>Password Reset !</h2>
    				<br/>
    				<div style="color:#999;margin:1em 0">
                    If you need to reser your own password <br> 
                    <i class="fa fa-lock"></i> <?= Html::a('Reset password', ['site/request-password-reset']) ?>.
                </div>
    			</div>
    		</div>
		</div>
        
	</div>
</div>
