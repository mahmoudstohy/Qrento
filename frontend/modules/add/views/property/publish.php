<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Property */

$this->title = 'Property Published';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-create">
<div class="page-header">
        <h2><?= Html::encode($this->title) ?></h2>
    </div>
    <div class="row">
	<div class="col-md-6">
    <blockquote>
    	<h1><i class="fa fa-check"></i></h1>
        <span class="text-success">Your posted property has been published successfully </span>
        <small>Thank you !!</small>
    </blockquote>
    
    </div>
    
    <div class="col-md-6">
    </div>
    
    </div>

</div>
