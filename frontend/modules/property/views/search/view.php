<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VwProperties */

$this->title = $model->description;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vw-properties-view">
<div class="page-header">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="row">
	<div class="col-md-5">
   	<table class="table table-striped">
  	<tbody>
 	 <tr>
      <td><i class="fa fa-location-arrow"></i><strong> Location</strong></td>
      <td><?= $model['location_name']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-hotel"></i><strong> Bedroom</strong></td>
      <td><?= $model['bedroom']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-tint"></i><strong> Bathroom</strong></td>
      <td><?= $model['bathroom']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-bolt"></i><strong> Air Condition</strong></td>
      <td><?= $model['ac']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-glass"></i><strong> Furnishing</strong></td>
      <td><?= $model['furnishing']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-car"></i><strong> Parking</strong></td>
      <td><?= $model['parking']; ?></td>
    </tr>
    <tr>
      <td><i class="fa fa-money"></i><strong> Price</strong></td>
      <td><?= $model['price']; ?> QR / Month</td>
    </tr>
    <tr>
      <td><i class="fa fa-calendar"></i><strong> Posted in</strong></td>
      <td><?= $model['created_at']; ?></td>
    </tr>
  	</tbody>
	</table>
    
    <p><strong>Features</strong></p>
    <div class="row">
      <div class="col-xs-6 col-md-4" style="margin-bottom: 5px;"><i class="fa fa-check"></i> Swimming Pool</div>
      <div class="col-xs-6 col-md-4" style="margin-bottom: 5px;"><i class="fa fa-check"></i> GYM</div>
      <div class="col-xs-6 col-md-4" style="margin-bottom: 5px;"><i class="fa fa-check"></i> Compound </div>
      <div class="col-xs-6 col-md-4"><i class="fa fa-check"></i> Maid Room</div>
      <div class="col-xs-6 col-md-4"><i class="fa fa-check"></i> Sea View </div>
	</div>  
    <hr>
    
    <p><strong>Desciption</strong></p>
    <?= $model->description ?>
    <hr>
    <p><strong>Contacts</strong></p>
    <table class="table">
    	<tr>
    	<td>Name</td>
    	<td><?= $model->name ?></td>
    	</tr>
    	<tr>
    	<td>Mobile</td>
    	<td><?= $model->mobile ?></td>
    	</tr>
  	</table>
	<hr>
 	
	<p><strong>External Links</strong></p>
	<p>
		<i class="fa fa-youtube"></i> <a href="https://www.youtube.com/watch?v=CrKF3aNI8OI">https://www.youtube.com/watch?v=CrKF3aNI8OI</a> <br>
		<i class="fa fa-facebook"></i>&nbsp; <a href="https://www.facebook.com">https://www.facebook.com/qrento</a> <br>
		<i class="fa fa-twitter"></i> <a href="https://www.twitter.com">https://www.twitter.com/qrento</a>
	</p>
	
    <hr>

   
   </div>
    
    <div class="col-md-7">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14430.69256308516!2d51.503609532449936!3d25.28157859424752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45dacb9f9708ab%3A0x7b649949957f0412!2sFereej+Bin+Mahmoud%2C+Doha!5e0!3m2!1sen!2sqa!4v1554711624774!5m2!1sen!2sqa" width="100%" height="388" frameborder="0" class="gmap"></iframe>
        <hr>
        <p><strong>Property Images</strong></p>
        <div class="row">
        
        <?php
        echo newerton\fancybox\FancyBox::widget([
            'target' => 'a[rel=fancybox]',
            'helpers' => true,
            'mouse' => true,
            'config' => [
                'maxWidth' => '90%',
                'maxHeight' => '90%',
                'playSpeed' => 7000,
                'padding' => 0,
                'fitToView' => false,
                'width' => '70%',
                'height' => '70%',
                'autoSize' => false,
                'closeClick' => false,
                'openEffect' => 'elastic',
                'closeEffect' => 'elastic',
                'prevEffect' => 'elastic',
                'nextEffect' => 'elastic',
                'closeBtn' => false,
                'openOpacity' => true,
                'helpers' => [
                    'title' => ['type' => 'float'],
                    'buttons' => [],
                    'thumbs' => ['width' => 68, 'height' => 50],
                    'overlay' => [
                        'css' => [
                            'background' => 'rgba(0, 0, 0, 0.8)'
                        ]
                    ]
                ],
            ]
        ]);
            foreach ($imgs as $file){
        ?>
            <div class="col-md-4" style="margin-bottom: 15px;">
            	<a href="uploads/<?=$file['img']?>" rel="fancybox">
            		<img src="uploads/<?=$file['img']?>" class="img-thumbnail">
            	</a>
            </div>
        <?php  
            }
        ?>
          
    	</div>
    </div>
    
    </div>
   

</div>
