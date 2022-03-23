<?php // bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/Entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    /*
     * MAMP users
     * 'host'     => '127.0.0.1',
     * 'port'     => 8889,
     */
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'salutem',
    'charset' => 'utf8',
);

$config = Setup::createAttributeMetadataConfiguration($paths, $isDevMode, null, null, false); // Replace with createAttributeMetadataConfiguration to use PHP8 attributes
$entityManager = EntityManager::create($dbParams, $config);

// Configuration de Twig
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);
