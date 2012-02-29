<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'subdiv'); ?>
        <?php //echo $form->textField($model,'subdiv',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->dropDownList($model, 'subdiv',CHtml::listData(Subdiv::model()->findAll(), 'id', 'name'), array('prompt'=>'Subdiviziunea')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_reg'); ?>
		<?php echo $form->textField($model,'date_reg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_doc'); ?>
		<?php echo $form->textField($model,'date_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'elab'); ?>
		<?php echo $form->textField($model,'elab',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsabil'); ?>
        <?php echo $form->dropDownList($model, 'responsabil',CHtml::listData(Responsabil::model()->findAll(), 'id', 'fullname'), array('prompt'=>'Alegeti')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_respons'); ?>
		<?php echo $form->textField($model,'date_respons'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respons_type'); ?>
		<?php echo $form->textField($model,'respons_type',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->