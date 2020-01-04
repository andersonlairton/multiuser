<?php
/* @var $this TbUsersController */
/* @var $model TbUsers */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TbUsers', 'url'=>array('index')),
	array('label'=>'Create TbUsers', 'url'=>array('create')),
	array('label'=>'Update TbUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TbUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbUsers', 'url'=>array('admin')),
);
?>

<h1>View TbUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'office',
		'SuperAdministrators',
	),
)); ?>
