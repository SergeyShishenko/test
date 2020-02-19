<?php
/**
 * Header file.
 */
use PhpOffice\PhpSpreadsheet\Helper\SampleVPI;

error_reporting(E_ALL);

require_once __DIR__ . '/../src/Bootstrap.php';

$helper = new SampleVPI();

// Return to the caller script when runs by CLI
if ($helper->isCli()) {
    return;
}
// echo $helper->getPageHeading();
