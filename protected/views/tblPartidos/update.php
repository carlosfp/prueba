<?php
/* @var $this TblPartidosController */
/* @var $model TblPartidos */

$this->breadcrumbs=array(
	'Tbl Partidoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPartidos', 'url'=>array('index')),
	array('label'=>'Create TblPartidos', 'url'=>array('create')),
	array('label'=>'View TblPartidos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblPartidos', 'url'=>array('admin')),
);
?>

<h1>Update TblPartidos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>