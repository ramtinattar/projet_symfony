<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBCpdgYa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBCpdgYa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBCpdgYa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBCpdgYa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBCpdgYa\App_KernelDevDebugContainer([
    'container.build_hash' => 'BCpdgYa',
    'container.build_id' => 'cc50ce8f',
    'container.build_time' => 1644000914,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBCpdgYa');