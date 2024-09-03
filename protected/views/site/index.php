<?php
$this->breadcrumbs=array(
    'Home',
);

$this->menu=array(
    array('label'=>'Manage Regions', 'url'=>array('region/index')),
    array('label'=>'Manage Users', 'url'=>array('user/index')),
    array('label'=>'Manage Employees', 'url'=>array('employee/index')),
    array('label'=>'Manage Actions', 'url'=>array('action/index')),
    array('label'=>'Manage Medications', 'url'=>array('medication/index')),
    array('label'=>'Register Patient', 'url'=>array('transaction/create')),
    array('label'=>'Manage Transactions', 'url'=>array('transaction/index')),
    array('label'=>'Generate Report', 'url'=>array('report/index')),
);
?>

<h1>Welcome to the Clinic Information System</h1>

<p>Welcome to the Clinic Information System. Here you can manage regions, users, employees, actions, and medications. You can also register patients, manage transactions, and generate reports.</p>

<h2>Quick Links</h2>
<ul>
    <li><?php echo CHtml::link('Manage Regions', array('region/index')); ?></li>
    <li><?php echo CHtml::link('Manage Users', array('user/index')); ?></li>
    <li><?php echo CHtml::link('Manage Employees', array('employee/index')); ?></li>
    <li><?php echo CHtml::link('Manage Actions', array('action/index')); ?></li>
    <li><?php echo CHtml::link('Manage Medications', array('medication/index')); ?></li>
    <li><?php echo CHtml::link('Register Patient', array('transaction/create')); ?></li>
    <li><?php echo CHtml::link('Manage Transactions', array('transaction/index')); ?></li>
    <li><?php echo CHtml::link('Generate Report', array('report/index')); ?></li>
</ul>
