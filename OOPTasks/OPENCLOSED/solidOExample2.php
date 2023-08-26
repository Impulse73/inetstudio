<?php

interface HandleObj {
    public function getHandler(): string;
}

class SomeObject implements HandleObj
{
    /**
     * @var
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name) { }

    /**
     * @return void
     */
    public function getObjectName() { }

    /**
     * @return string
     */
    public function getHandler(): string
    {
       return 'handler';
    }
}

class SomeObjectsHandler {
    public function __construct() { }

    /**
     * @param HandleObj[] $objects
     * @return array
     */
    public function handleObjects($objects): array {
        $handlers = [];

        foreach ($objects as $object) {
            $handlers[] = $object->getHandler();
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