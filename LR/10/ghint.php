<?php
header("Cache-Control: no-cache, must-revalidate");
//Прошедшая дата
header("Expires: Mon, l Sep 2008 07:30:00 GMT");
//Инициализация массива названий
$a[]="Audi";
$a[]="BMW";
$a[]="Buick";
$a[]="Chevrolet";
$a[]="Citroen";
$a[]="Dodge";
$a[]="Ferrari";
$a[]="Fiat";
$a[]="Ford";
$a[]="Honda";
$a[]="Hyundai";
$a[]="Cherokee";
$a[]="Cherry";
$a[]="Lada";
$a[]="Lamborghini";
$a[]="Lincoln";
$a[]="Mazda";
$a[]="Mercedes";
$a[]="Mitsubishi";
$a[]="Nissan";
$a[]="Opel";
$a[]="Peugeot";
$a[]="Plymoth";
$a[]="Pontiac";
$a[]="Renault";
$a[]="Rover";
$a[]="Saab";
$a[]="Subaru";
$a[]="Suzuki";
$a[]="Toyota";
$a[]="Volkswagen";
$a[]="Volvo";


$q = $_GET["q"];

if (strlen ($q)>0){
    $hint = "";
    for($i = 0; $i<count($a); $i++){
        if(strtolower($q)== strtolower(substr($a[$i], 0, strlen($q)))){
            if ($hint == ""){
                $hint=$a[$i];
            }
            else{
                $hint=$hint.", ".$a[$i];
            }
        }
    }
}

if($hint ==""){
    $response="no variants";
}
else{
    $response = $hint;
}

echo $response;
?>