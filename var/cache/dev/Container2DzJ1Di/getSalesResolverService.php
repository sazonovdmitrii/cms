<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\GraphQL\Resolver\SalesResolver' shared autowired service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/src/Definition/Resolver/AliasedInterface.php';
include_once $this->targetDirs[3].'/src/GraphQL/Resolver/SalesResolver.php';

return $this->services['App\GraphQL\Resolver\SalesResolver'] = new \App\GraphQL\Resolver\SalesResolver(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));