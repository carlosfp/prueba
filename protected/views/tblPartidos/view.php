<?php
/* @var $this TblPartidosController */
/* @var $model TblPartidos */

$this->breadcrumbs=array(
	'Tbl Partidoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblPartidos', 'url'=>array('index')),
	array('label'=>'Create TblPartidos', 'url'=>array('create')),
	array('label'=>'Update TblPartidos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblPartidos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPartidos', 'url'=>array('admin')),
);
?>

<h1>View TblPartidos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jugador1',
		'jugador2',
		'fecha_juego',
		'resultado',
	),
)); ?>
