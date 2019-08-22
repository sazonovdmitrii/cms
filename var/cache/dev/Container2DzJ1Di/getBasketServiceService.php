<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Service\BasketService' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/BasketService.php';

$this->services['App\Service\BasketService'] = $instance = new \App\Service\BasketService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Redis'] ?? $this->load('getRedisService.php')));

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->get_ServiceLocator_YchIlgFService())->withContext('App\\Service\\BasketService', $this));

return $instance;
