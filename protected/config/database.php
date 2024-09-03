<?php

// This is the database connection configuration.
return array(
    // Uncomment the following lines to use a MySQL database
    'connectionString' => 'mysql:host=localhost;dbname=clinic_db',
    'emulatePrepare' => true,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',  
    'enableProfiling' => true,
    'enableParamLogging' => true,
    
    // Uncomment the following line to use SQLite
    /*
    'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    */
);
