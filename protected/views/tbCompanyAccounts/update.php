<?php
/* @var $this TbCompanyAccountsController */
/* @var $model TbCompanyAccounts */

$this->breadcrumbs=array(
	'Tb Company Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbCompanyAccounts', 'url'=>array('index')),
	array('label'=>'Create TbCompanyAccounts', 'url'=>array('create')),
	array('label'=>'View TbCompanyAccounts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TbCompanyAccounts', 'url'=>array('admin')),
);
?>

<h1>Update TbCompanyAccounts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>