<?php
$this->breadcrumbs=array(
	'Tdbs',
);

$this->menu=array(
	array('label'=>'Create TDb', 'url'=>array('create')),
	array('label'=>'Manage TDb', 'url'=>array('admin')),
);
?>

<h1>Tdbs</h1>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'enableSorting'=>false,

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
//nl2br($data->nr_respons)." din ". nl2br($data->date_respons)."<br />".
        //'nr_respons',
        //'respons_type',
        //'dossier'
    ),
));
?>