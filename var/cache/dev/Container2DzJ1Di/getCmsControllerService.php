<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Lp\CmsBundle\Controller\CmsController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Lp/Framework/LpController.php';
include_once $this->targetDirs[3].'/src/Lp/CmsBundle/Controller/CmsController.php';

return $this->services['App\Lp\CmsBundle\Controller\CmsController'] = new \App\Lp\CmsBundle\Controller\CmsController(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['App\Service\TagService'] ?? $this->load('getTagServiceService.php')), ($this->services['App\Service\UrlParseService'] ?? $this->load('getUrlParseServiceService.php')));
