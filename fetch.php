<?php

require_once(dirname(__FILE__) . '/lib.php');
require_once(dirname(__FILE__) . '/couchsimple.php');

$force = false;

// do query

$url = 'https://query.eventdata.crossref.org/events';

$parameters = array(
	'rows' => 100,
	'filter' => 'prefix:10.15468'
);

$url .= '?' . http_build_query($parameters);

$json = get($url);

if ($json != '')
{
	$obj = json_decode($json);
	
	if (isset($obj->message))
	{
		foreach ($obj->message->events as $doc)
		{
			$doc->_id = $doc->id;
			
			// print_r($doc);
	
			
			// add to database----------------------------------------------------
			$exists = $couch->exists($doc->_id);
			if (!$exists)
			{
				$couch->add_update_or_delete_document($doc, $doc->_id, 'add');	
			}
			else
			{
				if ($force)
				{
					$couch->add_update_or_delete_document($doc, $doc->_id, 'update');
				}
			}

			

		}
	}

}


?>
