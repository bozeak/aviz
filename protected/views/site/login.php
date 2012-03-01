<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<!--<div class="span12">-->
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
    'htmlOptions'=>array(
        'class'=>'well form-inline',
    ),
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->



		<?php echo $form->textField($model,'username', array('placeholder'=>'Login')); ?>




		<?php echo $form->passwordField($model,'password', array('placeholder'=>'Parola')); ?>


<!--        --><?php //echo $form->label($model,'rememberMe', array('class'=>'checkbox')); ?>
<!--		--><?php //echo $form->checkBox($model,'rememberMe'); ?>

		<?php echo CHtml::submitButton('Login', array('class'=>'btn')); ?>
<?php echo $form->error($model,'username'); ?>
<?php echo $form->error($model,'password'); ?>

<?php $this->endWidget(); ?>
<!--</div> form -->
