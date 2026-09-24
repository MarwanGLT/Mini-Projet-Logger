<?php
require_once __DIR__ . '/helpers.php';
include __DIR__ . '/logger.php';
require_login();
check_csrf();

$me = $_SESSION['user_id'];
$target = (int)($_POST['user_id'] ?? 0);
$action = $_POST['action'] ?? '';

if ($target > 0) {
    if ($action === 'follow') 
    {        
        follow($me, $target);
        write_log("FLW", current_user()['username'], "S'est abonné(e) à " . find_user_by_id($target)['username']);
    }
    if ($action === 'unfollow') 
    {    
        unfollow($me, $target);
        write_log("UNFLW", current_user()['username'], "S'est désabonné(e) de " . find_user_by_id($target)['username']);
    }
}
$ref = $_SERVER['HTTP_REFERER'] ?? '/users.php';
header('Location: ' . $ref);
exit;
