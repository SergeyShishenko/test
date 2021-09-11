<?php

// localhost\www\!other\QR-code\vendor\chillerlan\php-qrcode\examples\svg.php
/**
 *
 * @filesource   svg.php
 * @created      21.12.2017
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2017 Smiley
 * @license      MIT
 */

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};
session_start();
//echo session_id();
// require_once __DIR__.'/../vendor/autoload.php';
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/autoload.php';

// $data = 'https://www.youtube.com/watch?v=DLzxrzFCyOs&t=43s';
$data = 'https://tlgg.ru/M1Tlmm_bot?start=visit__'.session_id();
// $data = 'https://tlgg.ru/M1Tlmm_bot?start=visit:1234567890';
// $data = 'https://tlgg.ru/M1Tlmm_bot?start=visit__test';
// $data = 'https://tlgg.ru/M1Tlmm_bot?start=allowance';
$gzip = true;

// <linearGradient id="g2">
// <stop offset="0%" stop-color="#39F" />
// <stop offset="100%" stop-color="#F3F" />
// </linearGradient>
// <linearGradient id="g1">
// <stop offset="0%" stop-color="#F3F" />
// <stop offset="100%" stop-color="#39F" />
// </linearGradient>

$options = new QROptions([
	'version'      => 7,
	'outputType'   => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'     => QRCode::ECC_L,
	'scale'        => 4,
	'addQuietzone' => true,
	'cssClass'     => 'my-css-class',
	'svgOpacity'   => 1.0,
	'svgDefs'      => '
		<linearGradient id="g2">
			<stop offset="0%" stop-color="#4a89dc" />
			<stop offset="100%" stop-color="#4a89dc" />
		</linearGradient>
		<linearGradient id="g1">
			<stop offset="0%" stop-color="#4a89dc" />
			<stop offset="100%" stop-color="#4a89dc" />
		</linearGradient>
		<style>rect{shape-rendering:crispEdges}</style>',
	'moduleValues' => [
		// finder
		1536 => 'url(#g1)', // dark (true)
		6    => '#fff', // light (false)
		// alignment
		2560 => 'url(#g1)',
		10   => '#fff',
		// timing
		3072 => 'url(#g1)',
		12   => '#fff',
		// format
		3584 => 'url(#g1)',
		14   => '#fff',
		// version
		4096 => 'url(#g1)',
		16   => '#fff',
		// data
		1024 => 'url(#g2)',
		4    => '#fff',
		// darkmodule
		512  => 'url(#g1)',
		// separator
		8    => '#fff',
		// quietzone
		18   => '#fff',
	],
]);

$qrcode = (new QRCode($options))->render($data);

// header('Content-type: image/svg+xml');

// if($gzip === true){
// 	header('Vary: Accept-Encoding');
// 	header('Content-Encoding: gzip');
// 	$qrcode = gzencode($qrcode ,9);
// }
echo $qrcode;


