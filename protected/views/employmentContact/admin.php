<?php
$this->breadcrumbs=array(
	'Employment Contacts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmploymentContact','url'=>array('index')),
	array('label'=>'Create EmploymentContact','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employment-contact-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employment Contacts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'employment-contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'emp_id',
		'address1',
		'address2',
		'city',
		'state',
		/*
		'zip',
		'country',
		'telephone',
		'mobile',
		'office_phone',
		'email',
		'othere_email',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
