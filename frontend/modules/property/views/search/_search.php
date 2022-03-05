<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VwPropertySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vw-properties-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'property_id') ?>

    <?= $form->field($model, 'bedroom') ?>

    <?= $form->field($model, 'bathroom') ?>

    <?= $form->field($model, 'ac') ?>

    <?= $form->field($model, 'furnishing') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'parking') ?>

    <?php // echo $form->field($model, 'google_lat') ?>

    <?php // echo $form->field($model, 'google_lng') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'is_pool') ?>

    <?php // echo $form->field($model, 'is_gym') ?>

    <?php // echo $form->field($model, 'is_compound') ?>

    <?php // echo $form->field($model, 'property_type_name') ?>

    <?php // echo $form->field($model, 'location_name') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'agent_user') ?>

    <?php // echo $form->field($model, 'agent_name') ?>

    <?php // echo $form->field($model, 'agent_email') ?>

    <?php // echo $form->field($model, 'agent_mobile') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
