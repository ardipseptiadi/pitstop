<?php
/* @var $this CuciController */
/* @var $model Cuci */

$this->breadcrumbs=array(
	'Cucis'=>array('index'),
	$model->id_cuci=>array('view','id'=>$model->id_cuci),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuci', 'url'=>array('index')),
	array('label'=>'Create Cuci', 'url'=>array('create')),
	array('label'=>'View Cuci', 'url'=>array('view', 'id'=>$model->id_cuci)),
	array('label'=>'Manage Cuci', 'url'=>array('admin')),
);
?>

<h1>Update Cuci <?php echo $model->id_cuci; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>