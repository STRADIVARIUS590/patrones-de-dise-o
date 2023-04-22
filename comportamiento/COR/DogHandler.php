<?php 

include_once 'AbstractHandler.php';

class DogHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {
        if($request == "Meat"){
            return "Dog: I will eat the $request<br>";
        }
        return parent::handle($request);
    } 
}