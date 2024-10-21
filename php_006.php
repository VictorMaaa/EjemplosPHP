<?php
//define("CIUDAD","Madrid"); //La variable ciudad tendrá el valor madrid

if(defined ("CIUDAD")){
    print("La ciudad es: " . CIUDAD);


}else{
    print("La ciudad no esta definida");
}



?>