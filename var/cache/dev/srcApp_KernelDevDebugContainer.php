<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBBqFxd9\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBBqFxd9/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBBqFxd9.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBBqFxd9\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBBqFxd9\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BBqFxd9',
    'container.build_id' => '1371330b',
    'container.build_time' => 1584139657,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBBqFxd9');
