<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VwProperties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vw-properties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'property_id')->textInput() ?>

    <?= $form->field($model, 'bedroom')->textInput() ?>

    <?= $form->field($model, 'bathroom')->textInput() ?>

    <?= $form->field($model, 'ac')->dropDownList([ 'Window' => 'Window', 'Split' => 'Split', 'Centeral' => 'Centeral', 'None' => 'None', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'furnishing')->dropDownList([ 'fully' => 'Fully', 'semi' => 'Semi', 'none' => 'None', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'parking')->dropDownList([ 'dedicated' => 'Dedicated', 'shared' => 'Shared', 'none' => 'None', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'google_lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_lng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <?= $form->field($model, 'is_pool')->textInput() ?>

    <?= $form->field($model, 'is_gym')->textInput() ?>

    <?= $form->field($model, 'is_compound')->textInput() ?>

    <?= $form->field($model, 'property_type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agent_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agent_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agent_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agent_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
