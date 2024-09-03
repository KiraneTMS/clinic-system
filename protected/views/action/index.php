<?php
$this->breadcrumbs=array(
    'Actions',
);

$this->menu=array(
    array('label'=>'Create Action', 'url'=>array('create')),
);

?>

<h1>Actions</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'action-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'name',
        'description',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
