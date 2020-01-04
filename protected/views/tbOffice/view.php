<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs=array(
	'Tb Offices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbOffice', 'url'=>array('index')),
	array('label'=>'Create TbOffice', 'url'=>array('create')),
	array('label'=>'Update TbOffice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TbOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbOffice', 'url'=>array('admin')),
);
?>

<h1>View TbOffice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'office_name',
		'permission',
	),
)); ?>
