<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\SecurityController' shared autowired service.

include_once $this->targetDirs[3].'/src/Controller/SecurityController.php';

$this->services['App\Controller\SecurityController'] = $instance = new \App\Controller\SecurityController();

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->get_ServiceLocator_YchIlgFService())->withContext('App\\Controller\\SecurityController', $this));

return $instance;
