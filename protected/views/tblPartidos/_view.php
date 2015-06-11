<?php
/* @var $this TblPartidosController */
/* @var $data TblPartidos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jugador1')); ?>:</b>
	<?php echo CHtml::encode($data->jugador1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jugador2')); ?>:</b>
	<?php echo CHtml::encode($data->jugador2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_juego')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_juego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultado')); ?>:</b>
	<?php echo CHtml::encode($data->resultado); ?>
	<br />


</div>