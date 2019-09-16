

<?php

function mayor($A,$B,$C){

  if($A>$B)
{$mayorAB=$A;} else {
  $mayorAB=$B;}
  if($mayorAB>$C){
    $elMayor=$mayorAB;
  }else{
    $elMayor=$C;
  }
  return $elMayor;

}

function tabla($base,$limite){

$cosas =[];
for ($i = $base; $i <= $limite ; $i++){
  $cosas[] =$i;
 }
return $cosas;
}

function mayor2($A,$B,$C=100){

  if($A>$B)
{$mayorAB=$A;} else {
  $mayorAB=$B;}
  if($mayorAB>$C){
    $elMayor=$mayorAB;
  }else{
    $elMayor=$C;
  }
  return $elMayor;

}



function tabla2($base,$limite=100){

  $cosas =[];
  for ($i = $base; $i <= $limite ; $i++){
    $cosas[] =$i;
  }
  return $cosas;
}

?>
