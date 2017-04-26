<?php
/* @var $this CuciController */
/* @var $model Cuci */

$this->breadcrumbs=array(
	'Cucis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cuci', 'url'=>array('index')),
	array('label'=>'Manage Cuci', 'url'=>array('admin')),
);
?>

<h1>Create Cuci</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>