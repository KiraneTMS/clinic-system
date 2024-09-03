<?php
$this->breadcrumbs=array(
    'Employees'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'Manage Employee', 'url'=>array('admin')),
);

?>

<h1>Create Employee</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
