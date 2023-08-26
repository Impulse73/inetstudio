<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task6 implements ISolution
{
    use TaskHelper;

    public function doSolution()
    {
        return "
        SELECT department_id
            FROM evaluations
        GROUP BY department_id
        HAVING SUM(IF(gender = true AND value > 5, 1, 0)) = SUM(IF(gender = true, 1, 0))
        ";
    }
}