<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQBdJADW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQBdJADW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQBdJADW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQBdJADW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQBdJADW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QBdJADW',
    'container.build_id' => 'bcb3984e',
    'container.build_time' => 1623335545,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQBdJADW');
