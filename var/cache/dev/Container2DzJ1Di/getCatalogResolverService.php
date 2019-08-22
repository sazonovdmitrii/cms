<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\GraphQL\Resolver\CatalogResolver' shared autowired service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
include_once $this->targetDirs[3].'/src/GraphQL/Resolver/CatalogResolver.php';

return $this->services['App\GraphQL\Resolver\CatalogsResolver'] = new \App\GraphQL\Resolver\CatalogsResolver(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['App\Service\TagService'] ?? $this->load('getTagServiceService.php')), ($this->services['App\Service\UrlParseService'] ?? $this->load('getUrlParseServiceService.php')));
