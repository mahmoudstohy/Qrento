<?php

use yii\helpers\Html;

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
    
    <blockquote><i class="fa fa-building"></i> Add your property - Step 1 </blockquote>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
