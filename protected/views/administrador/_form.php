<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div id="origem" class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'administrador-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'level'); ?>
		<?php
		$models = TbOffice::model()->findAll(1);
		$valores = CHtml::listData($models, 'id', 'office_name');
		echo $form->dropDownList($model, 'level', array(null => 'select position', $valores));
		?>
		<?php echo $form->error($model, 'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'superuser'); ?>
		<?php echo $form->dropDownList($model, 'superuser', array(
			null => 'Are you a super user?',
			1 => 'yes',
			0 => 'no'
		));
		?>
		<?php echo $form->error($model, 'superuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 300)); ?>
		<?php echo $form->error($model, 'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'surname'); ?>
		<?php echo $form->textField($model, 'surname', array('size' => 60, 'maxlength' => 255)); ?>
		<?php echo $form->error($model, 'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'email'); ?>
		<?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 300)); ?>
		<?php echo $form->error($model, 'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 300)); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

	</div>

	<?php $this->endWidget(); ?>
	<input type="button" value="+" onclick="duplicarCampos();">
	<input type="button" value="-" onclick="removerCampos(this);">
</div><!-- form -->
<div id="destino">
</div>
<script>
	function duplicarCampos() {

		var clone = document.getElementById('origem').cloneNode(true); //aqui define o que ira ser clonado 
		var inputsClone = clone.getElementsByTagName('input'); // todos os inputs clonados

		for (var i = 0; i < inputsClone.length; i++) {
			inputsClone[i].value = '';
		}

		destino.appendChild(clone); // todos inputs clonados "limpos"


	}

	function removerCampos(id) {
		var node1 = document.getElementById('destino');
		node1.removeChild(node1.childNodes[0]);
	}
</script>