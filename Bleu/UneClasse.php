<?php

namespace Bleus;

use PDO;

class UneClasse
{
    public function __construct()
    {
        var_dump(__FILE__);
        var_dump(__NAMESPACE__);
        var_dump(__CLASS__);
        var_dump(__METHOD__);
        $this->test();
        $bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");
        var_dump($bdd);
    }

    public function test()
    {
        var_dump(__METHOD__);
    }
}