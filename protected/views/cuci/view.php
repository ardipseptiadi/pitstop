<?php
/* @var $this CuciController */
/* @var $model Cuci */

$this->breadcrumbs=array(
	'Cucis'=>array('index'),
	$model->id_cuci,
);

$this->menu=array(
	array('label'=>'List Cuci', 'url'=>array('index')),
	array('label'=>'Create Cuci', 'url'=>array('create')),
	array('label'=>'Update Cuci', 'url'=>array('update', 'id'=>$model->id_cuci)),
	array('label'=>'Delete Cuci', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cuci),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cuci', 'url'=>array('admin')),
);
?>

<h1>View Cuci #<?php echo $model->id_cuci; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cuci',
		'tanggal',
		'cuci_ke',
		'harga',
	),
)); ?>
