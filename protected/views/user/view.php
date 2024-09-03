<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->username,
);

$this->menu=array(
    array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this user?')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);

?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'username',
        'email',
        'role',
    ),
)); ?>
