<?
 echo "hello world!</br>";
 $whoami = exec('uname -a');  // "exec" : execute une fonction shell et r�cup�re le r�sultat dans $whoami.
 echo $whoami;                // "echo" affiche la variable dans la page html
 ?>