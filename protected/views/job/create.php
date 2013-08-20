<?php
$this->breadcrumbs=array(
	'Jobs'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Job','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Jobs",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
