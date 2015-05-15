<?php

function treugolnik($a,$h)
 {
   $s=0.5*$a*$h;
   echo 'S треугольника ='. $s."<br>";
 }

  treugolnik(5, 4);

function priamougolnik($a,$b)
 {
   $s=$a*$b;
   echo 'S прямоугольника ='. $s."<br>";
 }

  priamougolnik(3, 4);

function krug($r)
 {
   $s=3.141592*($r*$r);
   echo 'S круга ='. $s."<br>";
 }

  krug(452);
