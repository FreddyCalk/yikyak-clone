<?php

$DC_Class = array(
	'front-right' => 'Griffin',
	'front-left' => 'Peter',
	'front-middle-right' => 'Stuart',
	'front-middle-middle' => 'Stephen',
	'front-middle-left' => 'Chance',
	'back-middle-right' => 'Andrew',
	'back-middle-middle' => 'Oliver',
	'back-middle-left' => 'Will',
	'back-right' => 'Freddy',
	'back-left' => 'Yohsuke'
);
function test_print($item2, $key)
{
    echo "$key => $item2<br />\n";
}




shuffle($DC_Class);

array_walk($DC_Class, 'test_print');

// foreach($DC_Class as $student){
// 	print '<div>' . $student. '<br/></div>';
// }

?>