<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"  class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/component.css" />
    <?php $this->head() ?>
</head>
<body>




        <?= $content ?>
 




        <script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/TweenLite.min.js"></script>
        <script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/EasePack.min.js"></script>
        <script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/rAF.js"></script>
        <script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/demo-1.js"></script>
</body>
</html>
<?php $this->endPage() ?>
