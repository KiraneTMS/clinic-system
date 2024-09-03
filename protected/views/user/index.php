<?php
$this->breadcrumbs=array(
    'Users',
);

$this->menu=array(
    array('label'=>'Create User', 'url'=>array('create')),
);

?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'user-grid',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'id',
        'username',
        'email',
        'role',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
