<?php   
    $imagenes = array(
        "gato" => "gato(1).jpg",
        "perro" => "perro(1).jpg",
        "pato" => "pato(1).jpg",
        "huron" => "huron(1).jpg");

    foreach ($imagenes as $nombre => $src){
        echo '<img src="img/'. $src .'">';
        echo '<p>'. $nombre .'</p>';
    }
?>
