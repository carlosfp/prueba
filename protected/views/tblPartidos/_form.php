<?php
/* @var $this TblPartidosController */
/* @var $model TblPartidos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-partidos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jugador1'); ?>
		<?php echo $form->textField($model,'jugador1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jugador1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jugador2'); ?>
		<?php echo $form->textField($model,'jugador2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jugador2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_juego'); ?>
		<?php echo $form->textField($model,'fecha_juego'); ?>
		<?php echo $form->error($model,'fecha_juego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'resultado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->