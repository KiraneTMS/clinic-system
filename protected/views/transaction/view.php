<?php
$this->breadcrumbs=array(
    'Transactions'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'Update Transaction', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Transaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this transaction?')),
    array('label'=>'Manage Transactions', 'url'=>array('admin')),
);

?>

<h1>View Transaction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'patient_id',
        'action_id',
        'medication_id',
        'date',
    ),
)); ?>
