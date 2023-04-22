<?php 
include_once 'AbstractHandler.php';

class SquirrellHandler extends AbstractHandler{

    public function __construct(private $can_eat_nuts = true)
    {
        
    }

    public function handle(string $request): ?string{
        if(
            // $this->can_eat_nuts &&
         $request == "Nut"){
            return "Squirrell: I'll eat the $request"; 
        }

        return parent::handle($request);
    }
}
