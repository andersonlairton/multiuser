<?php
/* @var $this TbCompanyAccountsController */
/* @var $model TbCompanyAccounts */

$this->breadcrumbs=array(
	'Tb Company Accounts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbCompanyAccounts', 'url'=>array('index')),
	array('label'=>'Create TbCompanyAccounts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-company-accounts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tb Company Accounts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tb-company-accounts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Bank_name',
		'SWIFT_BIC',
		'IBAN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
