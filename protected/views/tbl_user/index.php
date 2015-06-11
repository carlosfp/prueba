<?php
$this->breadcrumbs=array(
	'Tbl Users',
);

$this->menu=array(
	array('label'=>'Create tbl_user', 'url'=>array('create')),
	array('label'=>'Manage tbl_user', 'url'=>array('admin')),
);
?>

<h1>Tbl Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
