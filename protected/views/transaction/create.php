<?php
$this->breadcrumbs=array(
    'Transactions'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'Manage Transactions', 'url'=>array('admin')),
);

?>

<h1>Create Transaction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
