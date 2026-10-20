<?php
    $i = 1; //ini inisiasi
    while ($i <= 100) { // ini kondisi
        echo $i; 
        $i = $i + 1; //$i++; ini increment
    }
    echo "<br> ini angka";

    echo "<br> di bawah ini pakai for  <br>";
    for($i = 1; $i <= 10; $i++) {
        echo $i. "<br>";
    }

    
    $country = array("Japan", "South Korea", "Singapore", "China", "Canada", "France");

    foreach ($country as $value) {
        echo "$value <br>";
    }
    
    echo "Negara Benua Asia: <br>";
    
    for ($i = 0; $i < 4; $i++)
        echo $country[$i] . "<br>";

?>