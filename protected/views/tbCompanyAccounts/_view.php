<?php
/* @var $this TbCompanyAccountsController */
/* @var $data TbCompanyAccounts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->Bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SWIFT_BIC')); ?>:</b>
	<?php echo CHtml::encode($data->SWIFT_BIC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IBAN')); ?>:</b>
	<?php echo CHtml::encode($data->IBAN); ?>
	<br />


</div>