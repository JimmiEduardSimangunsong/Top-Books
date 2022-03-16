<?php
require '../vendor/autoload.php';

$foaf = new \EasyRdf\Graph($_GET['data']);
$foaf->load();
$me = $foaf->primaryTopic();
echo $foaf->dump();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDF Source</title>
</head>

</html>