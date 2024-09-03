<?php
$this->breadcrumbs=array(
    'Patients',
);

$this->menu=array(
    array('label'=>'Create Patient', 'url'=>array('create')),
);

?>

<h1>Patients</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'patient-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        'dob',
        'phone',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
