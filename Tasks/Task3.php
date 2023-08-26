<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task3 implements ISolution
{
    use TaskHelper;

    const currentID = 2;
    /**
     * @return array
     */
    public function doSolution(): array
    {
        $data = $this->data;

        if (!$data) {
           return [];
        }

        return array_filter($data, function ($item) {
            return $item['id'] == self::currentID;
        });
    }
}
