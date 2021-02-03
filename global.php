<?php 
// global keyword

$name = "Jagadish Chakam";

function getName() {
    global $name;
    echo $name;
}

getName();