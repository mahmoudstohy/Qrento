<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SIGNUP';
$this->params['breadcrumbs'][] = 'Signup';
?>
<div class="site-signup">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
	<blockquote><i class="fa fa-user-plus"></i> Tell us a bit about yourself</blockquote>
  	<p>Signup for individual user, please register as a business user.</p>
  	<p>If you are a Agent and have more than one properity under your management, 
  		please register as a Agent and then add all your own properities from your Company Dashboard.
  	</p>
	
    <p>Please fill out the following fields to signup:</p>
    <hr width="50%" align="left">
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        	<p>
        	<strong>Are you an Individual User or a Company having more than one Property?</strong>
        	<br/>
        	Member Type: 
        	<label class="radio-inline">
              <input type="radio" name="Type" id="inlineRadio1" value="1" checked onclick="show_selected();"> Individual User
            </label>
            <label class="radio-inline">
              <input type="radio" name="Type" id="inlineRadio2" value="2" onclick="show_selected();"> Agent
            </label>
        	</p>
        	</div>
        	<div class="col-lg-5">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                
                <?= $form->field($model, 'name')->textInput() ?>

                <?= $form->field($model, 'email') ?>
                
                <?= $form->field($model, 'mobile')->textInput() ?>
                <div class="form-group" id="phone">
                <?= Html::label('Phone') ?>
                <?= Html::input('text','phone','', $options=['class'=>'form-control']) ?>
				</div>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-default', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
window.onload = function (){
	document.getElementById("phone").style.display = 'none';
}
function show_selected() {
	var radios = document.getElementsByName('Type');

	for (var i = 0, length = radios.length; i < length; i++) {
	    if (radios[i].checked) {
	        // do whatever you want with the checked radio
	    	var value = radios[i].value;
	        // only one radio can be logically checked, don't check the rest
	        break;
	    }
	}
	if(value == 2){
		document.getElementById("phone").style.display = 'block';
	} else {
		document.getElementById("phone").style.display = 'none';
	}
}
</script>
