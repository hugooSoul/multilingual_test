<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_STRICT);

require 'vendor/autoload.php';

// Set language to French
putenv('LC_ALL=es_ES');
setlocale(LC_ALL, 'es_ES');

// Specify the location of the translation tables
bindtextdomain('ayce', 'locale');
bind_textdomain_codeset('ayce', 'UTF-8');

// Choose domain
textdomain('ayce');

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
    'debug' => true,
));

$twig->addExtension(new Twig_Extensions_Extension_I18n());

$twig->display('index.html');
