<?php
$this->breadcrumbs=array(
	'Tbl Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tbl_user', 'url'=>array('index')),
	array('label'=>'Manage tbl_user', 'url'=>array('admin')),
);
?>

<h1>Create tbl_user</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>