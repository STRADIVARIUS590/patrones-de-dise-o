<?php 

// permite que un objeto cambie su comportamiento 
// cuando su estado interno ha candiado,como si fuera de una clase diferete

/* 
en un momento dado , el programa puede tener un numero finito de estados, y comportarse de forma 
diferenta dependiendo del actual, pudiendo cambviar entre estos con algunas restricciones dependiendo del estado actual

en este patron se crean clases para cadda uno de los estados que puede tener , y aislar el comportamiento especifico  de cada estado en su propia clase 
el objeto original, llamado 'contexto', almacena estos estados en un pripiedad interna 
*/

include_once 'State.php'; 
include_once 'Context.php';
include_once 'LockedState.php';
include_once 'UnlockedState.php';


$context = new Context;

$context->setState(new UnlockedState); // desbloqueado

echo $context->lockBtnPressHandler(); // bloqueado
echo '<br>';
echo $context->cameraBtnPressHandler();
echo '<br>';
echo $context->unlockPhone();// desbloqueado
echo '<br>';
echo $context->cameraBtnPressHandler();
echo '<br>';
echo $context->lockBtnPressHandler();// bloqueado