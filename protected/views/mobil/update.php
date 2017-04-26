<?php
/* @var $this MobilController */
/* @var $model Mobil */

$this->breadcrumbs=array(
	'Mobils'=>array('index'),
	$model->plat_no=>array('view','id'=>$model->plat_no),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mobil', 'url'=>array('index')),
	array('label'=>'Create Mobil', 'url'=>array('create')),
	array('label'=>'View Mobil', 'url'=>array('view', 'id'=>$model->plat_no)),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>Update Mobil <?php echo $model->plat_no; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>