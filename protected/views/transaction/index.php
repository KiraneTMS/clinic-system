<?php
$this->breadcrumbs=array(
    'Transactions',
);

$this->menu=array(
    array('label'=>'Create Transaction', 'url'=>array('create')),
);

?>

<h1>Transactions</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'transaction-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'patient_id',
        'action_id',
        'medication_id',
        'date',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
