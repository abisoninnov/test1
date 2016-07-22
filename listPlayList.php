<?php 
$playListArray = array(
    	'listArr'  => array(
		'keyword'	=> 'english',
                'datacount'   => '10',
                'startRow'     => '0', 
            ),
);
echo "<pre>"; print_r($playListArray); echo "</pre>";
$jsonplayListArray = json_encode($playListArray);
echo "<pre>"; echo $jsonplayListArray; echo "</pre>"; echo "</br>";
$jsonDecodeArray = json_decode($jsonplayListArray);
echo "<pre>"; print_r($jsonDecodeArray); echo "</pre>";

?>
