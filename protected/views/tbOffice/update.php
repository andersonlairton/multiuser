<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs=array(
	'Tb Offices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbOffice', 'url'=>array('index')),
	array('label'=>'Create TbOffice', 'url'=>array('create')),
	array('label'=>'View TbOffice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TbOffice', 'url'=>array('admin')),
);
?>

<h1>Update TbOffice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>