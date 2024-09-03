<?php
$this->breadcrumbs=array(
    'Employees'=>array('index'),
    $model->name,
);

$this->menu=array(
    array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this employee?')),
    array('label'=>'Manage Employee', 'url'=>array('admin')),
);

?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'name',
        'position',
        'department',
    ),
)); ?>
