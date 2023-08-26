<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task2 implements ISolution
{
    use TaskHelper;

    /**
     * @return array
     */
    public function doSolution(): array
    {
        $data = $this->data;

        if (!$data) {
            return [];
        }

        usort($data, function($a,$b){
            return ($a['id']-$b['id']);
        });

        return $data;
    }

}