<?php
namespace api;

use lib\App;
use lib\View;
use models\Model;

class ApiTaskSecond extends Api
{

    private function buildTree($arr, $pid = 0){
        $tmp = [];
        foreach ($arr as $child) {
            if($child['parent_id'] == $pid){
                $tmp[$child['name']] = $this->buildTree($arr, $child['id']);
            }
        }
        return $tmp;
    }


    function exec($params = array())
    {
        // TODO: Implement exec() method.
    
        $tree = App::$db->select('tree', '*');
        $arr = [];
        if(count($tree)) {
            $arr = $this->buildTree($tree);
        }
        View::getInstance()->render('api_2', compact('arr'));

    }
}