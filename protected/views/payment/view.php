<?php
$this->breadcrumbs=array(
    'Payments'=>array('index'),
    $model->id,
);

$this->menu=array(
    array('label'=>'Update Payment', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Payment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this payment?')),
    array('label'=>'Manage Payment', 'url'=>array('admin')),
);

?>

<h1>View Payment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'patient_id',
        'amount',
        'payment_date',
    ),
)); ?>
