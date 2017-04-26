<?php
/* @var $this MobilController */
/* @var $model Mobil */

$this->breadcrumbs=array(
	'Mobils'=>array('index'),
	$model->plat_no,
);

$this->menu=array(
	array('label'=>'List Mobil', 'url'=>array('index')),
	array('label'=>'Create Mobil', 'url'=>array('create')),
	array('label'=>'Update Mobil', 'url'=>array('update', 'id'=>$model->plat_no)),
	array('label'=>'Delete Mobil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->plat_no),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>View Mobil #<?php echo $model->plat_no; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'plat_no',
		'pemilik',
		'warna',
		'tipe',
	),
)); ?>
