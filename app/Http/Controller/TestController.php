<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/29
 * Time: 16:57
 */

namespace App\Http\Controller;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * @Controller(prefix="/api/test")
 */
class TestController
{
    /**
     * @RequestMapping(route="index")
     * @return int
     */
    public function test(){
        return ['1','2','2'];
    }

}