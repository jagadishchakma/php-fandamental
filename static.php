<?php
function increment() {
    static  $x = 0;
    echo $x;
    $x++;
}

increment();
increment();
increment();