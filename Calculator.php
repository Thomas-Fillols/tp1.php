<?php
include 'test.php';

?>
<form action="calcul.php" method="post">
<input type="number" name="op1" value="texte1"/><br/>
<input type="number" name="op2" value="texte2"/><br/>

<!--<input checked="checked" type="radio" name="op" value="*"/>*<br/>
<input type="radio" name="op" value="+"/>+<br/>
<input type="radio" name="op" value="-"/>-<br/>
<input type="radio" name="op" value="/"/>/<br/>-->



    <?php

    $operateurs ="*+–/";

    for ($cpt = 0; $cpt <= 3; ++$cpt) {
    echo '<input ';
    if ($cpt == 0) {
    echo 'checked="checked" ';
    }
    echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
    }?>

<input type="submit" value="submit" name="action">Envoyer<br/>
    <input type="reset" value="reset">Reset<br/>
</form>