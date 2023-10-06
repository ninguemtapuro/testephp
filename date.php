<?php
 //echo date("d/m/y");


 //  $date1 = "01-012023";
//  $date2 = "31-12-2023";
//  if($date1 > $date2)
//  echo "$date1 é mais recente que $date2";
//  else
//  echo "$date1 é mais antigo que $date2"

// $nextWeek = time() + (7 * 24 * 60 * 60);
// echo 'Now:      '.date('d-m-Y'). "<br>";
// echo 'Now:      '.date('d-m-Y', $nextWeek). "<br>";
// echo 'Now:      '.date('d-m-Y', strtotime('+1 week')). "<br>";

// echo 'Proximo mes: '. date('d-m-Y', strtotime('+1 month')) . "<br>";
//  

// $data = mktime(14,30,00,0,28,2023);
// echo date("d-m-Y", $data). "<br>";
// echo date("d-m-Y H:i", $data). "<br>";
// echo date("Y", $data). "<br>";
$atual = new DateTime();
$especifica = new DateTime('1990-01-22');
$texto = new DateTime(' +1month');
print_r($atual);
print_r($especifica);
print_r($texto);
?>
