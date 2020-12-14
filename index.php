<?php
// Salvo in $paragrafo la querystring ?nome = querystring
$parametro = $_GET['nome'];

// Creo un paragrafo;
$frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
$replace = "***";
// Salvo la lunghezza della frase in $length
$length = strlen($frase);

// sostituisco una parola del paragrafo con degli asterischi
$replace = str_replace($parametro, $replace, $frase); //Gli passo il contenuto del parametro, il contenuto di replace, ed, in ordine, dove andare ad eseguire il replace, quindi nel contenuto di $frase.
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
           Querystring: <?php echo $parametro ?>
       </h1>
       <p>
           Length del paragrafo: <?php echo $length ?>
       </p>
       <p>
           <?php echo $replace ?>
       </p>
    </body>
</html>
