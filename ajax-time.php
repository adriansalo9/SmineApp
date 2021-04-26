<?php

// Si nuestro ajax está enviando datos a este fichero
if (isset($_POST)) {
    $mysqli = new mysqli('episteme', 'practicas2', 'advantia', 'practicas2_miapp');
    $query = 'INSERT INTO puntuacion (id, minutos,segundos,centesimas) VALUES(1, '. $_POST['minutos'].','.$_POST['segundos'].','.$_POST['centesimas'].')';
    $resultado = $mysqli->query($query);
    //$usuario = $resultado->fetch_assoc();
}
