<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle = new Circle('Blue', 3);
$cylinder = new Cylinder('Red', 3 , 4);
$circle->toString();
$cylinder->toString();