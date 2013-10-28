<?php $this->menu=array(array('label'=>'List KPI','url'=>array('/kpi/admin')),);?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Key Performance Indicator",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model, 'revID'=>Yii::app()->getRequest()->getParam('id'))); ?>
<?php $this->endWidget();?>
