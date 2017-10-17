<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->baseUrl;?>/index/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3></h3>
						<h3></h3>
						<h3>你一共跑了：<?php echo $this->params['data']?>次</h3>	<!--拿到传过来的跑操次数 -->
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/TweenLite.min.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/EasePack.min.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/rAF.js"></script>
		<script src="<?php echo Yii::$app->request->baseUrl;?>/index/js/demo-1.js"></script>
	</body>
</html>