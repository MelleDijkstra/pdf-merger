<?php
use melledijkstra\PDFMerger\PDFMerger;

include 'vendor/autoload.php';

$pdf = new PDFMerger();

$pdf->addPDF(__DIR__.'/samplepdfs/test.pdf', 'all')
	->addPDF(__DIR__.'/samplepdfs/sample.pdf', '3-5')
	->merge('file', 'samplepdfs/TEST2.pdf');
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
