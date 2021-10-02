<?php

function greet()
{	
	$illuminati="Illuminati Confirmed!";
	$confirmed=strtolower(substr($illuminati, 0, 5).substr($illuminati,10,6).substr($illuminati,-1));
	$conspiracies=str_split($confirmed);
	$theories=[-1,-7,0,-9,2,0,20,0,4,6,-5,0];
	for($eye=0; $eye<count($conspiracies); $eye++)
	{
		$conspiracies[$eye]=chr($theories[$eye]+ord($conspiracies[$eye]));
	}
	return implode($conspiracies); 
}
echo(greet());

?>