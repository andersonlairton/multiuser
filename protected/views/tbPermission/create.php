<?php
/* @var $this TbPermissionController */
/* @var $model TbPermission */

$this->breadcrumbs=array(
	'Tb Permissions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbPermission', 'url'=>array('index')),
	array('label'=>'Manage TbPermission', 'url'=>array('admin')),
);
?>

<h1>Create TbPermission</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>