<?php

class SomeObject {
    protected $name;

    public function __construct(string $name) { }

    public function getObjectName() { }
}

class SomeObjectsHandler {
    public function __construct() { }

    /**
     * @param array $objects
     * @return array
     */
    public function handleObjects(array $objects): array {
        $handlers = [];
        $handlers += $this->standartHandleObjects($objects);

        return $handlers;
    }

    /**
     * @param array $objects
     * @return array
     */
    final function standartHandleObjects(array $objects)
    {
        $handlers = [];
        foreach ($objects as $object) {
            if ($object->getObjectName() == 'object_1')
                $handlers[] = 'handle_object_1';
            if ($object->getObjectName() == 'object_2')
                $handlers[] = 'handle_object_2';
        }

        return $handlers;
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);