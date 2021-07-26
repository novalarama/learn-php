<?php
// menghitung BMI
/**
 * 1. Define weight
 * 2. Define height
 * 3. Count BMI -> Weight / height * height
 * 4. Show number of BMI
 * 5. Show category
 */

 $weight = 62.5;
 $height = 1.70;
 $bmi = $weight / $height * $height;
 echo "Your BMI : $bmi \n";
 if ($bmi < 18.5) {
     echo "Berat Badan Kurang";
 } elseif ($bmi >= 18.5 && $bmi <= 23 ) {
     echo "Berat Badan Normal";
 }elseif ($bmi >= 23){
     echo "Berat Badan Cenderung Obesitas";
 }elseif ($bmi >= 30){
     echo "Obesitas";
 }
 
?>