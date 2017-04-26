<?php
/* @var $this CuciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cucis',
);

$this->menu=array(
	array('label'=>'Create Cuci', 'url'=>array('create')),
	array('label'=>'Manage Cuci', 'url'=>array('admin')),
);
?>

<h1>Cucis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
