<?php
$this->breadcrumbs=array(
    'Transactions'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'Create Transaction', 'url'=>array('create')),
    array('label'=>'View Transaction', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Transactions', 'url'=>array('admin')),
);

?>

<h1>Update Transaction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
