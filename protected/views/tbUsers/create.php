<?php
/* @var $this TbUsersController */
/* @var $model TbUsers */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbUsers', 'url'=>array('index')),
	array('label'=>'Manage TbUsers', 'url'=>array('admin')),
);
?>

<h1>Create TbUsers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>