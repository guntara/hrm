<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;
if (Yii::app()->user->id) {
	$empID = User::model()->findByPK(Yii::app()->user->id);
	$dataTask = Review::model()->findAll('reviewer=:id AND due_date >= CURDATE()', array(':id'=>$empID->employee));
?>

	<div class="row-fluid">
	  <div class="span6 ">
		<?php $this->beginWidget('zii.widgets.CPortlet', array('title'=>"My Task",)); ?>
		<table class="table table-hover">
		    <thead>
			<tr>
			<th width="5%">#</th>
			<th>Task Detail</th>
			<th width="20%">Due Date</th>
			<th width="12%">Status</th>
			<th width="5%"></th>
			</tr>
		    </thead>
		    <tbody>
			<?php if ($dataTask) {
				$i = 1;
				foreach($dataTask as $key=>$value){ ?>
				<?php $emp = Employee::model()->findByPK($value->employee); ?>
				    <tr>
					<td style="text-align: center;"><?php echo $i; ?></td>
					<td><?php echo 'Review for ' . $emp->firstname . ' ' .  $emp->middle . ' ' .  $emp->lastname; ?></td>
					<td style="text-align: center;"><?php echo $value->due_date; ?></td>
					<td style="text-align: center;"><?php echo $value->status; ?></td>
					<td class="button-column">
					<?php $this->widget('bootstrap.widgets.TbButton',array(
						'label' => 'Review',
						'type'	=> 'primary',
						'url'	=> array('kpiResult/create', 'id'=>$value->id),
					)); ?></td>
				    </tr>
			<?php	$i++; }
			} ?>
		    </tbody>
		</table>
		<?php $this->endWidget();?>
	  </div>
	  <div class="span6 ">
		<?php $this->beginWidget('zii.widgets.CPortlet', array('title'=>"My Project",)); ?>
			My Project Detail
		<?php $this->endWidget();?>
	  </div>
	</div>
<?php }  else {
	$this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
	    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
	)); 
	$this->endWidget();
} ?>
