<?php
$this->breadcrumbs=array(
	'Tbl Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tbl_user', 'url'=>array('index')),
	array('label'=>'Create tbl_user', 'url'=>array('create')),
	array('label'=>'Update tbl_user', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tbl_user', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage tbl_user', 'url'=>array('admin')),
);
?>

<h1>View tbl_user #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
