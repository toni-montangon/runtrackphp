<?php
function hello($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

hello(true);  // Cela affichera "Bonjour"
hello(false); // Cela affichera "Bonsoir"
?>
