<?php
//desligando todos os erros reportados
error_reporting(0);

//reportando erros simples
error_reporting(E_ERROR | E_WARNING | E_PARSE );

//reportando e_notice pode ser bom (para reportar
//variáveis não inicializadas ou 
//catch name errados
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//reportando todos os erros exceto e_notice
error_reporting(E_ALL & ~E_NOTICE);

//reportando todos os erros PHP
error_reporting(E_ALL);
error_reporting(-1);

//mesmo como e_all
ini_set('error_reporting', E_ALL);

