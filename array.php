<?php

    $mahasiswa = ['yazid','muhammad','supriadi','ahmad'];

    echo $mahasiswa[2];
    echo "<br>";
    echo $mahasiswa[1];
    
    
    echo "<ol>";
    foreach($mahasiswa as $nama){
       echo '<li>'.$nama.'</li>';
    }
    echo "</ol>"
?>