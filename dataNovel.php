<?php

require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/bookpw5/Data/novel.rdf");
$foaf->load();

$data = array();

foreach ($foaf->allOfType('foaf:book') as $person) {
    $name = $person->get('foaf:name');
    $image = $person->get('foaf:image');

    array_push(
        $data,
        array(
            'name' => $name->getValue(),
            'image' => $image->getValue()
        )
    );
}

header('Content-Type: application/json');
$fix = json_encode($data);
echo $fix;
return $fix;
