<?php // rector.php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Php74\Rector\Property\TypedPropertyRector;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $containerConfigurator->import(DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES);
    $services->set(TypedPropertyRector::class);
};