<?php

if (isset($_POST["name"]) && isset($_POST["soname"]) ) { 

	// Формируем массив для JSON ответа

	// Функция для частного примера - работает и с кириллицей
	function mb_ucfirst($text) {
	    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
	}
    $result = array(
    	'name' => $_POST["name"],
    	'soname' => mb_ucfirst($_POST["soname"])
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}
