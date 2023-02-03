<?php

use App\Bleus\TroisiemeClasse;
use App\Bleus\UneClasse;
use App\Verts\UneClasse as VertsUneClasse;

// require './lib1/classe1.php';
// require './lib2/classe1.php';
// require './lib2/classe2.php';


// FQCN : Full Qualified Class Name

// $obj1 = new UneClasse;
// $obj2 = new VertsUneClasse;
// $bdd = new PDO("mysql:host=localhost;dbname=test", "root", "");
// var_dump($bdd);

// $obj3 = new TroisiemeClasse;


// Autoloader

require './vendor/autoload.php';


$obj = new UneClasse();
$objbis = new TroisiemeClasse();
$objetTer = new VertsUneClasse();