<?php

//perulangan for
for ($i =0; $i < 10; $i++){ 
     echo "<p>Ini perulangan ke-$i</p>";
}

// perulangan while
$ulangi = 0;
while($ulangi <10){
    echo "<p>ini adalah absen ke-$ulang</p>";
 $ulangi++;
}

//perulangan do/while
$ulangi = 10;
do {
echo "<p>ini adalah pesanan ke-$ulangi</p>";
$ulangi--;
}while ($ulangi >0)

//perulangan foreach
$books = [
    "Panduan Belajar PHP untuk Pumula",
    "Membangun Aplikasi Web dengan php",
    "tutorial php dan mysql",
    "membuat chat bot dengan php"
];
    echo"<h2>judul buku php:</h2>";
    echo "<ul>"; 
    foreach($books as $buku){
         echo "<li>$buku</li>";
    }
    echo "</ul>";

//perulangan bersarang 1
for($i = 0; $i < 5; $i++){
    for ($j = 0; $j < 10; $j++){
    echo "Ini perulangan ke ($i, $j) <br>";
    }
}

//perulangan bersarang 2
$i = 0;
while($i < 10){
    for($j = 0; $j <10; $j++){
    echo "ini perulangan ke ($i, $j)<br>";
    }
    $i++;
}

?>