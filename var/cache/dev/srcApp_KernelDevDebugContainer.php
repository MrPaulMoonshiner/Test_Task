<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerELbcaig\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerELbcaig/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerELbcaig.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerELbcaig\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerELbcaig\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ELbcaig',
    'container.build_id' => 'a876fb4d',
    'container.build_time' => 1557091918,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerELbcaig');