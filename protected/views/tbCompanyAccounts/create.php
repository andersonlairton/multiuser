<?php
/* @var $this TbCompanyAccountsController */
/* @var $model TbCompanyAccounts */

$this->breadcrumbs=array(
	'Tb Company Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbCompanyAccounts', 'url'=>array('index')),
	array('label'=>'Manage TbCompanyAccounts', 'url'=>array('admin')),
);
?>

<h1>Create TbCompanyAccounts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>