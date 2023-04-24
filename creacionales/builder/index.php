<?php

// permite construir objetos complejos paso a paso 
// permite obtener diferentes tipos del mismo objeto con el mismo codigo de construccion 

// en este patron se extrae el codigo de la construccion del objeto en su propia clase, y usarla en objetos independientes (builders)

// adicionalmente, se puede incluir una clase directora que define el orden en el que se ejectan los pasos de la construccion del objeto



require_once 'ConcreteBuilderOfProduct1.php';
require_once 'Director.php';
$builder = new ConcreteBuilderOfProduct1;
$director = new Director;
$director->setBuilder($builder);




echo "<br> Producto minimo viable: ";
$director->buildMinimalViableproduct();
$builder->getProduct()->listParts();



echo "<br><><><><><><><><";
echo "<br> Producto con caracteristicas completas: ";
$director->buildFullFeaturedProduct();
$builder->getProduct()->listParts();



echo "<br><><><><><><><><";
echo "<br> Producto personalizado: ";
$builder->createPartA();
$builder->createPartC();
$builder->getProduct()->listParts();

echo '<br>---------------------------------------------';


require_once 'ConcreteBuilderOfProduct2.php';
$builder2 = new ConcreteBuilderOfProduct2();
$director->setBuilder($builder2);
$director->buildFullFeaturedProduct();
$builder2->getProduct()->listParts();


echo '<br>FINIS';
