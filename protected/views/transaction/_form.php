<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'transaction-form',
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
    <?php echo $form->labelEx($model,'action_id'); ?>
    <?php echo $form->textField($model,'action_id'); ?>
    <?php echo $form->error($model,'action_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'medication_id'); ?>
    <?php echo $form->textField($model,'medication_id'); ?>
    <?php echo $form->error($model,'medication_id'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'date'); ?>
    <?php echo $form->textField($model,'date'); ?>
    <?php echo $form->error($model,'date'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
