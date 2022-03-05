<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Property */

$this->title = 'Add new property';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-create">
<div class="page-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>
    <div class="row">
	<div class="col-md-4">
    <blockquote><i class="fa fa-image"></i> Add your property - Step 2 </blockquote>
    
        <div class="property-form">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <p><i class="fa fa-upload"></i> You are allow to upload multiple image one time</p>
        
    	<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
        <hr>
        
        <p>Add property discription</p>
        <?= $form->field($property, 'description')->textarea(['rows' => '5']) ?>
        
        <div class="form-group">
            <?= Html::submitButton('Next', ['class' => 'btn btn-default']) ?>
        </div>
    
        <?php ActiveForm::end(); ?>
        </div>
    </div>
    
    <div class="col-md-8">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14430.69256308516!2d51.503609532449936!3d25.28157859424752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45dacb9f9708ab%3A0x7b649949957f0412!2sFereej+Bin+Mahmoud%2C+Doha!5e0!3m2!1sen!2sqa!4v1554711624774!5m2!1sen!2sqa" width="100%" height="500" frameborder="0" class="gmap"></iframe>
    </div>
    
    </div>

</div>
