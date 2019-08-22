<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'session' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Session.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Session/Flash/FlashBag.php';

return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], new \Symfony\Component\HttpFoundation\Session\Storage\Handler\RedisSessionHandler(($this->privates['Redis'] ?? $this->load('getRedisService.php'))), new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0')), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
