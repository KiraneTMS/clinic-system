<?php
$this->breadcrumbs=array(
    'Medicines'=>array('index'),
    $model->name=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'Create Medicine', 'url'=>array('create')),
    array('label'=>'View Medicine', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Medicine', 'url'=>array('admin')),
);

?>

<h1>Update Medicine <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
