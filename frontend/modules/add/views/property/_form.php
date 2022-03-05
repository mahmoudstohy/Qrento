<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\PropertyType;
use common\models\Location;

/* @var $this yii\web\View */
/* @var $model common\models\Property */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-form">
	<div class="row">
	<div class="col-md-8">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'property_type_id')->dropDownList(
        ArrayHelper::map(PropertyType::find()->all(), 'property_type_id', 'property_type_name'),
        ['prompt' => 'Select Property Type']
        ) ?>

    <?= $form->field($model, 'location_id')->dropDownList(
        ArrayHelper::map(Location::find()->all(), 'location_id', 'location_name'),
        ['prompt' => 'Select Location']
        ) ?>

    <?= $form->field($model, 'bedroom')->dropDownList(
        ['1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => '5 or More'],['prompt' => '']
        ) ?>

    <?= $form->field($model, 'bathroom')->dropDownList(
        ['1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5],['prompt' => '']
        ) ?>

    <?= $form->field($model, 'ac')->dropDownList([ 'Window' => 'Window', 'Split' => 'Split', 'Centeral' => 'Centeral', 'None' => 'None', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'furnishing')->dropDownList([ 'fully' => 'Fully', 'semi' => 'Semi', 'none' => 'None', ], ['prompt' => '']) ?>

	<?= $form->field($model, 'parking')->dropDownList([ 'dedicated' => 'Dedicated', 'shared' => 'Shared', 'none' => 'None', ], ['prompt' => '']) ?>
    
    <?= $form->field($model, 'price')->textInput() ?>
		
    <?= $form->field($model, 'is_pool')->checkbox() ?>

    <?= $form->field($model, 'is_gym')->checkbox() ?>

    <?= $form->field($model, 'is_compound')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Add', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	</div>
	</div>
</div>
