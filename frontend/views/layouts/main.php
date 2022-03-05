<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "<i class='fa fa-map-marker'></i> " . Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/signin']];
    } else {
        $menuItems[] = ['label' => FA::icon('plus').' Add', 'url' => ['/add/property/create']];
        $menuItems[] =
        '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                FA::icon('sign-out').' Logout',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
        $name = Yii::$app->user->identity->name;
        echo <<<LOG
            <div class="user_info  pull-right text-left">
            	 <span class="text-danger">Business</span>
            </div>
            <div class="user_signout">
            	<i class="fa fa-user"></i> $name
            </div>
LOG;
       
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>
    <div class="toolbar fixed">
    <ul class="nav sidebar-nav">
    	<li><a href="index.php"><i class="fa fa-home"></i></a></li>
    	<li><a href="index.php?r=site/user"><i class="fa fa-user"></i></a></li>
    	<li><a href="index.php?r=add/property/create"><i class="fa fa-plus"></i></a></li>
    	<li><a href="index.php?r=property/search"><i class="fa fa-search"></i></a></li>
    	<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
    	<li><a href="#"><i class="fa fa-phone"></i></a></li>
    	<li><a href="#"><i class="fa fa-cogs"></i></a></li>
    	<li><a href="#"><i class="fa fa-sign-out"></i></a></li>
    </ul>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container" align="center">
        <p><i class="fa fa-map-marker"></i> <?= Html::encode(Yii::$app->name) ?> Copyright &copy; 2012 - <?= date('Y') ?>
        	Under Aliensware Company S.A.E  . All Rights Reserved.
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
