<?php

namespace app\test\controller;
use think\Db;   // 引用数据库操作类

class Index
{
    // 我的方法名叫index
    function index()
    {
        echo "<br>";
        var_dump(Db::name('teacher')->find());
        echo "<br>";
    }
}