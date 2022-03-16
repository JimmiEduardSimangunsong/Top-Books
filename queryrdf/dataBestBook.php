<?php

require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/bookpw5/Data/booksss.rdf");
$foaf->load();

$data = array();

foreach ($foaf->allOfType('foaf:book') as $person) {
    $name = $person->get('foaf:name');
    $author = $person->get('foaf:author');
    $sinopsis = $person->get('foaf:sinopsis');
    $price = $person->get('foaf:price');
    $cover = $person->get('foaf:image');

    array_push(
        $data,
        array(
            'name' => $name->getValue(),
            'author' => $author->getValue(),
            'sinopsis' => $sinopsis->getValue(),
            'price' => $price->getValue(),
            'cover' => $cover->getValue()

        )
    );
}

return $data;
