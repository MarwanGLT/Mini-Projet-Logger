<?php include __DIR__ . '/logger.php'; ?>

<?php
require_once __DIR__ . '/helpers.php';
write_log("SIGNOUT", current_user()['username'] , "Déconnexion de l'utilisateur");
session_destroy();
header('Location: /');
exit;

