<?php
$this->breadcrumbs=array(
    'Medicines'=>array('index'),
    $model->name,
);

$this->menu=array(
    array('label'=>'Update Medicine', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Medicine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this medicine?')),
    array('label'=>'Manage Medicine', 'url'=>array('admin')),
);

?>

<h1>View Medicine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'name',
        'description',
        'price',
    ),
)); ?>
