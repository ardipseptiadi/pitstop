<?php
/* @var $this MobilController */
/* @var $model Mobil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mobil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'plat_no'); ?>
		<?php echo $form->textField($model,'plat_no',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'plat_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemilik'); ?>
		<?php echo $form->textField($model,'pemilik',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'pemilik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warna'); ?>
		<?php echo $form->textField($model,'warna',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'warna'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe'); ?>
		<?php echo $form->textField($model,'tipe',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tipe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->