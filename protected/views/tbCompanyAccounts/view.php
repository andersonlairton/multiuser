<?php
/* @var $this TbCompanyAccountsController */
/* @var $model TbCompanyAccounts */

$this->breadcrumbs=array(
	'Tb Company Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TbCompanyAccounts', 'url'=>array('index')),
	array('label'=>'Create TbCompanyAccounts', 'url'=>array('create')),
	array('label'=>'Update TbCompanyAccounts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TbCompanyAccounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbCompanyAccounts', 'url'=>array('admin')),
);
?>

<h1>View TbCompanyAccounts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Bank_name',
		'SWIFT_BIC',
		'IBAN',
	),
)); ?>
