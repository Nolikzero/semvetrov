<?php
namespace api;

use lib\App;
use lib\View;
use models\Model;

class ApiTaskThird extends Api
{

    private function decart($arr)
    {
        $result = [];
        $curr = [];
        $back = function($index) use (&$back, &$arr, &$result, &$curr)
        {
            if ($index == count($arr)) return array_push($result, $curr);
            for ($i = 0; $i < count($arr[$index]); ++$i) {
                $curr[$index] = $arr[$index][$i];
                $back($index + 1);
            }
        };
        $back(0);
        return $result;
    }


    function exec($params = array())
    {
        // TODO: Implement exec() method.

        $arr = [
            ['a1', 'a2', 'a3'],
            ['b1', 'b2'],
            ['c1', 'c2', 'c3'],
            ['d1']
        ];
        $result = $this->decart($arr);
        View::getInstance()->render('api_3', compact('arr', 'result'));

    }
}