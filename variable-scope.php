<?php

/*
php variable has three different scope
1. global scope
2. local scope
3. static scope
*/

// global scope = a variable declared outside a function called global scope
$say = "I am a global scope variable";
echo $say;
function fullName() {
    $name = "Jagadish Chakma";
}
fullName();

echo "<br>";


// local scope = a variable declared within a function called local scope
function getName() {
    $name = "Jagadish Chakma";
    echo $name;
}

getName();
echo "<br>";