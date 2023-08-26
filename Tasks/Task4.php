<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task4 implements ISolution
{
    use TaskHelper;

    /**
     * @return array
     */
    public function doSolution(): array
    {
        $data = $this->data;

        $result = array_column($data, 'id', 'name');

        return [$result];
    }
}