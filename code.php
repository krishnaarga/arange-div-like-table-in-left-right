<?php

// Mearge Two Div Like table in right and left angle
$a = '------------------------';
$b = '*******';
$c = '========================';



$name = ['Krishna', 'Aftab', 'Amit', 'Gaurav', 'Naresh'];
$table_of_two = [0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20];


$count = 0;
foreach ($name as $key => $value) {
    if($key == $table_of_two[$count]){
        echo $a.'<br>';
        echo 'ok - '.$key.' == '.$table_of_two[$count];
        echo '<br>';

        if(count($name)-1 == $key){
            echo $c."<br>";
        }
    }else{
        echo 'not - '.$key.' =='.$table_of_two[$count];
        echo '<br>';
        echo $c."<br>";

        $count++;
    }

    echo '<br>';
}