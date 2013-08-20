<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="page-header">
	<h1>Login <small>to your account</small></h1>
</div>
<div class="row-fluid">
	
    <div class="span6 offset3">
	<?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>"Private access",
	)); ?>
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'login-form',
			'type'=>'horizontal',
			'enableClientValidation'=>true,
			'clientOptions'=>array('validateOnSubmit'=>true,),
		)); ?>

			<?php echo $form->textFieldRow($model,'email'); ?>
			<?php echo $form->passwordFieldRow($model,'password'); ?>

			<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>'Login',
			)); ?>
			</div>

		<?php $this->endWidget(); ?>

	<?php $this->endWidget();?>
    </div>

</div>
