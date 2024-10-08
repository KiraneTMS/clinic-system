<?php
$this->breadcrumbs=array(
    'Actions'=>array('index'),
    $model->name,
);

$this->menu=array(
    array('label'=>'Update Action', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Action', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this action?')),
    array('label'=>'Manage Action', 'url'=>array('admin')),
);

?>

<h1>View Action #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'name',
        'description',
    ),
)); ?>
