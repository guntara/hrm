<?php
$this->breadcrumbs=array(
	'Jobs'=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Add Job','url'=>array('create')),
	array('label'=>'Update Job','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Job','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Job','url'=>array('admin')),
);
?>


<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update $model->title",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'title',
			'description',
			'specification',
			'note',
		),
	)); ?>
<?php $this->endWidget();?>
