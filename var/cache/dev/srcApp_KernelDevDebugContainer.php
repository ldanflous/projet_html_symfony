<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVDKA9Q8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVDKA9Q8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVDKA9Q8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVDKA9Q8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVDKA9Q8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VDKA9Q8',
    'container.build_id' => '974b0309',
    'container.build_time' => 1581528174,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVDKA9Q8');
