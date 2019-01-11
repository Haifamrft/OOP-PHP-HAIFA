<?php 

// define('NAMA', 'Haifa Marifatullah' );

// echo NAMA;

// //PAKAI KOSTANTA
// echo "<br>";
// const UMUR = 16;
// echo UMUR;

// class Coba {
// 	const NAMA = 'HAIFA';
// }
// echo Coba::NAMA;

// echo __LINE__;
// echo __FILE__;
// echo __DIR__;
// echo __FUNCTION__;
// echo __CLASS__;
// echo __TRAIT__;
// echo __METHOD__;
// echo __NAMESPACE__;



clas Coba {
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;




 ?>