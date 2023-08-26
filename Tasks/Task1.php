<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task1 implements ISolution
{

    use TaskHelper;

    /**
     * @return array
     */
    public function doSolution(): array
    {
        $data = $this->data;
        $filteredArray = [];

        if (!$data) {
            return [];
        }

        $ids = array_unique(array_column($data, 'id'));

        while(!empty($ids)) {
            $key = array_key_first($ids);
            $filteredArray[] = $data[$key];
            unset($ids[$key]);
        }

        return $filteredArray;
    }
}