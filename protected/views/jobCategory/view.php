<?php
$this->breadcrumbs=array(
	'Job Categories'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Add JobCategory','url'=>array('create')),
	array('label'=>'Update JobCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete JobCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCategory','url'=>array('admin')),
);
?>


<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>$model->name,
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'name',
			'detail',
		),
	)); ?>
<?php $this->endWidget();?>
