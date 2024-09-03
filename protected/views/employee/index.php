<?php
$this->breadcrumbs=array(
    'Employees',
);

$this->menu=array(
    array('label'=>'Create Employee', 'url'=>array('create')),
);

?>

<h1>Employees</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'employee-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        'position',
        'department',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
