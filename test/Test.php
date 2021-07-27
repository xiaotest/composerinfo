<?php
namespace Guanguansinfo\Test;
require_once '../vendor/autoload.php';
use Guanguansinfo\info;

/**
 * Class Test 测试文件只需引入auto 文件 然后调用文件命名空间、即可
 */
class Test{

   public static function hello(){

        info::hello();
    }
}
Test::hello();