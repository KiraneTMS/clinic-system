<?php
$this->breadcrumbs=array(
    'Regions'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'Manage Region', 'url'=>array('admin')),
);

?>

<h1>Create Region</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
