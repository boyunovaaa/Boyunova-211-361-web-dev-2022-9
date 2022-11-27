<?php

$precison = 3; //округление
$x = -11; // начальное значение аргумента
$encounting = 20; // количество вычисляемых значений
$step = 2;  // шаг изменения аргумента
$type = 'C'; // тип верстки


$min_value = 100;
$max_value = 100;
$sum = 0;
$f_mean = 0;
$max_value_func = -10000;
$min_value_func = 10000;


if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}
if ($type == 'D') {
    echo '<table class="func_table" border=1"><tr><th>N</th><th>Аргумент</th><th>Значение функции</th></tr>';
}
if ($type == 'E') {
    echo '<div class="block_func">';
}



$i = 0;
$f = 0;
while ($i < $encounting && ($f >= $max_value || $f <= $min_value)) {

    if ($x <= 10){
        if ($x == 5){
            $f = 'error';
        }
        if ($x != 5){
            $f = (6 / ($x - 5)) * $x - 5;
        }
    }
    else
    if ($x < 20){
        $f = ($x**2 - 1) * $x + 7;
    }
    else{
        $f = 4 * $x + 5;
    }

    if ($f > $max_value_func & $f != 'error') {
        $max_value_func = $f;
    }

    if ($f < $min_value_func & $f != 'error') {
        $min_value_func = $f;
    }

    if ($type == 'A') { 
        echo 'f('.$x.')='.round($f, $precison).'<br>';
        // if ($i < $encounting - 1) {
        //     echo '<br>';
        // }
    }        
    else if ($type == 'B' || $type == 'C') {
        if ( $f == 'error'){
            echo '<li>f('. $x.')='.$f.'</li>';
        }
        else{
        echo '<li>f('. $x.')='.round($f, 3).'</li>';
        }

    }
    else if ($type == 'D') {
        echo '<tr><td>'.$i + 1 .'</td><td>'.$x.'</td><td>'.round($f, $precison).'</td></tr>';  
    } 
    else if ($type == 'E') {
        echo '<div class="block_func-item">f('. $x.')='.round($f, $precison).'</div>';
    }

    if ($f != 'error'){
        $sum += $f;
    }
    $i++; $x += $step;

}

if ($type == 'B') {
    echo '</ul>';
}

if ($type == 'С') {
    echo '</ol>';
}

if ($type == 'D') {
    echo '</table>';
}
if ($type == 'E') {
    echo '</div>';
}

echo '<div class="func_const">Максимальное значение: '. $max_value_func .'<br>';
echo 'Минимальное значение: '. $min_value_func .'<br>';

echo 'Сумма всех значений f: '. $sum .'<br>';
echo 'Среднее значение: '.$sum / $i . '</div>';

        












/*$min_value = 10;
$max_value = 30;
$sum = 0;
$f_mean = 0;
$max_value_func = -200;
$min_value_func = 200;

if ($type == 'A') {
    echo '';
}
if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}

else if ($type == 'D') {
    echo '<table border="1px">'."\n<br>";
    echo '<tr>'."\n<br>";
}


// цикл с заданным количеством итераций
for( $i=0; $i < $encounting; $i++, $x+=$step ) {
    if ($x <= 10){
        if ($x == 5){
            $f = 'error';
        }
        if ($x != 5){
            $f = (6 / ($x - 5)) * $x - 5;
        }
    }
    else
    if ($x < 20){
        $f = ($x**2 - 1) * $x + 7;
    }
    else{
        $f = 4 * $x + 5;
    }

    

    switch ($type) {
        
        case 'A':
            if ($f != "error") {
                $f = (float)$f;
                echo 'f('.$x.')='.round($f, $precison);	                 
            }
            else {
                echo 'f('.$x.')='.$f;
            }            
            if($i < $encounting-1) {                               
                echo '<br>';                                         
            }
            break;
        case 'B':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                 
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;
        case 'C':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                   
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;

        case 'D':
            if ($f != "error") {
                $f = (float)$f;
                echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.round($f, $precison).'</td>'.'</tr>';                 
            }
            else {
                echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.$f.'</td>'.'</tr>';
            }      
           break;
            
        case 'E':           
            if ($f != "error") {
                $f = (float)$f;
                echo '<div class="type_e">f('.$x.')='.round($f, $precison).'</div>';
            }
            else {
                echo '<div class="type_e">f('.$x.')='.$f.'</div>';
            }    
            break;  
           
    }              
    
    
}

if ($f > $max_value_func & $f != 'error') {
    $max_value_func = $f;
}

if ($f < $min_value_func & $f != 'error') {
    $min_value_func = $f;
}
if ($f != 'error'){
    $sum += $f;
}
$i++; $x += $step;

if ($type == 'B') {
    echo '</ul>';
}
if ($type == 'C') {
    echo '</ol>';
}
if ($type == 'D') {
    echo '</tbody></table>';
}
if ($type == 'D') {
    echo '</table>';
}
     

echo '<div class="func_const">Максимальное значение: '. $max_value_func .'<br>';
echo 'Минимальное значение: '. $min_value_func .'<br>';

echo 'Сумма всех значений f: '. $sum .'<br>';
echo 'Среднее значение: '.$sum / $i . '</div>'; */
?>






































<?php
    /*
    $min_value=10;	// минимальное значение, останавливающее вычисления
    $max_value=20;	// максимальное значение, останавливающее вычисления
    $precison = 3;  // точность округления, количество цифр после запятой
    $encounting = 1000;
        
    // цикл с заданным количеством итераций
    for( $i=0; $i < $encounting; $i++, $x+=$step ) {
        $x = -10;	                                                         // начальное значение аргумента
        $encounting = 20;	                                                 // количество вычисляемых значений
        $step = 2;	                                                         // шаг изменения аргумента
        $type = 'C';	                                                     // тип верстки
        if( $type == 'B' ) {	                                             // если тип верстки В
            echo '<ul>';                                                     // начинаем список
        }	
        for( $i=0; $i < $encounting; $i++, $x+=$step ) {                     // цикл с заданным количеством итераций
            if( $x <= 10 ) {	                                             // если аргумент меньше или равен 10
                $f = 32*$x / 21;                                             // вычисляем функцию
            }	                                       
            else {	                                                        
                if ($x < 20) {	                                             // если аргумент меньше 20
                    $f = $x*$x/3 + 7/($x-4);	                             // вычисляем функцию
                }
                else {	                                                     
                    if( $x == 22 ) {	                                     // если аргумент равен 22
                        $f= "error";                                         // не вычисляем функцию
                    }	
                    else {	                                                
                        $f = ( 1 / ($x-22) )*2 + $x;                         // вычисляем функцию
                    }	
                }
                if( $type == 'A' ) {	                                     // если тип верстки А
                    if ($f != "error") {
                        $f = (float)$f;
                        echo 'f('.$x.')='.round($f, $precison);	                 // выводим аргумент и значение функции    
                    }
                    else {
                        echo 'f('.$x.')='.$f;
                    }            
                    if( $i < $encounting-1 ) {                               // если это не последняя итерация цикла
                        echo '<br>';                                         // выводим знак перевода строки
                    }	
                }
                else {	                                                     
                    if( $type == 'B' ) {	                                 // если тип верстки В
                        $f = (float)$f;
                        echo '<ul><li>f('. $x.')='.round($f, $precison).'</li><ul>';                   // выводим данные как пункт списка
                    }
                }
            }
        }    
        if( $type == 'B' )	{                                                // если тип верстки В
            echo '</ul>';	                                                 // закрываем тег списка
        }
    }
    */
?>