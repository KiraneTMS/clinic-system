<?php
$this->breadcrumbs=array(
    'Employees'=>array('index'),
    $model->name=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'Create Employee', 'url'=>array('create')),
    array('label'=>'View Employee', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Employee', 'url'=>array('admin')),
);

?>

<h1>Update Employee <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
