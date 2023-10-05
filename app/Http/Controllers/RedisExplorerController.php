<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisExplorerController extends Controller
{
    //
    public function  set_pattern(){
        $i = 0 ;
        for ( $i =0 ; $i< 10; $i++){
            Cache::set('product_'.$i, ["id" => $i, "name" => 'product_'.$i]);
        }


    }
    public  function get_by_pattern(){
//        $pattern = 'product_*';
//        $redis = Cache::getRedis();
//        $keys = $redis->keys("*$pattern*");
//        $count = 0;
//        $result = [];
//        foreach ($keys as $key) {
//            $result[$key] = $redis->get($key);
//        }
//        return $result;



//        $output = Redis::connection('cache')->keys("*product*");
        $output = Redis::keys("*_:product_*");
        return $output;



    }
}
