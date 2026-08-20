<?php

$numero = 11;

if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "é multiplo de 3 e de 5\n";
}else if ($numero % 3 == 0 ) {
    echo "é multiplo de 3\n";
}else if ($numero % 5 == 0) {
    echo "é multiplo de 5\n";
}else{
    echo "esse número não é multiplo de 3 nem de 5";
}

?>