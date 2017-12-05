<?php
namespace api;

abstract class Api
{
    abstract function exec($params = array());

}