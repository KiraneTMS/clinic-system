<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'patient-form',
    'enableAjaxValidation'=>false,
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'dob'); ?>
    <?php echo $form->textField($model,'dob'); ?>
    <?php echo $form->error($model,'dob'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'phone'); ?>
    <?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
    <?php echo $form->error($model,'phone'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'address'); ?>
    <?php echo $form->textArea($model,'address',array('rows'=>4, 'cols'=>50)); ?>
    <?php echo $form->error($model,'address'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
