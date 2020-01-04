<?php
/* @var $this TbUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Users',
);

$this->menu=array(
	array('label'=>'Create TbUsers', 'url'=>array('create')),
	array('label'=>'Manage TbUsers', 'url'=>array('admin')),
);
?>

<h1>Tb Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
