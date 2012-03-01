<?php
$this->breadcrumbs=array(
	'Tdbs',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tdb-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tdb-grid',
    'dataProvider'=>$model->search(),
    'enableSorting'=>false,
    'htmlOptions'=>array(
        'class'=>'table table-condensed',
    ),

    'columns'=>array(
        'id',
        array(
            'header'=>'Nr. și data înregistrării documentului',
            'value'=>'nl2br($data->nr_reg)."<br>".nl2br(Yii::app()->locale->dateFormatter->formatDateTime($data->date_reg, "long", false))',
            'type'=>'raw',
        ),
        'elab',
        array(
            'name'=>'address',
            'value'=>'$data->address',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'name'=>'content',
            'value'=>'$data->content',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'header'=>'Executor',
            'value'=>'($data->persResponsabil)?$data->persResponsabil->persGrad->md." ".$data->persResponsabil->fullname."<br />".$data->persResponsabil->contacts:""',
            'type'=>'raw',
        ),

        array(
            'header'=>'Nr. act / Data răspuns<br />Tipul răspunsului',
            'value'=>'($data->responsType)?$data->nr_respons ." din ".Yii::app()->locale->dateFormatter->formatDateTime($data->date_respons, "long", false)."<br />".$data->responsType->name:""',
            'visible'=>!Yii::app()->user->isGuest,
            'type'=>'raw',
        ),

        array(
            'name'=>'dossier',
            'value'=>'$data->dossier',
            'visible'=>!Yii::app()->user->isGuest,
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}',
            'visible'=>!Yii::app()->user->isGuest,
        )
    ),
));
?>