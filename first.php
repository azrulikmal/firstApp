<?php
/* You may run the code using any online php tester.
For example: http://phptester.net/
*/
function compress($str){
//compress and matching the $str
preg_match_all('/(.)\1*/', $str, $m, PREG_SET_ORDER);
$m = array_map(function($i) { return $i[1] . strlen($i[0]); } , $m);
// display array in $m
echo implode('', $m);
}
//testing the string with function we create above
compress('aaaabbaaaababbbcccccccccccc');
?>