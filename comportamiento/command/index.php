<?php
require 'SimpleCommand.php';
$simpleCommand = (new SimpleCommand('AASAS'))->execute();




require 'ComplexCommand.php';
$complexCommand = (new ComplexCommand(new Receiver(), 'AAA', 'BBB'));
$complexCommand->execute();


require 'Invoker.php';
$invoker = new Invoker;
$invoker->setOnStart(new SimpleCommand("Hola desde sompleCommand desde un invocador"));
$invoker->setOnFinish(new  ComplexCommand(new Receiver, "Enviar correo", "guardar reporte"));

$invoker->doSometingImportant();
?>