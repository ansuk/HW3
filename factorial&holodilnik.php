<?php

function factorial($x) { 
   
    if($x==1){
	return $x;

} else {

  return $x * factorial($x-1);  
} 
}

echo factorial(5)."<br>";


$holodilnik=array('верхняя'=>'мясо','средняя'=>'овощи','нижняя'=>'фрукты');
$holodilnik[0]=array('курица','говядина','свинина');
$holodilnik[1]=array('огурцы','помидоры','баклажаны');
$holodilnik[2]=array('бананы','апельсины','яблоки');
$holodilnik[0][0]=array('бройлер','деревенская','необщипанная');
$holodilnik[0][1]=array('мраморная','телятина','замороженная');
$holodilnik[0][2]=array('ошеек','пятак','вырезка');
$holodilnik[1][0]=array('корнишон','тепличный','соленый');
$holodilnik[1][1]=array('черри','бычье сердце','черный принц');
$holodilnik[1][2]=array('белый','синий','патисон');
$holodilnik[2][0]=array('кормовой','сушеный','зеленый');
$holodilnik[2][1]=array('кислый','сладкий','пропавший');
$holodilnik[2][2]=array('с дачи','импортное','с деревни');

echo $holodilnik[1][1][2]."<br>";

