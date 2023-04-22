<?php 
include_once 'AbstractHandler.php';
// include AbstractHandler::class;

class MonkerHandler extends AbstractHandler{

    public function handle(string $request): ?string{
        if($request == "Banana"){
            return "Monkey : I will eat the $request";
        }
        return parent::handle($request);
    }
}