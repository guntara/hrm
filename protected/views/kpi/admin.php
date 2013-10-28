<?php
$this->menu=array(
	array('label'=>'List KPI','url'=>array('admin')),
	array('label'=>'Add KPI','url'=>array('create')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"List Key Performance Indicator",
)); ?>
	<?php	$this->widget('ext.groupgridview.GroupGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id' => 'kpi-grid',
		'dataProvider'=>$model->search(),
		'mergeColumns' => array('job_id'),  
		'columns' => array(
			array(
				'name'=>'job_id',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'25%'),
				'value'=> array($this,'getJobs'),
			),
			array(
				'header'=>'Key Performance Indicator',
				'name'=>'kpi',
				'type'=>'text',
			),
			array(
				'name'=>'weight',
				'type'=>'raw',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'header'=>'Action',
				'name'=>'job_id',
				'type'=>'raw',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'value' => 'CHtml::link("Update",Yii::app()->createUrl("kpi/update",array("id"=>$data->job_id)))',
			),
		),
	));
	?>
<?php $this->endWidget();?>
