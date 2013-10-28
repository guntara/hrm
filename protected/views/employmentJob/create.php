<?php $this->menu=array(
	array('label'=>'List Employee','url'=>array('/employee/admin')),
); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Employee Job",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
