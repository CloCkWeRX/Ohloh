<?php
/** @todo Shift to proper include path */
//require_once dirname(__FILE__) . '/../Ohloh.php';
require_once 'Ohloh.php';

$apikey = '...';
$client = new Ohloh($apikey, 'pear');
//print_r($client->getProjectInfo('pear'));
$document = $client->getAll(array($client, 'getProjectEnlistments'));
print_r($document->results);
