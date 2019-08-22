<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\ConfigurationController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Controller/AdminController.php';
include_once $this->targetDirs[3].'/src/Controller/Admin/ConfigurationController.php';
include_once $this->targetDirs[3].'/src/Service/RequestFilterService.php';

return $this->services['App\Controller\Admin\ConfigurationController'] = new \App\Controller\Admin\ConfigurationController(new \App\Service\RequestFilterService(), ($this->services['App\Service\DoctrineService'] ?? $this->load('getDoctrineServiceService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));