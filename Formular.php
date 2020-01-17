<?php
    echo '<u> Deine Angaben: </u> <br>';
    echo 'Dein Name: ' .$_POST['vorname'] .'<br>';
    echo 'Dein Nachname: ' .$_POST['nachname'] .'<br>';
    echo 'Land: ' .$_POST['land'] .'<br>';
    echo 'Subjekt:' .$_POST['subjekt'] .'<br>';
    echo 'Deine Rückmeldung: ' .$_POST['nachricht'] .'<br>';
    echo 'Deine E-Mail: ' .$_POST['mail'];
    ?>