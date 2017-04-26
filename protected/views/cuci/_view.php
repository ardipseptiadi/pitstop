<?php
/* @var $this CuciController */
/* @var $data Cuci */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cuci')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cuci), array('view', 'id'=>$data->id_cuci)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuci_ke')); ?>:</b>
	<?php echo CHtml::encode($data->cuci_ke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />


</div>