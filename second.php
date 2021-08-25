<?php

/* You may run the code using any online php tester. 
For example: http://phptester.net/
*/

//Create a function to compare first and second url
function checkurl($firsturl, $secondurl)
{

//to allow system to bypass case sensitive, I make it all to lower string;
$array1=parse_url(strtolower($firsturl));
$array2=parse_url(strtolower($secondurl));
//to check if the scheme of url is the same
if($array1['scheme']==$array2['scheme'])
{
	//to check if the host of url is the same
    if($array1['host']==$array2['host'])
	{
		echo 'true';
	}
	else
	{
    echo 'false'; die;
	}
}
else
{
    echo 'false'; die;
}
}


checkurl('http://abc.com:80/~smith/home.html','http://ABC.com/%7Esmith/home.html ');

?>
