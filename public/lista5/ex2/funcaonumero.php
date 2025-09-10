<?php
function verificarnumero($numero) {
    if ($numero % 2 == 0) {
        echo "O número $numero é PAR <br>";
    } else {
        echo "O número $numero é ÍMPAR <br>";
    }
}

verificarnumero(12);
verificarnumero(7);
?>