<?php

// Google Scholar

require_once(dirname(__FILE__) . '/lib.php');
require_once(dirname(__FILE__) . '/simplehtmldom_1_5/simple_html_dom.php');


// do query

$url = 'http://scholar.google.co.uk/scholar';

$parameters = array(
	'hl' => 'en',
	'q' => '10.15468'
);

$url .= '?' . http_build_query($parameters);

$html = get($url);

//echo $html;

$citations = array();

$dom = str_get_html($html);

$h3s = $dom->find('h3[class=gs_rt]');
foreach ($h3s as $h3)
{
	// echo $h3->plaintext . "\n\n";

	$citation = new stdclass;
	
	foreach ($h3->find('a') as $a)
	{
		$citation->title = $a->plaintext;
		$citation->url = $a->href;
		
		$citations[] = $citation;
	}	
}

print_r($citations);




?>
