<?php 

class Subject implements \SplSubject{

    /**
     * @var int el estado del obejto, escelcial para todo los sobscribidores
     */
    public $state = -999;

     /**
      * @var \SplObjectStorage arreglo de observadores 
      */
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    // metodos de manejo de suscripcion 

    public function attach(\SplObserver $observer): void
    {
        echo "Subject: agregamos un observador<br>";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) : void{
        $this->observers->detach($observer);
        echo "Subject: quitamos un observador <br>";
    }

    // desencadenar una actualizacion en cada observador
    public function notify(): void
    {
        echo "Subject: notoficamos a los observadores<br>";
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    /* ademas de las notificaciones, el sujeto tambien puede contener logica del negocio, siendo 
    la notificacion un producto de estos procesos
    */

    public function somebusinessLogic(){
        echo 'Estoy haciendo algo importante<br>';
        $this->state = rand(0,10);

        echo "mi estado ha cambiado <br> $this->state";

        $this->notify();
    
    }

}