<?php
require_once('configBdd.php');
require_once dirname(__DIR__) . '/functions/database.fn.php';
$db = getPdoLink($config);
$test = 'test';