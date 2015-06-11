<?php
/* @var $this TblPartidosController */
/* @var $model TblPartidos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jugador1'); ?>
		<?php echo $form->textField($model,'jugador1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jugador2'); ?>
		<?php echo $form->textField($model,'jugador2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_juego'); ?>
		<?php echo $form->textField($model,'fecha_juego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultado'); ?>
		<?php echo $form->textField($model,'resultado',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->