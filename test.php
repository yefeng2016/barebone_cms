<?php

$a = array(
    "one" => 1,
    "two" => 0,
    "three" => 0,
    "seventeen" => 17
);
function isSetPost($a = array()){
	$fields = '';
	foreach ($a as $key => $value) {
	if($value == 0){
		$fields.= $key.',';
	}	
}
return $fields;
}

isSetPost($a);
