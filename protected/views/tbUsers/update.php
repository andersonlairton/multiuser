<?php
/* @var $this TbUsersController */
/* @var $model TbUsers */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbUsers', 'url'=>array('index')),
	array('label'=>'Create TbUsers', 'url'=>array('create')),
	array('label'=>'View TbUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TbUsers', 'url'=>array('admin')),
);
?>

<h1>Update TbUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>