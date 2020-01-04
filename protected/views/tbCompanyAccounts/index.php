<?php
/* @var $this TbCompanyAccountsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Company Accounts',
);

$this->menu=array(
	array('label'=>'Create TbCompanyAccounts', 'url'=>array('create')),
	array('label'=>'Manage TbCompanyAccounts', 'url'=>array('admin')),
);
?>

<h1>Tb Company Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
