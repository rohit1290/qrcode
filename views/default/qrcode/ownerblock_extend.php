<?php
$title = elgg_echo('qrcode:page:title');

$content = elgg_view('output/qrcode', array('qrcode_url' => current_page_url()));

// Render QR code popup (called by menu)
echo elgg_view_module('popup', $title, $content, array(
		'id' => "elgg-popup-qrcode-page",
		'class' => 'hidden clearfix developers-content-thin',
	));

