<?php

$runner = true;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/modules/fcs-aggregator/switch.php';

use ACDH\FCSSRU\SRUWithFCSParameters,
    ACDH\FCSSRU\switchAggregator\FCSSwitch;

// Set up the parameter object
// x-format=htmlpagetable&operation=searchRetrieve&version=1.2&
// x-dataview=kwic,title&maximumRecords=10&x-context=pes_eng_032&
// query=sense==Persian 
$sru_fcs_params = new SRUWithFCSParameters("strict");
$sru_fcs_params->xformat = 'htmlpagetable';
$sru_fcs_params->operation = 'searchRetrieve';
$sru_fcs_params->version = '1.2';
$sru_fcs_params->xdataview = 'kwic,title';
$sru_fcs_params->maximumRecords = '10';
$sru_fcs_params->xcontext = 'pes_eng_032';
$sru_fcs_params->context = array('pes_eng_032');
$sru_fcs_params->query = 'sense==Persian';
chdir(__DIR__ . '/modules/fcs-aggregator');
$s = new FCSSwitch();
$s->run();


