<?php
$this->breadcrumbs=array(
    'Actions'=>array('index'),
    $model->name=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'Create Action', 'url'=>array('create')),
    array('label'=>'View Action', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Action', 'url'=>array('admin')),
);

?>

<h1>Update Action <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
