<?php

require_once 'vendor/autoload.php'; 

$es = new Elasticsearch\Clinet([
	'hosts' => ['127.0.0.1:9200']
]); 