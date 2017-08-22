<?php
require 'vendor/autoload.php';
include_once 'Sample_Header.php';

// Read contents
$name = basename(__FILE__, '.php');
$source = __DIR__ . "/resources/{$name}1.docx";

echo date('H:i:s'), " Reading contents from `{$source}`", EOL;
$phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
$phpWord->addSection(array('pageNumberingStart' => 2));
// echo '<pre>';
// print_r($phpWord);
// echo '</pre>';
// Save file
echo write($phpWord, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}