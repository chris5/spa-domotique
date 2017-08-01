<?
 echo "hello world!</br>";
 $whoami = exec('uname -a');  // "exec" : execute une fonction shell et récupère le résultat dans $whoami.
 echo $whoami;                // "echo" affiche la variable dans la page html
 ?>