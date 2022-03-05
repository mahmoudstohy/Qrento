<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VwProperties */

$this->title = 'Create Vw Properties';
$this->params['breadcrumbs'][] = ['label' => 'Vw Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vw-properties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
