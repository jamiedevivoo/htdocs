<?php
    
$GLOBALS['config'] = array(
    'assets' => 'assets/',
    'siteroot' => 'http://jamiedevivo.com/projects/2018/idoc/',
    'sitename' => 'iDocumentary platform',
    'description' => 'The story of the bombing of Bournemouth on Sunday 23rd May 1943, told from the perspective of people who expireanced it first hand. An Interactive documentary that doesn\'t just tell you facts, but immerses you into the story.'
);

    require_once 'classes/Config.php';  
    require_once 'classes/DB.php';
    require_once 'classes/Story.php';
    require_once 'classes/Player.php';
    require_once 'functions/sanitize.php';