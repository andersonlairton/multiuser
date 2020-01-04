<?php
/* @var $this TbPermissionController */
/* @var $data TbPermission */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permission_name')); ?>:</b>
	<?php echo CHtml::encode($data->permission_name); ?>
	<br />


</div>