<?php
	foreach($_POST as $chave=>$valor)
	echo $chave. ': '.$valor. '<br>';

	foreach($_GET as $chave=>$valor)
	echo $chave. ': '.$valor. '<br>';
?>