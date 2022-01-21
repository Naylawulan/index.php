<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title> Belajar PHP</title>
    </head>
    <body>
        
        <?php
        /* beberapa baris
           kometar
        */
        
        //variabel php 
        
        $nama = "Sekolah Koding";
        $_123 = "text baru";
        
        echo "<h1> $_123</h1>";
        echo "Hallo <br>";
        echo "Member <br>";
        
        //tipe data -string-
         $nama = "Sekolah Koding";
         $nama2 = 'Bermain Koding';
    
         echo "Selamat datang di \$nama" ;
         
         //tipe data angka/number
         
         $angka = 1000;  
         $angka2 = 3;
         $angka3 = 2;
         
         echo $angka + $angka2;
         
         //operator aritmatik
         //+ - * / % ++ --
         
         //nama = nilai
         $angka  *= $angka2;
         
         echo $angka;
         
         //math method
         //round rand (min, max) max min
         echo "Angka hari adalah". max ($angka3, $angka, $angka2);
         
         //string method
         $text = "Hai semuanya di sini";
         echo str_repeat( str_replace("Hai", "Hallo" , $text),  2);
         
         
         
         
         ?>
    </body>
</html> 
