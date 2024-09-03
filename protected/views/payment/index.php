<?php
$this->breadcrumbs=array(
    'Payments',
);

$this->menu=array(
    array('label'=>'Create Payment', 'url'=>array('create')),
);

?>

<h1>Payments</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'payment-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'patient_id',
        'amount',
        'payment_date',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
