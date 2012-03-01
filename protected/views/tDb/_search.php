<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
    ),
)); ?>



        <?php echo $form->label($model,'subdiv'); ?>
        <?php
        echo $form->dropDownList($model,'subdiv',CHtml::listData(Subdiv::model()->findAll(),'id','name'),
            array(
                'prompt'=>'Alegeti',
                'ajax'=> array(
                    'type' => 'POST',
                    'url'=>CController::createUrl('tDb/Dynamicresp'),
                    'update'=>'#'.CHtml::activeId($model,'responsabil'),
                )
            )
        );

        ?>

		<?php echo $form->label($model,'date_reg'); ?>
		<?php echo $form->textField($model,'date_reg'); ?>

		<?php echo $form->label($model,'date_doc'); ?>
		<?php echo $form->textField($model,'date_doc'); ?>

		<?php echo $form->label($model,'elab'); ?>
		<?php echo $form->textField($model,'elab',array('size'=>60,'maxlength'=>255)); ?>

		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>


        <?php echo $form->label($model,'responsabil'); ?>
        <?php echo $form->DropDownList($model,'responsabil',
        CHtml::listData(Responsabil::model()->findAllByAttributes(array('subdiv'=>$model->subdiv)),'id','fullname'),
        array('empty'=>'Alegeti')
    );
    ?>



		<?php echo $form->label($model,'date_respons'); ?>
		<?php echo $form->textField($model,'date_respons'); ?>


		<?php echo $form->label($model,'respons_type'); ?>
        <?php echo $form->dropDownList($model, 'respons_type', CHtml::listData(Tipraspuns::model()->findAll(), 'id', 'name'),
        array('prompt'=>'Alegeti')
    ); ?>


		<?php echo CHtml::submitButton('Search', array('class'=>'btn')); ?>

<?php $this->endWidget(); ?>

</div><!-- search-form -->