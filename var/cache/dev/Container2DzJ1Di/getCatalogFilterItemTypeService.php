<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Overblog\GraphQLBundle\__DEFINITIONS__\CatalogFilterItemType' shared service.

include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Definition/Type.php';

return $this->services['Overblog\GraphQLBundle\__DEFINITIONS__\CatalogFilterItemType'] = ($this->privates['overblog_graphql.type_factory'] ?? $this->load('getOverblogGraphql_TypeFactoryService.php'))->create('Overblog\\GraphQLBundle\\__DEFINITIONS__\\CatalogFilterItemType');
