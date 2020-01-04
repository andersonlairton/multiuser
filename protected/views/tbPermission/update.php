<?php
/* @var $this TbPermissionController */
/* @var $model TbPermission */

$this->breadcrumbs=array(
	'Tb Permissions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbPermission', 'url'=>array('index')),
	array('label'=>'Create TbPermission', 'url'=>array('create')),
	array('label'=>'View TbPermission', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TbPermission', 'url'=>array('admin')),
);
?>

<h1>Update TbPermission <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>