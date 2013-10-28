<?php $this->menu=array(
	array('label'=>'List Employee','url'=>array('admin')),
	array('label'=>'Delete Employee','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
); ?>

<?php
$contactController = Yii::app()->createController('EmploymentContact');
$contactModel = new EmploymentContact;

$jobController = Yii::app()->createController('EmploymentJob');
$jobModel = new EmploymentJob;

$SalaryController = Yii::app()->createController('EmploymentSalary');
$SalaryModel = new EmploymentSalary;
?>

<?php
$tabs = array(
array('id' => 'tab1', 'label' => "Employee Info", 'content' => $this->renderPartial('viewEmployee', array('model' => $model), true), 'active' => true),
array('id' => 'tab2', 'label' => "Contact Detail", 'content' => $contactController[0]->renderPartial('view', array('model' => $contactModel, 'employee' => $model->id), true)),
array('id' => 'tab3', 'label' => "Job Detail", 'content' => $jobController[0]->renderPartial('view', array('model' => $jobModel, 'employee' => $model->id), true)),
array('id' => 'tab4', 'label' => "Salary Detail", 'content' => $SalaryController[0]->renderPartial('view', array('model' => $SalaryModel, 'employee' => $model->id), true)),
);

$this->widget('bootstrap.widgets.TbTabs', array(
	'id'	=> 'mytabs',
	'type'	=> 'tabs',
	'tabs'	=> $tabs,
));
?>
