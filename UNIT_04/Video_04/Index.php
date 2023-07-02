<?php
// Your code here!
//echo '*'; 
for($i = 0; $i <= 11; $i = $i + 1){
       // if ( $i == 7) continue;  
    if ($i == 7) break;   
    echo $i.' '; 
}

echo "<br>";  


for($i = 10; $i > 0; $i = $i - 1){
         
    echo $i.' '; 
}


echo "<br>";  


// Сумму
$sum = 0;  
for ($i = 0; $i < 11; $i = $i + 1) {
         $sum = $sum + $i;  
//   $sum += $i;  
}  
// 0 1 2 3  
echo $sum;  


echo "<br>";  

// Произведение Умножение 1*2*3*4  
$multi = 1;  
for ($i = 1; $i < 11; $i = $i + 1) {
         $multi = $multi * $i;  
//   $sum += $i;  
}  
//  1*2*3  
echo $multi;  



?>
