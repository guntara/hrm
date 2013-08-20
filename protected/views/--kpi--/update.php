<?php
$this->menu=array(
	array('label'=>'List KPI','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update Key Performance Indicator",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
