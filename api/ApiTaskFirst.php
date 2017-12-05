<?php
namespace api;

use lib\App;
use lib\View;
use models\Model;

class ApiTaskFirst extends Api
{
    function exec($params = array())
    {
        // TODO: Implement exec() method.

        $arr_1 = [];
        $arr_2 = [];
        $value = '';

        if(isset($params['TEXT'])) {
            $value = $params['TEXT'];
            preg_match_all('/\[(?<name>[^\:\]]+)(?:\:)*(?<desc>[^\]]*)\](?<content>[^\[\]]+)\[\/(\1)\]/', $params['TEXT'], $matches, PREG_SET_ORDER);

            foreach ($matches as $match) {
                $arr_1[$match['name']] = $match['content'];
                $arr_2[$match['name']] = $match['desc'];
            }
        }

        App::$view->render('api_1', compact('arr_1', 'arr_2', 'value'));

    }
}