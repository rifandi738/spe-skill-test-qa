<?php
   echo "Menampilkan Bilangan Prima";
         for ($i=1; $i<=5; $i++) {     // for 1, adalah bilangan yang akan di cek
            $t = 0;
           
            for ($j=1; $j<=$i ; $j++) {  // for 2, bilangan pembagi
                if ($i % $j == 0) {
                    $t++;
                }
            }
           
            if ($t == 2) {   // syarat atau kondisi bilangan prima
                echo " ".$i.",";
            }
        }
   echo '<br>';
   echo "Menampilkan Bilangan Prima";
         for ($i=1; $i<=11; $i++) {     // for 1, adalah bilangan yang akan di cek
            $t = 0;
           
            for ($j=1; $j<=$i ; $j++) {  // for 2, bilangan pembagi
                if ($i % $j == 0) {
                    $t++;
                }
            }
           
            if ($t == 2) {   // syarat atau kondisi bilangan prima
                echo " ".$i.",";
            }
        }
   echo '<br>';
   echo "Menampilkan Bilangan Fibonanci";
   echo '<br>';
    function fibonacciRekursif ($n) {

    if ($n <= 1) {
        return $n;
    }

    return fibonacciRekursif($n - 1) + fibonacciRekursif($n - 2);
    }
    
    echo "Maka Bilangan Fibonacci = ";
    echo fibonacciRekursif(3);
    echo '<br>';

?>
