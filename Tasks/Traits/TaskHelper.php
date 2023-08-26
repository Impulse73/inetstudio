<?php

namespace Tasks\Traits;

trait TaskHelper
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getTaskName()
    {
        return "Solution of " . get_class($this) . "</br>";
    }

    /**
     * @return void
     */
    public function getResult()
    {
        $result = $this->doSolution();
        echo $this->getTaskName();

        if (is_string($result)) {
            echo $result;
            echo "</br>";
        } else {
            foreach ($result as $item) {
                var_export($item);
                echo "</br>";
            }
        }
    }
}