<?php
include "logger.php";

if (($_GET['username']) || ($_GET['message'])) {
    write_log($_GET['username'], $_GET['message']);
    echo "Message envoyé !";
}
?>

<form method="GET">
    Nom : <input type="text" name="username"><br>
    Message : <input type="text" name="message"><br>
    <button type="submit">Envoyer</button>
</form>