<?php 
//Ficheiro de inicialização de configurações gerais
define('DS', DIRECTORY_SEPARATOR);
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT',ROOT.DS.'meu_site');
# 2º alternativa
# define('SITE_ROOT',DS.'var'.DS.'www'.DS.'meu_site');
define('LIB_CLASS',SITE_ROOT.DS.'classes');
define('LIB_INCLUDES',SITE_ROOT.DS.'includes');
?>