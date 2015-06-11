<?php
/* @var $this TblPartidosController */
/* @var $model TblPartidos */

$this->breadcrumbs=array(
	'Tbl Partidoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPartidos', 'url'=>array('index')),
	array('label'=>'Manage TblPartidos', 'url'=>array('admin')),
);
?>

<h1>Create TblPartidos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>