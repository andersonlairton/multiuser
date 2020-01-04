<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'office_name'); ?>
		<?php echo $form->textField($model,'office_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permission'); ?>
		<?php echo $form->textField($model,'permission'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->