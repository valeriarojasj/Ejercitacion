<?php

$contadorGlobal=0;
function aumentarContador(){
global $contadorGlobal;
  return $contadorGlobal+1;
}
echo "el nuevo valor es:" $contadorGlobal

?>
