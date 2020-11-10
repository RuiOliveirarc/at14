<?php
	if(isset($_POST["txt_nome"])&& isset($_POST["txt_idade"])){

		$nome=$_POST["txt_nome"];
		$idade=$_POST["txt_idade"];
		echo 'Nome: ' .$nome. '<br>';
		echo 'Idade: '.$idade;

	}
	if(isset($_GET["txt_nome"])&& isset($_GET["txt_idade"])){

		$nome=$_GET["txt_nome"];
		$idade=$_GET["txt_idade"];
		echo 'Nome: ' .$nome. '<br>';
		echo 'Idade: '.$idade;
	}
?>