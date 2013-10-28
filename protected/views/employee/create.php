<?php $this->menu=array(
	array('label'=>'Manage Employee','url'=>array('admin')),
);?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Employee",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
