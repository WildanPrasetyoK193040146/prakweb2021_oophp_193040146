<?php

// define('Nama', 'Wildan');
// echo Nama;

// echo "<br>";

// const Umur = 20;
// echo Umur;

use Coba as GlobalCoba;

// class Coba {
//     const Nama = 'Wildan';
// }

// echo Coba::Nama;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>