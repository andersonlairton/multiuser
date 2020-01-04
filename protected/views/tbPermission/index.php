<?php
/* @var $this TbPermissionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Permissions',
);

$this->menu=array(
	array('label'=>'Create TbPermission', 'url'=>array('create')),
	array('label'=>'Manage TbPermission', 'url'=>array('admin')),
);
?>

<h1>Tb Permissions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
