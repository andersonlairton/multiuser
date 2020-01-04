<?php
/* @var $this TbCompanyAccountsController */
/* @var $model TbCompanyAccounts */
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
		<?php echo $form->label($model,'Bank_name'); ?>
		<?php echo $form->textArea($model,'Bank_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SWIFT_BIC'); ?>
		<?php echo $form->textField($model,'SWIFT_BIC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IBAN'); ?>
		<?php echo $form->textField($model,'IBAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->