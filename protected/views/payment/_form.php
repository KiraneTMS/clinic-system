<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'payment-form',
    'enableAjaxValidation'=>false,
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'patient_id'); ?>
    <?php echo $form->textField($model,'patient_id'); ?>
    <?php echo $form->error($model,'patient_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'amount'); ?>
    <?php echo $form->textField($model,'amount'); ?>
    <?php echo $form->error($model,'amount'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'payment_date'); ?>
    <?php echo $form->textField($model,'payment_date'); ?>
    <?php echo $form->error($model,'payment_date'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
