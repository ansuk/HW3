<?php
echo 'Время:            '. date("H:i:s") ."<br>";
echo 'Сейчас:           '. date('d-M-Y') ."<br>";

 $t=date("H");
    switch ($t)
 {

 	case ($t < 05):
     echo "<h1>"."Ночь на дворе - иди спать"."</h1>";
    break;
   case ($t < 11):
     echo "<h1>"."Доброе утро"."</h1>";
    break;
   case ($t < 17):
     echo "<h1>"."Добрый день"."</h1>";
    break;
   case ($t < 22):
     echo "<h1>"."Добрый вечер"."</h1>";
    break;
    case ($t < 2359):
     echo "<h1>"."Ночь на дворе - иди спать"."</h1>";
    break;
}

?>