<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
            <div class="container">
		<a class="brand" href="/"><?php echo CHtml::encode(Yii::app()->name); ?></a>

	    <div class="nav-collapse">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                array('htmlOption'=>array('class'=>'LAST')),
                array('label'=>'Adăugare', 'url'=>array('/tDb/create'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Manage', 'url'=>array('/tDb/admin'), 'visible'=>!Yii::app()->user->isGuest)
			),
            'htmlOptions'=>array(
                'class'=>'nav',
            ),
		)); ?>
	        </div><!-- mainmenu -->
        </div>
    </div>
    </div>

    <div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>



	<footer>
        <p>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?></p>
	</footer><!-- footer -->
    </div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
