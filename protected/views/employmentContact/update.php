<?php $this->menu=array(
	array('label'=>'List Employee','url'=>array('/employee/admin')),
); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update Employee Contact",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model, 'employee'=>Yii::app()->getRequest()->getParam('id'))); ?>
<?php $this->endWidget();?>
