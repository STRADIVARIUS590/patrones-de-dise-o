<?php

// nos permite recuperar algunos datos del memento desde los caretakers, sin exponer todos los datos

interface Memento{

    public function getName(): string;

    public function getDate(): string;

}