<?php
include('index.php');
$genre = $_POST["genre_id"];
$end = $_POST["end_quiz"];

if($genre == "comedy" && $end == "sad") {
        echo("Watch: Pulp Fiction");
    } elseif ($genre == "comedy" && $end == "happy"){
        echo("Watch: Grown Ups");
    } else if ($genre == "romance" && $end == "sad"){
        echo("Watch: The Notebook");
    } else if ($genre == "romance" && $end == "happy"){
        echo("Watch: Beauty and the Beast");
    } else if ($genre == "action" && $end == "sad"){
        echo("Watch: John Wick");
    } else if ($genre == "action" && $end == "happy"){
        echo("Watch: Black Panther");
    }
?>