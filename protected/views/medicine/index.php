<?php
$this->breadcrumbs=array(
    'Medicines',
);

$this->menu=array(
    array('label'=>'Create Medicine', 'url'=>array('create')),
);

?>

<h1>Medicines</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'medicine-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        'description',
        'price',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
