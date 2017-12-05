<?php
namespace lib;

class View
{
    private $dir;
    private $layout = 'layout';
    private static $objInstance = null;

    private function __construct($dir = false, $layout = false)
    {
        if ($dir) {
            $this->dir = $dir;
        }else{
            $this->dir = realpath(__DIR__ . '/..') . '/views';
        }
        if ($layout) {
            $this->layout = $layout;
        }
    }

    public function render($view, $vars = array())
    {
        $tpl = new Template( $this->dir );
        $content = $tpl->render($view, $vars);
        echo $tpl->render($this->layout, array('content' => $content));
    }

    public static function getInstance($params = false)
    {
        if (self::$objInstance == null) {
            self::$objInstance = new View($params);
        }
        return self::$objInstance;
    }
}