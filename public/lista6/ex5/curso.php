<?php
    $curso = "PHP";

    function mostrarCurso() {
        global $curso;
        echo "O curso é: $curso";
        
    } 
    mostrarCurso();
?>