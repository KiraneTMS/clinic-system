<?php

// change the following paths if necessary
$yiit='G:\Arsya_no_Shigoto\myProject\Web\PHP\yii-1.1.29.f89b76.tar\yii-1.1.29.f89b76\framework\yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
