<?php
$this->menu=array(
	array('label'=>'List Review','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Review",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
