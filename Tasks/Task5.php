<?php

namespace Tasks;

use Tasks\SolutionHelper\ISolution;
use Tasks\Traits\TaskHelper;

class Task5 implements ISolution
{
    use TaskHelper;

    /**
     * @return array|string
     */
    public function doSolution()
    {
        return "
            SELECT id, `name` from
                (SELECT goods.*, COUNT(goods_tags.good_id) AS cnd FROM goods
                    JOIN goods_tags ON goods.id = goods_tags.good_id
            I       NNER JOIN tags ON goods_tags.tag_id = tags.id
                    GROUP BY goods.name) as result
            WHERE cnd = (select count(*) from tags)

        ";
    }
}