<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VwProperties */

$this->title = 'Update Vw Properties: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vw Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->property_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vw-properties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
