<?php
$this->breadcrumbs=array(
	'Companies'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Company','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
