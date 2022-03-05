<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\VwPropertySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Property Search Result';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vw-properties-index">
<?php

    foreach ($model as $p){
        $date = '';
        $posted = '';
        $date = new DateTime($p['created_at']);
        $posted = $date->format('Y-m-d');
        echo <<<ADS
        <div class="row">
            <div class="col-md-9">
            <p class="text-red"><strong><a href="index.php?r=property/search/view&id={$p['property_id']}">{$p['description']}</a></strong></p>
            <table class="table table-striped">
              	<tbody>
             	 <tr>
                  <td><i class="fa fa-location-arrow"></i><strong> Location</strong></td>
                  <td>{$p['location_name']}</td>
                  <td><i class="fa fa-hotel"></i><strong> Bedroom</strong></td>
                  <td>{$p['bedroom']}</td>
                  <td><i class="fa fa-calendar"></i><strong> Posted in</strong></td>
                  <td>$posted</td>
                </tr>
                <tr>
                  <td><i class="fa fa-tint"></i><strong> Bathroom</strong></td>
                  <td>{$p['bathroom']}</td>
                  <td><i class="fa fa-bolt"></i><strong> Air Condition</strong></td>
                  <td>{$p['ac']}</td>
                  <td><i class="fa fa-user"></i><strong> Publisher</strong></td>
                  <td>{$p['username']}</td>
                </tr>
                <tr>
                  <td><i class="fa fa-glass"></i><strong> Furnishing</strong></td>
                  <td>{$p['furnishing']}</td>
                  <td><i class="fa fa-car"></i><strong> Parking</strong></td>
                  <td>{$p['parking']}</td>
                  <td><i class="fa fa-money"></i><strong> Price</strong></td>
                  <td><span class="text-red">{$p['price']} QR </span> / Month</td>
                </tr>
                </tbody>
            </table>
            <p><strong>Property options :</strong>
            <span class="text-red">
                <i class="fa fa-shopping-cart"></i>	&nbsp;
                <i class="fa fa-envelope"></i> &nbsp;
                <i class="fa fa-star"></i> &nbsp;
                <i class="fa fa-search"></i> &nbsp;
                <i class="fa fa-image"></i> &nbsp;
            </span>
            </p>
            </div>
            <div class="col-md-3">
            <img src="uploads/{$p['img']}" class="img-thumbnail">
            </div>
        </div>
        <hr>
ADS;
    }
?>

</div>
