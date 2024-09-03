<?php
$this->breadcrumbs=array(
    'Reports',
);

$this->menu=array(
    array('label'=>'Generate Report', 'url'=>array('generate')),
);

?>

<h1>Reports</h1>

<p>Select a report to generate:</p>

<ul>
    <li><?php echo CHtml::link('Generate Report', array('report/generate')); ?></li>
</ul>
