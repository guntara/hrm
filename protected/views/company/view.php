<?php
$this->breadcrumbs=array(
	'Companies'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Update Company','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Company','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Company','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>$model->name,
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'name',
			'taxID',
			'phone',
			'fax',
			'email',
			'address1',
			'address2',
			'city',
			'state',
			'zip',
			'country',
			'note',
		),
	)); ?>
<?php $this->endWidget();?>
