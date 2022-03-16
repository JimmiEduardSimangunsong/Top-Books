<?php
require 'vendor/autoload.php';

$foaf = new \EasyRdf\Graph("http://localhost/bookpw5/Data/book.rdf");
$foaf->load();
$me = $foaf->primaryTopic();

$data = array();


foreach ($foaf->allOfType('foaf:book') as $person) {
    $name = $person->get('foaf:name');
    $author = $person->get('foaf:author');
    $publisher = $person->get('foaf:publisher');
    $numberOfPage = $person->get('foaf:numberOfPage');
    $literaryGenre = $person->get('foaf:literaryGenre');
    $country = $person->get('foaf:country');
    $language = $person->get('foaf:language');
    $isbn = $person->get('foaf:isbn');
    $rilis = $person->get('foaf:releaseDate');
    $cover = $person->get('foaf:image');
    $sinopsis = $person->get('foaf:sinopsis');

    array_push(
        $data,
        array(
            'name' => $name->getValue(),
            'author' => $author->getValue(),
            'country' => $country->getValue(),
            'language' => $language->getValue(),
            'rilis' => $rilis->getValue(),
            'cover' => $cover->getValue(),
            'publisher' => $publisher->getValue(),
            'numberOfPage' => $numberOfPage->getValue(),
            'literaryGenre' => $literaryGenre->getValue(),
            'isbn' => $isbn->getValue(),
            'sinopsis' => $sinopsis->getValue()
        )
    );
}

header('Content-Type: application/json');
$fix = json_encode($data);
echo $fix;
return $fix;
