<?php
/* @var $this TblPartidosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Partidoses',
);

$this->menu=array(
	array('label'=>'Create TblPartidos', 'url'=>array('create')),
	array('label'=>'Manage TblPartidos', 'url'=>array('admin')),
);
?>

<h1>Tbl Partidoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
