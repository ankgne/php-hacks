<!DOCTYPE html>
<html class="no-js" lang="en-US" itemscope="itemscope" itemtype="http://schema.org/Article">

<head>
    <meta charset="UTF-8" />
<body>

<?php
$xml_content = file_get_contents('xml.xml');
$converted_text = simplexml_load_string($xml_content);
#var_dump($converted_text->OperationRequest->Arguments);
$json = json_encode($converted_text);
$array = json_decode($json,TRUE);
var_dump($array['Items']);
foreach ($array['Items']['Item'] as $items){
    echo ($items['EditorialReviews']['EditorialReview']['Content']);
    echo "</br>";
    #var_dump($items['ItemAttributes']['Title']);
}
?>
</body>
</html>
