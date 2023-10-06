 <!-- <?php 
$text = "Palmeiras é uma merda";
$result = substr($text, 0, 20);
echo $result;
  ?> 

 <?php
$text = "salve o tricolor das bixas beijando todos os brasileiros tu um dia ja foi grande porque antes tinha goleiro";
$leght = strpos($text, "todos os brasileiros");
$result = substr($text, 0, $leght);
echo $result;
?>   -->

<?php
findZero('01234');
 function findZero ($numberString) {
    if (strstr($numberString, '0')){
        echo 'Encontrado o zero';
    }else {
        echo 'nao encontrado o zero';
    }
 }   

 