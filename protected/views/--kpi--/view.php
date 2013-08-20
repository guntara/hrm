<?php
$this->menu=array(
	array('label'=>'Add KPI','url'=>array('create')),
	array('label'=>'Update KPI','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KPI','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'List KPI','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"View Key Performance Indicator",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'job_id',
			'kpi',
			'note',
		),
	)); ?>
<?php $this->endWidget();?>
