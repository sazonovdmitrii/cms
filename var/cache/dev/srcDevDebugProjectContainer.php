<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2DzJ1Di\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2DzJ1Di/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container2DzJ1Di.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container2DzJ1Di\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container2DzJ1Di\srcDevDebugProjectContainer([
    'container.build_hash' => '2DzJ1Di',
    'container.build_id' => '6232b79b',
    'container.build_time' => 1562255109,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2DzJ1Di');
