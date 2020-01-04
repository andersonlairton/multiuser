<?php
/* @var $this TbPermissionController */
/* @var $model TbPermission */

$this->breadcrumbs=array(
	'Tb Permissions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbPermission', 'url'=>array('index')),
	array('label'=>'Create TbPermission', 'url'=>array('create')),
	array('label'=>'Update TbPermission', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TbPermission', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbPermission', 'url'=>array('admin')),
);
?>

<h1>View TbPermission #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'permission_name',
	),
)); ?>
