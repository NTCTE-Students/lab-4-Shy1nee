<?php

$someString = 'My grandmother smokes a pipe.';

function upRegister(&$string) {
    return strtoupper($string);
}

print(upRegister($someString));