<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
	array('label'=>'View Administrador', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>Update Administrador <?php echo $model->id; ?></h1>

<?php

	$session = Yii::app()->user->id;
	
	$user = Yii::app()->db->createCommand()
    ->select('*')
    ->from('administrador')
    ->where('id=:id', array(':id'=>$session))
	->queryRow();
	
	if($user['level']==2 || $user["superuser"]==1 || $user['id']==$model->id )
	{
		$this->renderPartial('_form', array('model'=>$model));
	}else{
		throw new Exception("you do not have permission to edit this record", 1);
		
	}
  ?>