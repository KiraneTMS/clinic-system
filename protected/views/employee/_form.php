<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'employee-form',
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
    <?php echo $form->labelEx($model,'position'); ?>
    <?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'position'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'department'); ?>
    <?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'department'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
