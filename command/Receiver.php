<?php 

/* la clase recibidora contiene slguna de la logica importante del negocio, 
asociadas con llevar a cabo una solicitud. cualquier clase puede ser un recibidor

*/
class Receiver{
  
    public function doSomething($a){
        echo "Receiver. Working on $a <br>";
    }
    
    public function doSomethingElse($b){
        echo "Receiver. Also working on $b <br>";
        
    }
}