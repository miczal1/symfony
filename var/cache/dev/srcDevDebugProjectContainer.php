<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNbgVfIG\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNbgVfIG/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerNbgVfIG.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerNbgVfIG\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerNbgVfIG\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'NbgVfIG',
    'container.build_id' => 'b2f7a619',
    'container.build_time' => 1525026522,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNbgVfIG');
