<?
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);

    require_once 'core/init.php';
    $pagetitle = 'Stories';   

    print($GLOBALS['sitename']);
    print_r($GLOBALS['mysql']);
?>