<?php
/* @var $this MobilController */
/* @var $data Mobil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('plat_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->plat_no), array('view', 'id'=>$data->plat_no)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemilik')); ?>:</b>
	<?php echo CHtml::encode($data->pemilik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warna')); ?>:</b>
	<?php echo CHtml::encode($data->warna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe')); ?>:</b>
	<?php echo CHtml::encode($data->tipe); ?>
	<br />


</div>