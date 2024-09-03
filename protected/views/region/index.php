<?php
$this->breadcrumbs=array(
    'Regions',
);

$this->menu=array(
    array('label'=>'Create Region', 'url'=>array('create')),
);

?>

<h1>Regions</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'region-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
