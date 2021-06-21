<?php

namespace App;

use App\Lib2\Test2;

class Test {
    function __construct()
    {
        echo "Test 객체 생성됨"; 

        new Test2();
    }
}