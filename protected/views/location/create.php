<?php
$this->breadcrumbs=array(
	'Locations'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Location','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Locations",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
